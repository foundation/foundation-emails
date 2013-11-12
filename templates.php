<?php $thisPage="templates"; ?>
<?php $title = "Ink: Responsive Email Templates"; include 'includes/_header.php' ?>
<section role="main">
<?php include 'includes/_top-bar.php' ?>

<section class="top-area">
  <div class="row">
    <div class="large-12 columns">
      <a class='sidebar-button show-for-small' id="sidebarButton" href="#sidebar" ><img alt="Menu-wht" src="images/offcanvas/menu-wht.png" /><h4>Ink</h4></a>
      <h2 class="hide-for-small">Email Templates</h2>
    </div>
  </div>
</section>

<div class="row top-headlines">
  <div class="large-12 columns">
    <h1 class="light text-center">Responsive email templates built on Ink</h1>
    <p class="lead text-center">Example emails to see Ink in action</p>
  </div>
</div>

<div class="row">
  <div class="large-8 columns">
    <div class="how-to-use-templates">
      <h3 class="light">How to use our email templates</h3>
      <br>
      <p>Each template is a single HTML email built using Ink. You can preview them and inspect the code to see how they were implemented, or download them and try making some changes. Each template already has Ink included in a style tag at the top of the file.</p>
      <p>You can see screenshots of how each template looks on different email clients by viewing its tests. Note that if you are going to send or test them yourself, you need to run them through the <a href="http://zurb.com/ink/inliner.php">Ink Inliner</a> first.</p>
      <div class="inky-small"><img src="images/inky-template.svg"/></div>
    </div>
  </div>
</div>

<div class="row">
  <div class="small-12 columns">
    <hr>
  </div>
</div>
    
<div class="row">
  <div class="small-12 columns">
    <h5 class="normal">You can download all of the templates in one file here:</h6>
    <a href="downloads/templates/all-templates.zip" class="button primary" onClick="ga('send', 'event', 'Ink', 'Download', 'templates/all.zip');">All Ink Templates</a>
    <br><br>
    <ul class="large-block-grid-3 small-block-grid-1 template-thumbs">
      <li>
        <a href="downloads/templates/basic.html" class="preview" target="_blank">
          <div class="preview-post"><h5>Preview</h5></div>
          <img src="images/templates/basic.jpg" class="thumb">
        </a>
        <h6 class="name"><span>Basic</span> <a href="https://litmus.com/pub/85a1b19">View Tests</a></h6>
        <span class="description">This template is perfect for sending a basic but nice looking email to your readers.</span>
        <a href="downloads/templates/basic.html.zip" class="button primary" onClick="ga('send', 'event', 'Ink', 'Download', 'templates/basic.html.zip');">Download</a>
        <a href="https://notableapp.com/posts/745212" class="button secondary" target="_blank">More Info</a>
      </li>
      <li>
        <a href="downloads/templates/hero.html" class="preview" target="_blank">
          <div class="preview-post"><h5>Preview</h5></div>
          <img src="images/templates/hero.jpg" class="thumb">
        </a>
        <h6 class="name"><span>Hero</span> <a href="https://litmus.com/pub/6d34a4c">View Tests</a></h6>
        <span class="description">Want to include a snazzy hero image in your email? This template is for you!</span>
        <a href="downloads/templates/hero.html.zip" class="button primary" onClick="ga('send', 'event', 'Ink', 'Download', 'templates/hero.html.zip');">Download</a>
        <a href="https://notableapp.com/posts/744389" class="button secondary" target="_blank">More Info</a>
      </li>
      <li>
        <a href="downloads/templates/sidebar.html" class="preview" target="_blank">
          <div class="preview-post"><h5>Preview</h5></div>
          <img src="images/templates/sidebar.jpg" class="thumb">
        </a>
        <h6 class="name"><span>Sidebar</span> <a href="https://litmus.com/pub/f6f3c9d">View Tests</a></h6>
        <span class="description">This template includes a sidebar area for a list of links, perfect for linking to additional content.</span>
        <a href="downloads/templates/sidebar.html.zip" class="button primary" onClick="ga('send', 'event', 'Ink', 'Download', 'templates/sidebar.html.zip');">Download</a>
        <a href="https://notableapp.com/posts/744339" class="button secondary" target="_blank">More Info</a>
      </li>
      <li>
        <a href="downloads/templates/sidebar-hero.html" class="preview" target="_blank">
          <div class="preview-post"><h5>Preview</h5></div>
          <img src="images/templates/sidebar-hero.jpg" class="thumb">
        </a>
        <h6 class="name"><span>Sidebar Hero</span> <a href="https://litmus.com/pub/c00b7d3">View Tests</a></h6>
        <span class="description">Want a sidebar and a hero image? Let's go crazy! This template combines the Sidebar and Hero templates.</span>
        <a href="downloads/templates/sidebar-hero.html.zip" class="button primary" onClick="ga('send', 'event', 'Ink', 'Download', 'templates/sidebar-hero.html.zip');">Download</a>
        <a href="https://notableapp.com/posts/744071" class="button secondary" target="_blank">More Info</a>
      </li>
      <!-- <li>
        <a href="downloads/templates/newsletter.html" target="_blank">
          <div class="preview-post"><h5>Preview</h5></div>
          <img class="thumb" src="images/templates/newsletter.jpg">
        </a>
        <h6 class="name"><span>Newsletter</span> <a href="https://litmus.com/pub/ff3824a">View Tests</a></h6>
        <span class="description">This template is perfect for a point-by-point newsletter. For good measure, we've thrown in a hero image, too.</span>
        <a href="downloads/templates/newsletter.html.zip" class="button primary" onClick="ga('send', 'event', 'Ink', 'Download', 'templates/newsletter.html.zip');">Download</a>
        <a href="downloads/templates/newsletter.html" class="button secondary" target="_blank">More Info</a>
      </li> -->
    </ul> 
    <!--
<div class="panel">
      <h3 class="light text-center">Ooops, no templates yet!</h3>
      <p class="light text-center">Check back soon, or <a style="display:inline;" href="mailto:eric@zurb.com">let us know</a> if you make a really nice one. There are, however, some nice sample emails in the <a href="download.php">download package</a>.</p>
    </div>
-->
  </div>
</div>


<?php include 'includes/_subscribe.php' ?>	
<div class="show-for-small">
  <ul class="mobile-nav">
    <li><a href="index.php">Home</a></li>
    <li><a href="process.php">Process</a></li>
    <li><a href="docs.php">Docs</a></li>
    <li><a class="current" href="templates.php">Email Templates</a></li>
  </ul>
</div>
<?php include 'includes/_footer.php' ?>