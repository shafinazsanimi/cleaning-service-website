<!DOCTYPE HTML>

<?php

include("connectionDB.php");

	$username = $_COOKIE['username'];
?>



<html>
<head><meta name="viewport" content="width=device-width"/>

<script> 
function myFunction()
{
alert("Your Booking has been Confirmed");
window.close();
}
</script>

<title>Company Cleaner Profile</title>
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

<!-- copyright area -->
<div class="copyright">
	<div class="grid">
	
	<div class="c6">
				 SNV Cleaning &copy; 2017. All Rights Reserved.
			</div>
			
		<div class="row">
			<br/>
			<br/>
			<br/>
			
			
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
				<h1 class="titlehead">Booking Area</h1>
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
		<div class="shadowundertop">
		</div>
		<div class="row">
			<!-- SIDEBAR -->	
			<div class="c3">
				<div class="leftsidebar">
					<h2 class="title stresstitle">Cleaner Profile Picture</h2>
					<hr class="hrtitle">
					<img src="<?php echo $row['roleimg'];?>" class="imgOpa teamimage" alt="">
					<div class="teamdescription">
						<h1><input type="text" name="Name" readonly Value=""> <!--  echo $row["mem_user"];--> </h1>
						<span class="hirefor"><input type="text" name="Name" readonly Value=""> <!--  echo $row["mem_user"]; --> </span>
					</div>
					<br/>
					
				</div>
			</div><!-- end sidebar -->
			
			<!-- MAIN CONTENT -->
			<div class="c9">
				<h1 class="maintitle space-top">
				<span>Summary Booking</span>
				</h1>
		<form method="post">
		<table border="10" size="20">	
		
	<!-- CODE CHANGE-->	
		
	<?php 
		
		$result = mysqli_query($con, "SELECT * FROM customer_booking ORDER BY customer_booking_username DESC LIMIT 1 ");
		$row = mysqli_fetch_array($result);
		
	?>
		<!-- CODE CHANGE-->	
	
		<span class="left"> <h6> Name : </h6> </span> 
		<input type="text" name="name" size="10" readonly Value="<?php echo $row["customer_booking_name"]; ?>" >
		
		<span class="left"> <h6> Address : </h6> </span> 
		<textarea rows="5" cols="20" readonly  ><?php echo $row["customer_booking_address"];?></textarea>
	
		<span class="left"> <h6> Contact : </h6> </span> 
		<input type="text" name="phone" size="10" readonly Value="<?php echo $row["customer_booking_phone"];?>" >
		
		<span class="left"> <h6> Date : </h6> </span> 
		<input type="date" name="dateate" size="10" readonly Value="<?php echo $row["customer_booking_date"];?>">
	
		<span class="left"> <h6> Email : </h6> </span>
		<input type="text" name="email" size="10" readonly Value="<?php echo $row["customer_booking_email"];?>" >
		
		<span class="left"> <h6> Services Choose : </h6> </span>
		<input type="text" name="services" size="10" readonly Value="<?php echo $row["customer_booking_services"];?>" >
	
		
		</table>
		</form>
	<center><a href="popupex.html" onclick="myFunction()"> <br/> <button type="button" value="Update" align="center"> Confirm </button></a>
	
				
			</div><!-- end main content -->			
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
					<dt>Adress: Multimedia University Jalan Multimedia, 63000 Cyberjaya, Selangor</dt>
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
					<li>Services</li>
					<li>Privacy Policy</li>
					<li>Shortcodes</li>
					<li>Columns</li>
					<li>Portfolio</li>
					<li>Blog</li>
					<li>Contact</li>
					<li>Font Awesome</li>
					<li>Single Project</li>
					<li>Home</li>
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

<!-- cycle -->
<script src="js/jquery.cycle.js"></script>

<!-- twitter -->
<script src="js/jquery.tweet.js"></script>

</body>
</html>