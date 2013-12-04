<?php $thisPage="docs";
      include_once 'geshi.php';
    
      function code_example($code, $lang) {
        if (strtolower($lang) == 'html') {
          $lang = 'html5';
        }
        geshi_highlight($code, $lang);
      }
?>

<?php $title = "Ink: Responsive Email Documentation"; include 'includes/_header.php' ?>
<section role="main">
<?php include 'includes/_top-bar.php' ?>

<section class="top-area">
  <div class="row">
    <div class="large-12 columns">
      <a class='sidebar-button show-for-small' id="sidebarButton" href="#sidebar" ><img alt="Menu-wht" src="images/offcanvas/menu-wht.png" /><h4>Ink</h4></a>
      <h2 class="hide-for-small">Documentation</h2>
    </div>
  </div>
</section>

<?php include 'docs/docs.php' ?>

<section class="callout course" id="training">
  <div class="row">
    <div class="large-4 columns">
      <div class="course-image">
        <a href="http://zurb.com/university/responsive-emails-intro?utm_source=Ink%20Marketing%20Site&utm_medium=Marketing%20Site&utm_content=Ink%20Docs%20Page&utm_campaign=Introduction%20to%20Responsive%20Emails" target="_blank"><img src="http://zurb.com/university/assets/courses/responsive-emails-intro.png"/></a>
      </div>
    </div>
    <div class="large-7 columns">
      <div class="course-callout">
        <h3 class="light">Responsive Email Design Training</h3>
        <p>We practice Responsive Email Design daily at ZURB, sending out 10 email newsletter campaigns a month and creating email templates for our clients. We even built Ink to help us and others send emails. This course covers the basics that designers and developers &mdash; even marketers &mdash; should know to get started with responsive emails.</p>
        <a href="http://zurb.com/university/responsive-emails-intro?utm_source=Ink%20Marketing%20Site&utm_medium=Marketing%20Site&utm_content=Ink%20Docs%20Page&utm_campaign=Introduction%20to%20Responsive%20Emails" class="button primary" target="_blank">View Course</a>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/_subscribe.php' ?>	
<div class="show-for-small">
  <ul class="mobile-nav">
    <li><a href="index.php">Home</a></li>
    <li><a href="process.php">Process</a></li>
    <li><a class="current" href="docs.php">Docs</a></li>
    <li><a href="templates.php">Email Templates</a></li>
  </ul>
</div>
<?php include 'includes/_footer.php' ?>