var cheerio = require('cheerio');


var Inky = function Inky () {
  this.zfTags = {
    button: 'button',
    row: 'row',
    callout: 'callout',
    columns: 'columns',
    subcolumns: 'subcolumns',
    container: 'container'
  }
};

Inky.prototype = {
  // Description:
  //    Returns the object zfTags
  // Arguments:
  //    null
  // Returns:
  //    null
  getTags: function() {
    return this.zfTags;
  },

  // Description:
  //    Sets the object property zfArray to an array containing the markup for our ZF custom elements
  // Arguments:
  //    null
  // Returns:
  //    null
  setTagArray: function() {
    var arr = [];
    var self = this;
    
    for (val in self.zfTags) {
      arr.push(self.zfTags[val]);
    }
    self.zfArray = arr;
  },

  // Description:
  //   Takes in HTML loaded via Cheerio as an argument, checks if there are any custom components.
  //   If there are, it replaces the nested components, traverses the DOM and replaces them with
  //   email markup.
  //
  // Arguments:
  //    $: Cheerio loaded string
  // Returns:
  //    $: Cheerio modified string
  releaseTheKraken: function($) {
    var center = $('center').html(),
        self   = this;

    // create an array of our custom tags
    self.setTagArray();

    //find nested components
    if (self.checkNestedComponents($) !== false) {
      var nestedComponents = self.findNestedComponents($, center);

      // process each element to get the table markup
      $(nestedComponents).each(function(idx, el) {
        var containerScaffold = self.scaffoldElements($, $(el));
      });
      // see the mark up for dev purposes
      // console.log($.html());
    }
    else {
      console.log("all done");
    }
    return $;
  },

  // Description:
  //   Executes a function place the correct mark up for custom components in the correct place in the DOM
  //   It is a recursive function that drills down the DOM to find all custom nested elements within an element
  //   and replaces the custom tags with the correct table email markup.
  //
  // Arguments:
  //    $, str (String): Cheerio, and a string containing the markup of a singular element
  // Returns:
  //    str (String): A string containing the markup of inputted element with contained elements
  scaffoldElements: function($, str) {
    // take inner html of elements and nest them inside each others
    var output   = '',
        elMarkup = '',
        element  = $(str)[0],
        inner    = $(str).html(),
        self     = this;


    // replace tags with proper table syntax
    // elMarkup retains the inner html within the markup
    if (element !== undefined) {
      elMarkup = self.componentFactory($, element, element.name);
      $(element).replaceWith(elMarkup);
    }
    else {
      return;
    }

    // find if there are more nested elements in the inner syntax
    var moreNested = self.findNestedComponents($, inner);

    $(moreNested).each(function(idx, el) {
      // call a recursion to replace all nested elements
      self.scaffoldElements($, $(el));
    });
  },

  // Description:
  //   Executes a function to find and return nested custom elements within another element
  //
  // Arguments:
  //    $, str (String): Cheerio, and a string containing the markup of an element to be checked for nested components
  // Returns:
  //    nestedComponents (Array): An array containing the names (i.e. tags) of the nested components
  findNestedComponents: function($, str) {
    var nestedComponents = [],
        self             = this,
        children;

    // if array hasn't been set yet, set it with properties of object
    if (!self.zfArray) {
      self.setTagArray();
    }
    // if the nested component is an element, find the children
    // NOTE: this is to avoid a cheerio quirk where it will still pass
    // special alphanumeric characters as a selector
    if (str.indexOf('<') !== -1) {
      children = $(str);
    };

    $(children).each(function(i, el) {
      // if the element's name matches an element in the array
      if (self.zfArray.indexOf(el.name) !== -1) {
        // push them to array of nested component names
        nestedComponents.push(el.name);
      }
    });
    // return array containing all nested components
    return nestedComponents;
  },

  // Description:
  //   Goes through array of custom nested components to determine whether or not there are any on the DOM
  //
  // Arguments:
  //    $ : Cheerio
  // Returns:
  //    boolean: True if there are nested components on the DOM, false otherwise.
  checkNestedComponents: function($) {
    var self = this;

    // if array hasn't been set yet, set it with properties of object
    if (!self.zfArray) {
      self.setTagArray();
    }

    $(self.zfArray).each(function() {
      // check if custom elements still exist
      if ($(this).index() !== -1) {
        return true; 
      }
      else {
        return false;
      }
    });
  },

  // Description:
  //    Returns output for desired custom element
  //
  // Arguments:
  //   $, element (obj), type (str): cheerio, element as a cheerio object, and type as the tag name
  // Returns:
  //    HTML (string): Mark up for corresponding element with inner html contents untouched
  componentFactory: function($, element, type) {
    var output    = '',
        component = $(element),
        inner     = $(element).html(),
        compClass = '',
        self      = this;

    if ($(component).attr('class')) {
      compClass = $(component).attr('class');
    };

    switch (type) {
      case self.zfTags.callout:
        output = '<td class="callout ' + compClass +'">' + inner + '</td>';
        break;

      case self.zfTags.button:
        output = '<table class="button ' + compClass +'"><tbody><tr><td>' + inner + '</td></tr></tbody></table>';
        break;
      // TODO: This is super messed up right now
      case self.zfTags.subcolumns:
        var subColSize = '';

        if ($(component).attr('small')) {
          subColSize += 'small' + '-' + $(component).attr('small') + ' ';
        }
        if ($(component).attr('large')) {
          subColSize += 'large' + '-' + $(component).attr('large') + ' ';
        }

        if ($(component).next()[0].name !== 'subcolumns') {
          output = '<td class="sub-columns last ' + compClass + ' ' + subColSize +'">' + inner + '</td>';
        }
        else {
          output = '<td class="sub-columns ' + compClass + ' ' + subColSize +'">' + inner + '</td>';
        }
        break;

      case self.zfTags.container:
        output = '<table class="container ' + compClass + '"><tbody><tr><td>' + inner + '</td></tr></tbody></table>';
        break;

      case self.zfTags.columns:
        output = self.makeCols($, component);
        break;
      
      case self.zfTags.row:
        output = '<table class="row ' + compClass + '"><tbody><tr>'+ inner + '</tr></tbody></table>';
        break;

      default: 
        // unless it's a special element, just grab the inside
        // another cheerio quirk
        inner = $.html(element);
        output = '<td>' + inner + '</td>';
    };

    return output;
  },

  // Description:
  //    Returns output for column elements. TODO: this could be refactored to handle both cols and subcols
  //
  // Arguments:
  //    $ (obj), col (obj): cheerio, the target column
  // Returns:
  //    HTML (string): Mark up for columns all contained in a row
  makeCols: function($, col) {
    var output      = '',
        wrapperHTML = '',
        colSize     = '',
        colClass    = '',
        inner       = $(col).html();


    if ($(col).attr('class')) {
      colClass = $(col).attr('class');
    }

    // if it is the last column, add the class last
    if (!$(col).next()[0]) {
      output = '<td class="wrapper ' + colClass + 'last">';

    } else {
      output = '<td class="wrapper ' + colClass + '">';
    }

    // check for sizes
    if ($(col).attr('small')) {
      colSize += 'small' + '-' + $(col).attr('small') + ' ';
    }
    if ($(col).attr('large')) {
      colSize += 'large' + '-' + $(col).attr('large') + ' ';
    }

    output += '<table class="' + colSize + 'columns"><tr>';

    // subcolumns do not need an extra td
    // otherwise, place stuff inside columns in a td
    if ($(col).children()[0] && $(col).children()[0].name !== 'subcolumns') {
      output += '<td>' + inner + '</td>';
    }
    else {
      output += inner;
    }

    output += '<td class="expander"></td></tr></table>';

    return output;
  }
};

module.exports = new Inky();