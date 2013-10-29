<?php $thisPage="docs";
      include_once 'geshi.php';
    
      function code_example($code, $lang) {
        if (strtolower($lang) == 'html') {
          $lang = 'html5';
        }
        geshi_highlight($code, $lang);
      }
?>
<?php include 'includes/_header.php' ?>
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

<?php include 'docs/index.php' ?>

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