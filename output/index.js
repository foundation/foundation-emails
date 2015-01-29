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

    var insertComponents = function(element, type) {
      var output     = '';
      var component  = $(element);
      var inner      = $(element).html();
      var compClass  = '';

      if ($(component).attr('class')) {
        compClass = $(component).attr('class');
      };

      if (type === "panel") {
        output += '<td class="panel ' + compClass +'">' + inner + '</td>';
      }
      else if (type === "button") {
        output += '<td><table class="button ' + compClass +'"><tbody><tr><td>' + inner + '</td></tr></tbody></table></td>'
      }
      else {
        output += '<td>' + inner + '</td>';
      }

      return output;
    };

    var createCol = function(obj) {
      var output   = '';

      // create tables with column class for each nested element
      var colElements = function(elements, colSize) {
        var colHTML = '';
        $(elements).each(function(i, el) {
          // get included tags of each element in the column
          var element  = $(el)[0];
          var elType   = $(el)[0].name;
          var colClass = 'columns ';
          var content  = '';

          // transclude any class that might have been added onto element
          if ($(el).attr('class')) {
            colClass += $(el).attr('class');
          };
          content = insertComponents(element, elType);

          // construct column class for each element
          colHTML += '<table class="' + colClass + ' ' + colSize+'">'
                  +'<tr>'
                  + content +'<td class="expander"></td></tr></table>';
        });

        return colHTML;
      };

      // create tables with wrapper class for each column
        
      // weird math thing to do with cheerio including closing tags and stuff
      // so it throws off the number of objects being counted as elements
      var colCount = Math.round((obj.length - 1 / 2));

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
          if (k === colCount) {
            wrapperHTML += '<td class="wrapper ' + colClass + ' last">';
          } else {
            wrapperHTML += '<td class="wrapper ' + colClass + '">';
          }
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

      // if row does has nested elements (i.e. not empty)
      if ($(this).children('column')) {
        contents = createCol($(contents));

      }

      $(this).replaceWith('<table class="row"><tbody><tr>'+ contents + '</tr></tbody></table>');

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
