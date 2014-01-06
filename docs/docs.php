<style type="text/css">

  /* iframe sizes */

    #if-basicGrid {height: 200px;}
    #if-evenColumns {height: 260px;}
    #if-centerClass {height: 220px;}
    #if-offsetColumns {height: 165px;}
    #if-textPad {height: 440px;}
    #if-fullWidth {height: 280px;}
    #if-subGrid {height: 140px;}
    #if-blockGrid {height: 540px;}
    #if-visibilityClasses {height: 110px;}
    #if-panels {height: 110px;}
    #if-panelSubGrid {height: 110px;}
    #if-panelSidebar {height: 420px;}
    #if-buttons{height: 325px;}
    #if-images{height: 250px;}

  @media only screen and (max-width: 632px), only screen and (min-width: 768px) and (max-width: 843px) {
    #if-basicGrid {height: 225px;}
    #if-evenColumns {height: 570px;}
    #if-centerClass {height: 270px;}   
    #if-offsetColumns {height: 165px;}   
    #if-textPad {height: 480px;}   
    #if-fullWidth {height: 320px;}   
    #if-subGrid {height: 210px;}
    #if-blockGrid {height: 1000px;}
    #if-visibilityClasses {height: 110px;}   
    #if-panels {height: 110px;}   
    #if-panelSubGrid {height: 110px;}   
    #if-panelSidebar {height: 400px;}   
    #if-buttons{height: 650px;}
    #if-images{height: 800px;}
  } 

</style>
<div class="row docs">
  <div class="large-3 columns">
    <div class="doc-nav">
      <ul class="sub-nav hide-for-small">
        <li><a href="#start">Getting Started</a></li>
        <li><a href="#grid">Grid</a></li>
        <li><a href="#sub-grid">Sub-Grid</a></li>
        <li><a href="#block-grid">Block-Grid</a></li>
        <li><a href="#visibility-classes">Visibility Classes</a></li>
        <li><a href="#panels">Panels</a></li>
        <li><a href="#buttons">Buttons</a></li>
        <li><a href="#images">Retina Images</a></li>
        <li><a href="#compatibility">Supported Clients</a></li>
        <li><a href="#changes">Changelog</a></li>
        <li><hr style="width:75%;"></li>
        <li><a href="#training">Training</a></li>
      </ul>
    </div>
  </div>
  <div class="large-9 columns">
    
    <?php require 'components/getting-started.php' ?>
    
    <hr class="section">

    <?php require 'components/grid.php' ?>
    
    <hr class="section">

    <?php require 'components/sub-grid.php' ?>

    <hr class="section">

    <?php require 'components/block-grid.php' ?>
    
    <hr class="section">

    <?php require 'components/visibility-classes.php' ?>
    
    <hr class="section">

    <?php require 'components/panels.php' ?>
    
    <hr class="section">

    <?php require 'components/buttons.php' ?>

    <hr class="section">

    <?php require 'components/images.php' ?>

    <hr class="section">

    <?php require 'components/compatibility.php' ?>

    <hr class="section">

    <?php require 'components/changelog.php' ?>
    
    <br>
    <br>
  </div>
</div>