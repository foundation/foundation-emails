<?php include 'downloads/latest.php' ?>

<?php $title = "Ink: Download Ink"; include 'includes/_header.php' ?>
<?php include 'includes/_top-bar.php' ?>

<script>
  ga('send', 'event', 'Ink', 'Download', '<?php echo $download_file; ?>');
</script>

<section class="top-area main downloading">
  <div class="row">
    <div class="large-12 columns">
      <div class="main-text">
        <h1 class="light text-center">Ink is downloading</h1>
        <div class="inky-fish"></div>
      </div>
    </div>
  </div>
</section>

<div class="row under-inky-fish">
  <div class="large-7 columns">
    <h3 class="light">Here&rsquo;s what&rsquo;s included</h3>
    <p class="lead">Some goodies to get you started.</p>
    <ul class="disc">
      <li>Our HTML Email Boilerplate</li>
      <li>CSS stylesheet</li>
      <li>Two sample emails</li>
    </ul>
  </div>
  <div class="large-5 columns">
    <div class="read-docs">
      <a href="docs.php">
        <span class="title">Read the docs</span>
        <span class="description">Learn how to use all the powers of Ink to create beautiful, dynamic emails.</span>
      </a>
    </div>
  </div>
</div>

<?php include 'includes/_subscribe.php' ?>	
<?php include 'includes/_footer.php' ?>