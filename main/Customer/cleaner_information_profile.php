<!DOCTYPE HTML>
<html>
<head><meta name="viewport" content="width=device-width"/>

<script> 
function myFunction1()
{
window.open("../Cleaner/cleaner_individual_profile_A.php", "_self");
}

function myFunction2()
{
window.open("../Cleaner/cleaner_individual_profile_B.php", "_self");
return false;
}

function myFunction3()
{
window.open("../Cleaner/cleaner_individual_profile_C.php", "_self");
return false;
}

</script>

<style>
img.center
{
	display:block;
	margin:0 auto;
}

img {
  opacity: 1;
  transition: opacity .25s ease-in-out;
  -moz-transition: opacity .25s ease-in-out;
  -webkit-transition: opacity .25s ease-in-out;
}

img:hover {
  opacity: 0.6;
}
</style>

<script language="javascript" type="text/javascript">
	<!--
	function popitup(url) {
	newwindow=window.open(url,'name','height=700,width=900,top=100,left=400');
	if (window.focus) {newwindow.focus()}
	return false;
	}
	// -->
	</script>

<title>Cleaner Profile</title>
<!-- STYLES & JQUERY 
================================================== -->
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/icons.css"/>
<link rel="stylesheet" type="text/css" href="css/skinred.css"/><!-- change skin color here -->
<link rel="stylesheet" type="text/css" href="css/responsive.css"/>
<link rel="stylesheet" type="text/css" href="css/image.css"/>
<link rel="stylesheet" type="text/css" href="css/image2.css"/>
<link rel="stylesheet" type="text/css" href="css/image3.css"/>
<script src="js/jquery-1.9.0.min.js"></script><!-- scripts are at the bottom of the document -->
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
				<li class="active"><a href="customer_index.php"><i class="icon-home homeicon"></i></a></li>
				
				<li><a href="customer_profile.php">Profile</a>
				</li>				
				
				<li><a href="#">Booking</a>
					<ul style="display: none;">
					<li><a href="#">Cleaner Profile</a></li>
					<li><a href="customer_booking.php">Booking</a></li>
				</ul>
					
				</li>		

				<li><a href="customer_payment.php">Payment</a>
				</li>
				
				<li><a href="#">History / Feedback</a>
					<ul style="display: none;">
					<li><a href="customer_history.php">History</a></li>
					<li><a href="customer_feedback.php">Feedback</a></li>
															
					
				</ul>
				</li>
				
				<li><a href="customer_contact.php">Contact</a>
				</li>
				
				<li><a href="logout.php" type="popup">Log Out</a>
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
				<h1 class="titlehead">Cleaner Profile Sections</h1>
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
			<div class="row space-top space-bot">
			<center>
			<div class="c12 space-top">
				<h4 class="maintitle ">
				<span><h4>Individual Cleaner Profile</h4></span>
				</h4>
			
			<a href="popupex.html" onclick="return popitup('../Cleaner/cleaner_individual_profile_A.php')">
				<img src="image/c1.jpg" style="border-bottom: 5px solid #eee; border:5px solid black;" alt="" name="A" width="250px" height="250px"/>
			</a> &nbsp;&nbsp;&nbsp;
			
			
			<a href="popupex.html" onclick="return popitup('../Cleaner/cleaner_individual_profile_B.php')">
				<img src="image/c2.png" style="border-bottom: 5px solid #eee; border:5px solid black;" alt="" name="A" width="250px" height="250px"/>
			</a> &nbsp;&nbsp;&nbsp;
			
			<a href="popupex.html" onclick="return popitup('../Cleaner/cleaner_individual_profile_C.php')">
				<img src="image/c3.jpg" style="border-bottom: 5px solid #eee; border:5px solid black;" alt="" name="A" width="250px" height="250px"/>
			</a> &nbsp;&nbsp;&nbsp;
			
			<br/>
			<br/>
			<br/>
			
				<h4 class="maintitle ">
				<span><h4>Company Cleaner Profile</h4></span>
				</h4>
		
			<a href="popupex.html" onclick="return popitup('../Cleaner/cleaner_company_profile_A.php')">
				<img src="image/c4.png" style="border-bottom: 5px solid #eee; border:5px solid black;" alt="" name="A" width="250px" height="250px"/>
			</a> &nbsp;&nbsp;&nbsp;
			
			<a href="popupex.html" onclick="return popitup('../Cleaner/cleaner_company_profile_B.php')">
				<img src="image/c5.png" style="border-bottom: 5px solid #eee; border:5px solid black;" alt="" name="A" width="250px" height="250px"/>
			</a> &nbsp;&nbsp;&nbsp;
			
			<a href="popupex.html" onclick="return popitup('../Cleaner/cleaner_company_profile_C.php')">
				<img src="image/c6.jpg" style="border-bottom: 5px solid #eee; border:5px solid black;" alt="" name="A" width="250px" height="250px"/>
			</a> &nbsp;&nbsp;&nbsp;
			
			<br/>
<br/>
<br/>
<br/>			
				
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
				<img src="Image/SNV.png" height="190" width="210" style="padding-top: 13px" alt="" >
			</div>
			<!-- 2nd column -->
			<div class="c3">
				<h2 class="title"><img src="/fypdip/main/Admin/Image/instagram-logo.png" height="15" width="15">   Follow us</h2>
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
					<li><a href="http://localhost/fypdip/main/Customer/customer_index.php">Homepage</li>
					<li><a href="http://localhost/fypdip/main/Customer/customer_profile.php">Your Profile</li>
					<li><a href="http://localhost/fypdip/main/Customer/customer_booking.php">Booking</li>
					<li><a href="http://localhost/fypdip/main/Customer/customer_payment.php">Payment</li>
					<li><a href="http://localhost/fypdip/main/Customer/customer_history.php">History</li>
					<li><a href="http://localhost/fypdip/main/Customer/customer_feedback.php">Feedback</li>
					<li><a href="http://localhost/fypdip/main/Customer/customer_contact.php">Contact</li>
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
				 SNV Cleaning &copy; 2017. All Rights Reserved.
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

<!-- cycle -->
<script src="js/jquery.cycle.js"></script>

</body>
</html>