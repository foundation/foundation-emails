var es = require('event-stream');
var gutil = require('gulp-util');
var Buffer = require('buffer').Buffer;

var cheerio = require('cheerio');
var inky = require('gulp-zurb-inky');


module.exports = function () {
  "use strict";

  var body = function (file) {
    if (file.isNull()) { return this.emit('data', file); }
    if (file.isStream()) { return this.emit('error', new Error("gulp-coffee: Streaming not supported")); }

    var str = file.contents.toString('utf8');
    var $ = cheerio.load(str);

    $ = inky.releaseTheKraken($);

    file.contents = new Buffer($.html({normalizeWhitespace: true}));
    console.log($.html())
    this.emit('data', file);
  };

  return es.through(body);
};
