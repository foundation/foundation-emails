/* global describe, it, expect */

"use strict";

var inky = require('../node_modules/gulp-zurb-foundation-email/node_modules/gulp-zurb-inky');

describe("columns", function () {
  it("returns the correct column syntax", function () {

  expect(inky.getTags()).toEqual([ 'panel', 'row', 'container', 'columns', 'button' ]);
  });


});
