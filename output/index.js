var es = require('event-stream');
var gutil = require('gulp-util');
var Buffer = require('buffer').Buffer;

var cheerio = require('cheerio');

module.exports = function (body) {
  "use strict";

  var body = function (file) {
    if (file.isNull()) { return this.emit('data', file); }
    if (file.isStream()) { return this.emit('error', new Error("gulp-coffee: Streaming not supported")); }

    var str = file.contents.toString('utf8');
    var $ = cheerio.load(str);

    var nestedComponents = function(str) {
      var output   = '';
      var children = $(str);

      $(children).each(function(i, el) {
        var temp = $.html(el);

        if (el.name === 'button') {
          var compClass = $(el).attr('class') || '';
          var inner = $(el).html();
          var buttSize  = 'button';

          if ($(el).attr('size')) {
            buttSize = $(el).attr('size') + '-button';
          }

          temp = '<table class="' + buttSize + ' ' + compClass +'"><tbody><tr><td>' + inner + '</td></tr></tbody></table>'
        }

        output += temp;
      });

      return output;
    };

    var componentFactory = function(element, type, content) {
      var output = '';
      var component = $(element);
      var inner = content || $(element).html();
      var compClass = '';

      if ($(component).attr('class')) {
        compClass = $(component).attr('class');
      };

      if ($(element).children('button').length > 0) {
        inner = nestedComponents(inner);
      }
      if (type === "panel") {
        output = '<td class="panel ' + compClass +'">' + inner + '</td>';
      }
      else if (type === "button") {
        output = '<td><table class="button ' + compClass +'"><tbody><tr><td>' + inner + '</td></tr></tbody></table></td>'
      }
      else {
        // unless it's a special element, just grab the inside
        // another cheerio quirk
        inner = $.html(element);
        output = '<td>' + inner + '</td>';
      }

      return output;
    };



    var createCol = function(obj) {
      var output   = '';

      // create tables with column class for each nested element
      var colElements = function(elements, colSize) {
        var colHTML = '';
        var colContent = '';
        $(elements).each(function(i, el) {
          // get included tags of each element in the column
          var element  = el;
          var elType   = el.name;
          var colClass = 'columns ';

          // transclude any class that might have been added onto element
          if ($(el).attr('class')) {
            colClass += $(el).attr('class');
          };

          colContent = componentFactory(element, elType);

          // construct column class for each element
          colHTML += '<table class="' + colClass + ' ' + colSize + '">'
                  +'<tr>'
                  + colContent +'<td class="expander"></td></tr></table>';
        });

        // search for still existing elements

        return colHTML;
      };

      // create tables with wrapper class for each column
      
      var colCount = obj.length;

      $(obj).each(function(k,v) {
        var wrapperHTML = '';
        var colSize     = '';
        var col         = $(v)[0];
        var elements    = $(v).children();
        var colClass    = '';
        if ($(col).attr('class')) {
          colClass = $(col).attr('class');
        }

        // if wrapper is last or the only one, put last class
        if (!obj[k].data) {
          wrapperHTML = '<td class="wrapper ' + colClass + '">';
        }
        // weird math thing to do with cheerio including closing tags and stuff
        // so it throws off the number of objects being counted as elements
        if (k === colCount - 3) {
            wrapperHTML = '<td class="wrapper ' + colClass + 'last">';
        }
        // check for sizes
        if ($(col).attr('small')) {
          colSize += 'small' + '-' + $(col).attr('small') + ' ';
        }
        if ($(col).attr('large')) {
          colSize += 'large' + '-' + $(col).attr('large') + ' ';
        }

        wrapperHTML += colElements(elements, colSize);
        wrapperHTML += '</td>';

        output += wrapperHTML;
      });

      return output;
    };

    $('row').each(function(i) {
      var contents = $(this).html();
      var rowClass = '';
      // if row does has nested elements (i.e. not empty)
      if ($(this).children('column')) {
        contents = createCol($(contents));
      }
      if ($(this).attr('class')) {
        rowClass = $(this).attr('class');
      }

      $(this).replaceWith('<table class="row ' + rowClass + '"><tbody><tr>'+ contents + '</tr></tbody></table>');

    });


    $('container').each(function() {
      var contents = $(this).html();

      $(this).replaceWith('<table class="container"><tbody><tr><td>' + contents + '</td></tr></tbody></table>');
    });


    file.contents = new Buffer($.html({normalizeWhitespace: true}));
    this.emit('data', file);
  };

  return es.through(body);
};
