<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link rel="icon" href="images/icons/favicon.ico" type="image/x-icon" />
  <?php 
    if($download_file) {
      echo "<meta http-equiv=\"Refresh\" content=\"0.5; url=downloads/$download_file\" />";
    }
  ?>
  <title><?php if (isset($title)) {echo $title;}
    else {echo "Ink: A Responsive Email Framework from ZURB";} ?></title>
  <link rel="stylesheet" href="stylesheets/app.css">
  <script src="javascripts/vendor/custom.modernizr.js"></script>
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-2195009-47', 'zurb.com');
    ga('send', 'pageview');
  </script>
</head>

<body class="off-canvas hide-extras"> 

