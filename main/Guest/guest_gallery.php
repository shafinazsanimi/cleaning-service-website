<!DOCTYPE HTML>
<html>
<head><meta name="viewport" content="width=device-width"/>

<script language="javascript" type="text/javascript">
	<!--
	function popitup(url) {
	newwindow=window.open(url,'name','height=700,width=700,top=100,left=400');
	if (window.focus) {newwindow.focus()}
	return false;
	}
	// -->
	</script>

<title>Guest Gallery</title>
<!-- STYLES & JQUERY 
================================================== -->
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/icons.css"/>
<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css"/>
<link rel="stylesheet" type="text/css" href="css/skintealdark.css"/><!-- change skin color -->
<link rel="stylesheet" type="text/css" href="css/responsive.css"/>
<script src="js/jquery-1.9.0.min.js"></script><!-- the rest of the scripts at the bottom of the document -->
</head>
<body>
<div class="boxedtheme">
<!-- TOP LOGO & MENU
================================================== -->
<div class="grid">
	<div class="row space-bot">
		<!--Logo-->
		<div class="c4">
			<a href="index.html">
			<img src="Image/SNV.png" height="80" width="110" class="logo" alt="">
			</a>
		</div>
		<!--Menu-->
		<div class="c8">
			<nav id="topNav">
			<ul id="responsivemenu">
				<li class="active"><a href="guest_index.php"><i class="icon-home homeicon"></i><span class="showmobile">Home</span></a></li>
				<li><a href="#">About Us</a>
				<ul style="display: none;">
					<li><a href="guest_ourcompany.php">Our Company</a></li>
					<li><a href="guest_vision.php">Vision And Mission</a></li>
					<li><a href="guest_testimonials.php">Testimonials</a></li>											
					
				</ul>
				</li>
				
				
				
				<li><a href="#">Services</a>
				<ul style="display: none;">					
					<li><a href="guest_services.php">Our Services</a></li>	
					<li><a href="guest_pricing.php">Pricing </a></li>
					<li><a href="#">Gallery</a></li>
					
										
					
				</ul>
				</li>
				<li><a href="#">Q&A</a>
				<ul style="display:none;">
					<li><a href="guest_faq.php">F.A.Q.s</a></li>
				</ul>
				</li>				
				<li class="last"><a href="guest_contact.php">Contact</a></li>
				<li><a href="index.html" onclick="return popitup('/fypdip/main/Login/index.php')" type="popup">Login</a>
				</li>
			</ul>
			</nav>
		</div>
	</div>
</div>
<!-- HEADER
================================================== -->
<div class="undermenuarea">
	<div class="boxedshadow">
	</div>
	<div class="grid">
		<div class="row">
			<div class="c8">
				<h1 class="titlehead">Photo Gallery</h1>
			</div>
			<div class="c4">
				<h1 class="titlehead rightareaheader"><i class="icon-map-marker"></i> Call Us Now +6011-1004 2908 </h1>
			</div>
		</div>
	</div>
</div>
<!-- CONTENT
================================================== -->
<div class="grid">
		<div class="shadowundertop"></div>
		<div class="row">
		<div class="c12">
			<h1 class="maintitle space-top">
			<span>Our Gallery</span>
			</h1>
		</div>
		</div>
		<!-- begin filter -->
		<div class="row space-bot">
			<div class="c12">
				<div id="nav">
					<ul>
						<li><a href="" data-filter="*" class="selected">All Items</a></li>
						<li><a href="" data-filter=".cat1">Indoor</a></li>
						<li><a href="" data-filter=".cat2">Outdoor</a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- end filter -->		
		<div class="row space-top">
			<div id="content">
				<!-- image 1 -->
				<div class="boxfourcolumns cat1">
					<div class="boxcontainer">
						<span class="gallery">
						<a data-gal="prettyPhoto[gallery1]" href="image\bedroom.jpg"><img src="image\bedroom.jpg" alt="Bedroom" class="imgOpa"/></a>
						</span>
						<h1><a href="#">Bedroom</a></h1>
					</div>
				</div>
				<!-- image 2 -->
				<div class="boxfourcolumns cat1">
					<div class="boxcontainer">
						<span class="gallery">
						<a data-gal="prettyPhoto[gallery1]" href="image\kitchen.jpg"><img src="image\kitchen.jpg" alt="Kitchen" class="imgOpa"/></a>
						</span>
						<h1><a href="#">Kitchen</a></h1>
					</div>
				</div>
				<!-- image 3 -->
				<div class="boxfourcolumns cat2">
					<div class="boxcontainer">
						<span class="gallery">
						<a data-gal="prettyPhoto[gallery1]" href="image\garage.jpg"><img src="image\garage.jpg" alt="Garage" class="imgOpa"/></a>
						</span>
						<h1><a href="#">Garage</a></h1>
					</div>
				</div>
				<!-- image 4 -->
				<div class="boxfourcolumns cat1">
					<div class="boxcontainer">
						<span class="gallery">
						<a data-gal="prettyPhoto[gallery1]" href="image\living.jpg"><img src="image\living.jpg" alt="Living Room" class="imgOpa"/></a>
						</span>
						<h1><a href="#">Living Room</a></h1>
					</div>
				</div>
				<!-- image 5 -->
				<div class="boxfourcolumns cat2">
					<div class="boxcontainer">
						<span class="gallery">
						<a data-gal="prettyPhoto[gallery1]" href="image\backyard.jpeg"><img src="image\backyard.jpeg" alt="Backyard" class="imgOpa"/></a>
						</span>
						<h1><a href="#">Backyard</a></h1>
					</div>
				</div>
				<!-- image 6 -->
				<div class="boxfourcolumns cat2">
					<div class="boxcontainer">
						<span class="gallery">
						<a data-gal="prettyPhoto[gallery1]" href="image\pool.jpg"><img src="image\pool.jpg" alt="Outside Pool" class="imgOpa"/></a>
						</span>
						<h1><a href="#">Outside Pool</a></h1>
					</div>
				</div>
				<!-- image 7 -->
				<div class="boxfourcolumns cat1">
					<div class="boxcontainer">
						<span class="gallery">
						<a data-gal="prettyPhoto[gallery1]" href="image\bathroom.jpg"><img src="image\bathroom.jpg" alt="Add Title" class="imgOpa"/></a>
						</span>
						<h1><a href="#">Bathroom</a></h1>
					</div>
				</div>
				
				
			</div>
		</div>
</div><!-- end grid -->

<!-- FOOTER
================================================== -->
<div id="wrapfooter">
	<div class="grid">
		<div class="row" id="footer">
			<!-- to top button  -->
			<p class="back-top floatright">
				<a href="#top"><span></span></a>
			</p>
			<!-- 1st column -->
			<div class="c3">
				<img src="Image/SNV.png" height="190" width="200" style="padding-top: 18px;" alt="">
			</div>
			<!-- 2nd column -->
			<div class="c3">
				<h2 class="title"><img src="/fypdip/main/Guest/Image/instagram-logo.png" height="15" width="15">   Follow us</h2>
				<hr class="footerstress">
				<dl>
					<a href="https://www.instagram.com/snvcleaningservice/" target="_blank">@snvcleaningservice</a>
				</dl>
			</div>
			<!-- 3rd column -->
			<div class="c3">
				<h2 class="title"><i class="icon-envelope-alt"></i> Contact</h2>
				<hr class="footerstress">
				<dl>
					<dt>Address: Multimedia University Jalan Multimedia, 63000 Cyberjaya, Selangor</dt>
					<dd><span>Telephone:</span> (+60) 111-0042908 </dd>
					<dd>E-mail: <a href="more.html">snvcleaningservice@gmail.com</a></dd>
				</dl>
				<ul class="social-links" style="margin-top:15px;">
					<li class="twitter-link smallrightmargin">
					<a href="https://twitter.com/snvcleaningsrvc" class="twitter has-tip" target="_blank" title="Follow Us on Twitter">Twitter</a>
					</li>
					<li class="facebook-link smallrightmargin">
					<a href="https://www.facebook.com/snvcleaningservice/" class="facebook has-tip" target="_blank" title="Join us on Facebook">Facebook</a>
					</li>
				</ul>
			</div>
			<!-- 4th column -->
			<div class="c3">
				<h2 class="title"><i class="icon-link"></i> Links</h2>
				<hr class="footerstress">
				<ul>
					<li><a href="http://localhost/fypdip/main/Guest/guest_index.php">Homepage</li>
					<li><a href="http://localhost/fypdip/main/Guest/guest_ourcompany.php">Our Company</li>
					<li><a href="http://localhost/fypdip/main/Guest/guest_vision.php">Vision And Mission</li>
					<li><a href="http://localhost/fypdip/main/Guest/guest_testimonials.php">Testimonials</li>
					<li><a href="http://localhost/fypdip/main/Guest/guest_services.php">Our Service</li>
					<li><a href="http://localhost/fypdip/main/Guest/guest_pricing.php">Pricing</li>
					<li><a href="http://localhost/fypdip/main/Guest/guest_faq.php">F.A.Q.s</li>
					<li><a href="http://localhost/fypdip/main/Guest/guest_contact.php">Contact</li>
				</ul>
			</div>
			<!-- end 4th column -->
		</div>
	</div>
</div>
<!-- copyright area -->
<div class="copyright">
	<div class="grid">
		<div class="row">
			<div class="c6">
				 SNV Cleaning Service &copy; 2017. All Rights Reserved.
			</div>
			
		</div>
	</div>
</div>

</div>
<!-- JAVASCRIPTS
================================================== -->
<!-- all -->
<script src="js/modernizr-latest.js"></script>

<!-- menu & scroll to top -->
<script src="js/common.js"></script>

<!-- twitter -->
<script src="js/jquery.tweet.js"></script>

<script src="js/jquery.cycle.js"></script>

<!-- filterable -->
<script src="js/jquery.isotope.min.js"></script>

<!-- gallery -->
<script src="js/jquery.prettyPhoto.js"></script>

<!-- CALL opacity on hover images -->
<script type="text/javascript">
$(document).ready(function(){
    $("img.imgOpa").hover(function() {
      $(this).stop().animate({opacity: "0.6"}, 'slow');
    },
    function() {
      $(this).stop().animate({opacity: "1.0"}, 'slow');
    });
  });
</script>

<!-- CALL filtering -->
<script>
$(document).ready(function(){
var $container = $('#content');
  $container.imagesLoaded( function(){
    $container.isotope({
	filter: '*',
	animationOptions: {
     duration: 750,
     easing: 'linear',
     queue: false,
   }
});
});
$('#nav a').click(function(){
  var selector = $(this).attr('data-filter');
    $container.isotope({ 
	filter: selector,
	animationOptions: {
     duration: 750,
     easing: 'linear',
     queue: false,
   }
  });
  return false;
});

$('#nav a').click(function (event) {
    $('a.selected').removeClass('selected');
    var $this = $(this);
    $this.addClass('selected');
    var selector = $this.attr('data-filter');

    $container.isotope({
         filter: selector
    });
    return false; // event.preventDefault()
});

});
 </script>
 
  
<!-- CALL lightbox prettyphoto -->
<!-- CALL lightbox prettyphoto -->
<script type="text/javascript">
  $(document).ready(function(){
    $("a[data-gal^='prettyPhoto']").prettyPhoto({social_tools:'', animation_speed: 'normal' , theme: 'dark_rounded'});
  });
</script>

</body>
</html>