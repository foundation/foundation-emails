<?php
  
  include 'geshi.php';
  
  function code_example($code, $lang) {
    if (strtolower($lang) == 'html') {
      $lang = 'html5';
    }
    geshi_highlight($code, $lang);
  }
  
?>
<html>
<head>
  <title>Ink Docs TEST</title>
  <link rel="stylesheet" href="http://zurb.com/ink/stylesheets/app.css">
  <style type="text/css">
    iframe {
      width: 100%;
      border: 1px solid #ddd;
    }
  </style>
</head>
<body>
  <?php include 'docs.php' ?>
</body>
</html>