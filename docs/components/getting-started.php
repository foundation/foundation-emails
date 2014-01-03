<h1 id="start" data-magellan-destination="start" class="light">Getting Started</h1>
<p class="lead">Dive into creating your responsive email.</p>
<hr>
<h2 class="light">The Boilerplate</h2>
<p>
  Starting a new Ink project is fairly straightforward. If you aren&#8217;t using one of our <a href="templates.php">templates</a>, grab the boilerplate code from below to use as a starting point. While you can reference <code>ink.css</code> using a <kbd>&lt;link&gt;</kbd> tag for testing purposes, be sure to remove the <kbd>&lt;link rel="stylesheet" href="ink.css" /&gt;</kbd> statement and paste your CSS into the <kbd>&lt;style&gt;</kbd> tag in the head before running your email through an inliner.
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
      
    </style>
    <style type="text/css">

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
  If you&#8217;re applying a background color to your entire email, be sure to attach it to the table with a class of <code>body</code> as well as to the actual <kbd>&lt;body&gt;</kbd> tag, since some clients remove this by default.
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
<hr>
<h2 class="light">Sending Your Email</h2>
<p>Sending HTML email is a lot different than sending plain text email. While it may be tempting to just open the email in a browser and click &#8220;share&#8221; or to use the &#8220;Insert HTML&#8221; function of your favorite email client, this often strips off a lot of the styling and makes your email completely unusable on mobile devices.</p>
<p>To get the best results, we recommend that you send your HTML email using an <a href="http://en.wikipedia.org/wiki/Email_service_provider_(marketing)">Email Service Provider (ESP)</a> such as <a href="http://mailchimp.com">Mailchimp</a> or <a href="http://campaignmonitor.com">Campaign Monitor</a>. If you&#8217;re just running a quick test and don't want to sign up for an ESP, sending from the command line using a scripting language like <a href="http://php.net/manual/en/function.mail.php">PHP</a> or <a href="http://ruby-doc.org/stdlib-2.0/libdoc/net/smtp/rdoc/Net/SMTP.html">Ruby</a> usually works fine.</p>
<hr>
<h2 class="light">Testing and Troubleshooting</h2>
<p>Since targeting a <a href="#compatibility">diverse range of email clients</a> requires some specific and rather quirky markup, Ink doesn&#8217;t always preview properly in the browser. When doing browser tests, we recommend using the latest version of <a href="http://google.com/chrome">Chrome</a>, <a href="http://www.apple.com/safari/">Safari</a> or <a href="http://www.opera.com/">Opera</a>, since Ink doesn&#8217;t always display properly in Firefox or Internet Explorer.</p>
<p>Testing in the browser isn't enough, however, and you should always test in actual email clients. If you don't have access to the actual clients you want to test, a testing service like <a href="https://litmus.com/">Litmus</a> or <a href="http://www.emailonacid.com/">Email on Acid</a> can help.</p>
<p>If you're having trouble with an email, the first thing to check is the markup. Often times a simple error like a forgotten <kbd>&lt;tr&gt;</kbd> or a nested tag that&#8217;s been closed in the wrong order can wreak havoc on your design. If that&#8217;s not the problem, it could be an issue with your ESP. <strong>Some senders prepend an <kbd>&lt;html&gt;</kbd> tag to your message, which causes the DOCTYPE tag to not be interpreted by the email recipient.</strong> To see if this is what&#8217;s happening, try sending a test email to yourself and using the &#8220;show original&#8221; or &#8220;raw source&#8221; option in your mail client to manually inspect the code.</p>