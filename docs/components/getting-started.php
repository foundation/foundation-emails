<h1 id="start" data-magellan-destination="start" class="light">Getting Started</h1>
    <p class="lead">Dive into creating your responsive email.</p>
    <hr>
    <h2 class="light">The Boilerplate</h2>
    <p>
      Starting a new Ink project is fairly straightforward.  If you aren't using one of our <a href="templates.php">templates</a>, grab the boilerplate code from below to use as a starting point.  While you can reference <code>ink.css</code> using a link tag for testing purposes, be sure to remove the <kbd>&lt;link rel="stylesheet" href="ink.css" /&gt;</kbd> statement and paste your CSS into the style tag in the head before running your email through an inliner.
    </p>
    <h6>Boilerplate.html</h6>
    <?php code_example(
'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width"/>

    <link rel="stylesheet" href="ink.css"> <!-- For testing only -->

    <style type="text/css">
      
      /* Ink styles go here in production */

      /* Your custom styles go here */

    </style>
  </head>
  <body>
    <table class="body">
      <tr>
        <td class="center" align="center" valign="top">
          <center>

          <!-- Email Content -->

          </center>
        </td>
      </tr>
    </table>
  </body>
</html>'
    , 'html'); ?>
    <br>
    <p>
      If you're applying a background color to your entire email, be sure to attach it to the table with a class of <code>body</code> as well as to the actual <kbd>&lt;body&gt;</kbd> tag, since some clients remove this by default.
    </p>
    <h6>Inline Styles</h6>
    <?php code_example(
'<html>
    
...
    
<body style="background:#ddd">
    <table class="body" style="background:#ddd"> <!-- Background goes here too -->
        
    ...
        
  </table>
</body>'
    , 'html'); ?>
    <br>
    <h6>CSS</h6>
    <?php code_example( 
'body, .body {
  background: #ddd;
}'
    , 'css'); ?>
    <br>