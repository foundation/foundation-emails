<?php
  
  include 'vendor/geshi.php';
  
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
  <script src="http://zurb.com/ink/javascripts/vendor/jquery.js"></script>
  <script src="http://zurb.com/ink/javascripts/foundation/foundation.js"></script>
  <script src="http://zurb.com/ink/javascripts/foundation/foundation.abide.js"></script>
  <script src="http://zurb.com/ink/javascripts/foundation/foundation.alerts.js"></script>
  <script src="http://zurb.com/ink/javascripts/foundation/foundation.clearing.js"></script>
  <script src="http://zurb.com/ink/javascripts/foundation/foundation.cookie.js"></script>
  <script src="http://zurb.com/ink/javascripts/foundation/foundation.dropdown.js"></script>
  <script src="http://zurb.com/ink/javascripts/foundation/foundation.forms.js"></script>
  <script src="http://zurb.com/ink/javascripts/foundation/foundation.interchange.js"></script>
  <script src="http://zurb.com/ink/javascripts/foundation/foundation.joyride.js"></script>
  <script src="http://zurb.com/ink/javascripts/foundation/foundation.magellan.js"></script>
  <script src="http://zurb.com/ink/javascripts/foundation/foundation.orbit.js"></script>
  <script src="http://zurb.com/ink/javascripts/foundation/foundation.placeholder.js"></script>
  <script src="http://zurb.com/ink/javascripts/foundation/foundation.reveal.js"></script>
  <script src="http://zurb.com/ink/javascripts/foundation/foundation.section.js"></script>
  <script src="http://zurb.com/ink/javascripts/foundation/foundation.tooltips.js"></script>
  <script src="http://zurb.com/ink/javascripts/foundation/foundation.topbar.js"></script>
  <script src="http://zurb.com/ink/javascripts/foundation/jquery.offcanvas.js"></script>
  <script src="http://zurb.com/ink/javascripts/app.js"></script>
  <script type="text/javascript">
    $(document).foundation();
  </script>
</body>
</html>