var Cheerio = require('cheerio');
var Inky = require('inky');
var format = require('string-template');
var hljs = require('highlight.js');
var multiline = require('multiline');

var INKY_TEMPLATE = multiline(function() {/*
<div class="docs-code" data-docs-code>
  <pre>
    <code class="{0}">{1}</code>
  </pre>
</div>
<div class="docs-code" data-docs-code>
  <pre>
    <code class="{0}">{2}</code>
  </pre>
</div>
*/});

module.exports = function(code) {
  var $ = Cheerio.load(code);
  var output = Inky.releaseTheKraken($, {});

  var inkyCode = hljs.highlight('html', code).value;
  var htmlCode = hljs.highlight('html', output.html()).value;

  return format(INKY_TEMPLATE, ['html', inkyCode, htmlCode]);
}
