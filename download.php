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
    <p class="lead">Everything you need to get started creating responsive emails with Ink.</p>
    <ul class="disc">
      <li><strong>Our HTML Email Boilerplate</strong>: A blank email with the boring stuff like meta tags already taken care of for you.</li>
      <li><strong>Ink CSS stylesheet</strong>: The CSS for Ink that you need to paste into your email.</li>
      <li><strong>Two sample emails</strong>: Examples of how to use Ink that you can use as a model or a starting point for your own email.</li>
    </ul>
  </div>
  <div class="large-5 columns">
    <div class="read-docs">
      <a href="docs.php">
        <span class="title">Read the docs</span>
        <span class="description">Learn how to use all the features and components in Ink to quickly create responsive emails.</span>
      </a>
    </div>
  </div>
</div>

<?php include 'includes/_subscribe.php' ?>	
<?php include 'includes/_footer.php' ?>