<?php
  if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $data = array("EmailAddress" => $email, "Resubscribe" => TRUE);                                                                    
    $data_string = json_encode($data);                                                                                   
 
    $ch = curl_init("https://d275c8b5e96298ccb017e1c85bb47adb3dcfafbde61b53e5@api.createsend.com/api/v3/subscribers/5c6a55836de01f72133628c8343c520b.json");                                                     
    
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                                                                                      
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
        'Content-Type: application/json',                                                                                
        'Content-Length: ' . strlen($data_string))                                                                       
    );                                           

    $result = curl_exec($ch);                                                                 
    $success = strstr($result, '@');
    curl_close($ch);
  }
?>

<?php $title = "Ink: Stay In Touch"; include 'includes/_header.php' ?>

<section role="main">

<?php include 'includes/_top-bar.php' ?>



<section class="top-area coming-soon">
  <div class="row cs-inky">
    <div class="large-6 columns">
      <a class='sidebar-button show-for-small' id="sidebarButton" href="#sidebar" ><img alt="Menu-wht" src="images/offcanvas/menu-wht.png" /><h4>Ink</h4></a>
      <div class="home-text">
        <h1 class="light">Ink</h1>
        <p class="lead">Quickly create responsive emails that work on any device &amp; client. Even Outlook.</p>
        
        <p class="cs-text hide-for-small">Ink is here! Get monthly updates about all that is email-y and responsive.</p>
        <p class="cs-text show-for-small">Get monthly updates about all that is email-y.</p>
        <div class="form-thanks">
          <?php
            if (isset($email) && $success) {
              echo '<p class="confirm">Thanks! We\'ve received your email, and we\'ll keep you up to date with news and responsive email resources.</p>';
            } else {
              if (!$success) {
                $resp = json_decode($result, true);
                $error = '<p class="confirm error">' . $resp['Message'] . '</p>';
                echo $error;
              }
              echo '<form id="emailForm" method="post">
                      <div class="row collapse">
                        <div class="large-8 small-7 columns">
                          <input type="text" name="email" placeholder="Email address">
                        </div>
                        <div class="large-4 small-5 columns">
                          <button type="submit" class="button expand">Submit</button>
                        </div>
                      </div>
                    </form>';
            }
          ?> 
        </div>
      </div>
    </div>
  </div>
</section>

<div class="zurb-footer-top">
  <div class="row property">
    <div class="large-4 columns">
    	<div class="property-info">
        <h3><a href="http://zurb.com/ink">Ink</a></h3>
        <p>Ink is a responsive email framework made by <a href="http://zurb.com">ZURB</a> a product design company in Campbell, CA. This framework is the result of building web products &amp; services since 1998.</p>
    	</div>
    </div>
    
    <div class="large-8 columns">
      <div class="row collapse">
	      <div class="large-4 columns hide-for-small">
		      <div class="learn-links">
		        <h4>Want more?</h4>
		        <ul>    
              <li><a href="http://foundation.zurb.com/">Foundation for Sites</a></li>
              <li><a href="http://foundation.zurb.com/apps">Foundation for Apps</a></li>
              <li><a href="http://zurb.com/notable">Notable Design Apps</a></li>
              <li><a href="http://zurb.com/university/courses">Training</a></li>
              <li><a href="http://zurb.com/library">Design Resources</a></li>
            </ul>
		      </div>
		  </div>
	      <div class="large-4 columns">
		      <div class="support-links">
	          <h4>Talk to us</h4>
            <p>Send us a Tweet and let us know what you think!<br><a href="http://twitter.com/ZURBink">@ZURBink</a></p>
            <p>Or get help in our <a href="http://foundation.zurb.com/forum/filter/email">support forum</a></p>
		      </div>
	      </div>
		  <div class="large-4 columns">
	        <div class="connect-links">
	          <h4>Stay in touch</h4>
	          <p>Get monthly updates from ZURB in your inbox. Read our <a href="http://zurb.com/news">latest news &amp; buzz.</a></p>
	          <a href="#" class="small button">Get ZURBnews!</a>         
	        </div>
	      </div>
      </div> 
    </div>
  </div>
  <div class="row global">
    <div class="large-3 small-6 columns">
      <a href="http://zurb.com/services" class="footer-link-block services">
        <span class="title">Studios</span>
        <span>Helping more than 200 startups succeed since 1998.</span>
      </a>
    </div>
    <div class="large-3 small-6 columns">
      <a href="http://foundation.zurb.com/" class="footer-link-block foundation">
        <span class="title">Foundation</span>
        <span>The most advanced front-end framework in the world.</span>
      </a>
    </div>
    <div class="large-3 small-6 columns">
      <a href="http://zurb.com/apps" class="footer-link-block apps">
        <span class="title">Notable Design Apps</span>
        <span>Prototype, iterate and collect feedback on your products.</span>
      </a>
    </div>
    <div class="large-3 small-6 columns">
      <a href="http://zurb.com/expo" class="footer-link-block expo">
        <span class="title">Expo</span>
        <span>Ideas, thoughts and design resources shared with you.</span>
      </a>
  </div>
  </div>
</div>
<div class="zurb-footer-bottom">
  <div class="row">
    <div class="large-4 push-8 columns">
      <ul class="home-social">
          <li><a href="http://www.twitter.com/ZURB" class="twitter"></a></li>
          <li><a href="http://www.facebook.com/ZURB" class="facebook"></a></li>
          <li><a href="http://zurb.com/contact" class="mail"></a></li>
        </ul>
     </div>
     <div class="large-8 pull-4 columns">
        <a href="http://www.zurb.com" class="zurb-logo regular"></a>
        <ul class="zurb-links">
          <li><a href="http://zurb.com/about">About</a></li>
          <li><a href="http://zurb.com/blog">Blog</a></li>
          <li><a href="http://zurb.com/news">News<span class="show-for-medium-up"> &amp; Events</span></a></li>
          <li><a href="http://zurb.com/contact">Contact</a></li>
          <li><a href="http://zurb.com/sitemap">Sitemap</a></li>
       </ul>
       <p class="copyright">&copy; 1998&ndash;2015 ZURB, Inc. All rights reserved.</p>
    </div>          
  </div>
</div>

  <script src="javascripts/vendor/jquery.js"></script>
  <script src="javascripts/foundation/foundation.js"></script>
	<script src="javascripts/foundation/foundation.cookie.js"></script>
	<script src="javascripts/foundation/foundation.forms.js"></script>
	<script src="javascripts/foundation/foundation.topbar.js"></script>
  <script src="javascripts/foundation/jquery.offcanvas.js"></script> 

</section>

<section id="sidebar" role="complementary">
		
  <div class="more-goodness">		
		<h6>More ZURB Goodness</h6>
		<nav role="navigation">
		  <ul id="sideMainNav" class="nav-bar goodness">
				<li><a href="http://zurb.com/expo/courses">Product Design Courses</a></li>
				<li><a href="http://zurb.com/services/our-work">Our Work</a></li>
				<li><a href="http://zurb.com/apps">ZURB Apps</a></li>
			</ul>
		</nav>
  </div>
  
  <hr>
  
  <div class="zurb-links">		
		<ul class="top">
  		<li class="logo"><a href="http://zurb.com"><img src="images/offcanvas/zurb-logo.png"></a></li>
  		<li><a href="http://zurb.com/about">About</a></li>
  		<li><a href="http://zurb.com/blog">Blog</a></li>
  		<li><a href="http://zurb.com/contact">Contact</a></li>
		</ul>
		<ul class="pillars">
  		<li>
  		  <a href="http://www.zurb.com/services" class="footer-link-block services">
          <span class="title">Studios</span>
          <span>Helping startups win since '98.</span>
        </a>
      </li>
      <li>
  		  <a href="http://foundation.zurb.com/" class="footer-link-block foundation">
          <span class="title">Foundation</span>
          <span>World's most advanced responsive framework.</span>
        </a>
      </li>
      <li>
  		  <a href="http://zurb.com/apps" class="footer-link-block apps">
          <span class="title">ZURB Apps</span>
          <span>Tools to rapidly prototype and iterate.</span>
        </a>
      </li>
      <li>
  		  <a href="http://zurb.com/expo" class="footer-link-block expo">
          <span class="title">Expo</span>
          <span>Online training for smarter product design.</span>
        </a>
      </li> 
		</ul>
  </div>
	
</section>

</body>
</html>

