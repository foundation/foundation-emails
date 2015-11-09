var Cheerio = require('cheerio');
var Inky = require('inky');
var format = require('string-template');
var hljs = require('highlight.js');
var multiline = require('multiline');
var fs = require('fs');
var path = require('path');

var fileCounter = 0;
var examplesPath = path.join(process.cwd(), './_build/examples');

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
<iframe class="docs-code-iframe" src="examples/{3}"></iframe>
*/});

var IFRAME_TEMPLATE = multiline(function() {/*
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width"/>
    <link rel="stylesheet" href="../assets/css/ink.css">
  </head>
  <body>
    <table class="body">
      <tr>
        <td class="center" align="center" valign="top">
          <table class="container">
            <tr>
              <td>
                {0}   
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </body>
</html>
*/});

module.exports = function(code) {
  // Load Inky code sample into Inky parser
  var $ = Cheerio.load(code);
  var output = Inky.releaseTheKraken($, {});

  // Separate Inky code and HTML code
  var inkyCode = hljs.highlight('html', code).value;
  var htmlCode = hljs.highlight('html', output.html()).value;

  // Create iframe code
  var iframeCode = format(IFRAME_TEMPLATE, [output.html()]);
  var iframeFile = 'example-' + (fileCounter++) + '.html';

  // Create folder for code samples if it doesn't exist
  if (!fs.existsSync(examplesPath)) {
    fs.mkdirSync(examplesPath);
  }

  // Write an iframe with the full HTML needed to the build folder
  fs.writeFileSync(path.join(examplesPath, iframeFile), iframeCode);

  // Return a final code sample with Inky source, HTML source, and iframe reference
  return format(INKY_TEMPLATE, ['html', inkyCode, htmlCode, iframeFile]);
}
