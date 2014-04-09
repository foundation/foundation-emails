<nav class="top-bar hide-for-small">
  <ul class="title-area">
    <!-- Title Area -->
    <li class="name">
      <h1><a href="http://zurb.com/ink" class="home" title="Ink">Ink</a></h1>
    </li> 
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>

  <?php 
    if (empty($thisPage)) { 
      $thisPage = null;
    }
  ?>
  <section class="top-bar-section">
    <ul class="right">
      <li<?php if ($thisPage=="process") echo " class=\"active\""; ?>><a href="process.php">Process</a></li>
      <li<?php if ($thisPage=="docs") echo " class=\"active\""; ?>><a href="docs.php">Docs</a></li>
      <li<?php if ($thisPage=="inliner") echo " class=\"active\""; ?>><a href="inliner.php">Inliner</a></li>
      <li<?php if ($thisPage=="templates") echo " class=\"active\""; ?>><a href="templates.php">Email Templates</a></li>
      <li class="has-form"><a href="download.php" class="tiny button">Download</a></li>
    </ul>
  </section>
</nav>

