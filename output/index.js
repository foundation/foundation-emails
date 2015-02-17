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

    var customTags = [
      "panel",
      "row",
      "container",
      "columns",
      "button"
    ];

    // Description:
    //    Returns output for column elements
    //
    // Arguments:
    //    col (obj), siblings (str): the initial target column and its siblings within the same row 
    // Returns:
    //    HTML (string): Mark up for columns all contained in a row
    var makeCols = function(col, siblings) {
      var output = '';
      var columns = [col, siblings];
      var colCount = col.length + siblings.length;

      $(columns).each(function(i, el) {
        var wrapperHTML = '';
        var colSize     = '';
        var col         = $(el)
        var inner       = $(el).html();

        var colClass    = '';
        if ($(col).attr('class')) {
          colClass = $(col).attr('class');
        }

        wrapperHTML = '<td class="wrapper ' + colClass + '">';

        if (i === colCount - 1) {
            wrapperHTML = '<td class="wrapper ' + colClass + 'last">';
        }
        // check for sizes
        if ($(col).attr('small')) {
          colSize += 'small' + '-' + $(col).attr('small') + ' ';
        }
        if ($(col).attr('large')) {
          colSize += 'large' + '-' + $(col).attr('large') + ' ';
        }

        wrapperHTML += '<table class="' + colSize + 'columns"><tr><td>';
        wrapperHTML += inner;
        wrapperHTML += '</td><td class="expander"></td></tr></table>';

        $(col).replaceWith(wrapperHTML);
      });
    }

    // Description:
    //    Returns output for desired custom element
    //
    // Arguments:
    //    element (obj), type (str): element as a cheerio object and type as the tag name
    // Returns:
    //    HTML (string): Mark up for corresponding element with inner html contents untouched
    var componentFactory = function(element, type) {
      var output = '';
      var component = $(element);
      var inner = $(element).html();
      var compClass = '';

      if ($(component).attr('class')) {
        compClass = $(component).attr('class');
      };

      if (type === "panel") {
        output = '<td class="panel ' + compClass +'">' + inner + '</td>';
      }
      else if (type === "button") {
        output = '<table class="button ' + compClass +'"><tbody><tr><td>' + inner + '</td></tr></tbody></table>'
      }
      // TODO: This is super messed up right now
      else if (type === "subcolumn") {
        var subColSize = '';

        if ($(component).attr('small')) {
          subColSize += 'small' + '-' + $(component).attr('small') + ' ';
        }
        if ($(component).attr('large')) {
          subColSize += 'large' + '-' + $(component).attr('large') + ' ';
        }
        output = '<td class="sub-columns ' + compClass + ' ' + subColSize +'">' + inner + '</td>';
      }
      else if (type === "container") {
        output = '<table class="container ' + compClass + '"><tbody><tr><td>' + inner + '</td></tr></tbody></table>'
      }
      else if (type === "columns") {
        makeCols(component, component.nextAll('columns'));
      }
      // TODO: INTEGRATE COL FUNCTION
      else if (type === "row") {
        output = '<table class="row ' + compClass + '"><tbody><tr>'+ inner + '</tr></tbody></table>';

      }
      else {
        // unless it's a special element, just grab the inside
        // another cheerio quirk
        inner = $.html(element);
        output = '<td>' + inner + '</td>';
      }

      return output;
    };

    // Description:
    //   Goes through array of custom nested components to determine whether or not there are any on the DOM
    //
    // Arguments:
    //    null
    // Returns:
    //    boolean: True if there are nested components on the DOM, false otherwise.
    var checkNestedComponents = function() {
      $(customTags).each(function() {
        // check if custom elements still exist
        if ($(this).index() !== -1) {
          return true; 
        }
        else {
          return false;
        }
      });
    }

    // Description:
    //   Executes a function to find and return nested custom elements within another element
    //
    // Arguments:
    //    str (String): A string containing the markup of an element to be checked for nested components
    // Returns:
    //    nestedComponents (Array): An array containing the names (i.e. tags) of the nested components
    var findNestedComponents = function(str) {
      var nestedComponents = [];
      var children;

      // if the nested component is an element, find the children
      // NOTE: this is to avoid a cheerio quirk where it will still pass
      // special alphanumeric characters as a selector
      if (str.indexOf('<') !== -1) {
        children = $(str);
      };

      $(children).each(function(i, el) {
        // if the element's name matches an element in the array
        if (customTags.indexOf(el.name) !== -1) {
          // push them to array of nested component names
          nestedComponents.push(el.name);
        }
      });

      // return array containing all nested components
      return nestedComponents;
    }

    // Description:
    //   Executes a function place the correct mark up for custom components in the correct place in the DOM
    //   It is a recursive function that drills down the DOM to find all custom nested elements within an element
    //   and replaces the custom tags with the correct table email markup.
    //
    // Arguments:
    //    str (String): A string containing the markup of a singular element
    // Returns:
    //    str (String): A string containing the markup of inputted element with contained elements
    var scaffoldElements = function(str) {
      // take inner html of elements and nest them inside each others
      var output   = '',
          elMarkup = '',
          element  = $(str)[0],
          inner    = $(str).html();

      // replace tags with proper table syntax
      // elMarkup retains the inner html within the markup
      elMarkup = componentFactory(element, element.name);

      $(element).replaceWith(elMarkup);
      // find if there are more nested elements in the inner syntax
      var moreNested = findNestedComponents(inner);

      $(moreNested).each(function() {
        // call a recursion to replace all nested elements
        scaffoldElements($(this));
      });
    }

    var releaseTheKraken = function() {
      var center = $('center').html();

      // find nested components
      if (checkNestedComponents() !== false) {
        var nestedComponents = findNestedComponents(center);

        // process each element to get the table markup
        $(nestedComponents).each(function() {
          var containerScaffold = scaffoldElements($(this));
        });
        console.log($.html());
      }
      else {
        console.log("all done");
      }
    }();


    file.contents = new Buffer($.html({normalizeWhitespace: true}));
    this.emit('data', file);
  };

  return es.through(body);
};
