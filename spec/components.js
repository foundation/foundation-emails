/* global describe, it, expect */

"use strict";

var inky = require('../node_modules/gulp-zurb-foundation-email/node_modules/gulp-zurb-inky');
var cheerio = require('../node_modules/gulp-zurb-foundation-email/node_modules/cheerio');

describe("the components", function () {

  it("returns basic button syntax", function () {
    var $ = cheerio.load('<center><row><columns large="12"><button>Big button</button></columns></row></center>');
    
    $ = inky.releaseTheKraken($);
    expect($.html()).toEqual('<center><table class="row "><tbody><tr><td class="wrapper last"><table class="large-12 columns"><tr><td><table class="button "><tbody><tr><td>Big button</td></tr></tbody></table></td><td class="expander"></td></tr></table></td></tr></tbody></table></center>');
  });




});
