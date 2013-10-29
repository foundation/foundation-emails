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
</head>
<body>
  <?php include 'docs.php' ?>
</body>
</html>