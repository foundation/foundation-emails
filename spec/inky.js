"use strict";

var inky = require('../node_modules/gulp-zurb-foundation-email/node_modules/gulp-zurb-inky');

describe("inky", function () {
  it("should be targetting custom tags", function () {

  expect(inky.getTags()).toEqual([ 'callout', 'row', 'container', 'columns', 'button', 'subcolumns' ]);
  });

});
