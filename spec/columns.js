/* global describe, it, expect */

"use strict";

var inky = require('../node_modules/gulp-zurb-foundation-email/node_modules/gulp-zurb-inky');
var cheerio = require('../node_modules/gulp-zurb-foundation-email/node_modules/cheerio');

describe("the grid", function () {

  beforeEach(function() {
    // var str = inky.getHTML();
    var $ = cheerio.load("<div>Hello</div>");
  });
  it("returns the correct column syntax", function () {
    var $ = cheerio.load('<center><container><row><columns large="10"><h3>This is 10 Columns</h3></columns><columns large="2"><h3>This is 2 Columns</h3></columns></row></container></center>');
    $ = inky.releaseTheKraken($);
    expect($.html()).toEqual('<center><table class="container "><tbody><tr><td><table class="row "><tbody><tr><td class="wrapper "><table class="large-10 columns"><tr><td><h3>This is 10 Columns</h3></td><td class="expander"></td></tr></table></td><td class="wrapper last"><table class="large-2 columns"><tr><td><h3>This is 2 Columns</h3></td><td class="expander"></td></tr></table></td></tr></tbody></table></td></tr></tbody></table></center>');
  });


});
