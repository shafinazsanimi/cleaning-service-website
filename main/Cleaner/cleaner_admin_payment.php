<?php

	include("connectionDB.php");
	$username = $_COOKIE['username'];
	
	if (isset($_POST["submit"]))
	{
		 ?><script type="text/javascript">
		 alert("Your Proof Payment Has Been Submitted");
		 </script>
		 <?php 		
		 
		$id = $_POST["id"];
        $amount = $_POST["amount"];
		$account = $_POST["account"];
		
		mysqli_query($con, "INSERT INTO payment_cl (payment_username, payment_id, payment_amount, payment_account)
		VALUES ('$username','$id','$amount','$account')");
	}
?>

<!DOCTYPE HTML>
<html>
<head><meta name="viewport" content="width=device-width"/>

<style>

ul ul li a:hover
{
	color:yellow;
}

ul ul ul
{
	margin-left:150px;
	top:39px;
	display:none;
}
</style>
	

<title>Payment To Admin</title>
<!-- STYLES & JQUERY 
================================================== -->
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/icons.css"/>
<link rel="stylesheet" type="text/css" href="css/skinblue.css"/><!-- change skin color -->
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
				
				<li class="active"><a href="cleaner_index.php"><i class="icon-home homeicon"></i></a></li>
				
				<li><a href="cleaner_profile.php">Profile</a>
				</li>				
				
				<li><a href="cleaner_request.php">Booking</a>
				</li>		
				
				<li><a href="#">Feedback / Payment</a>
					<ul><li> <a href="cleaner_feedback.php">Feedback</a>
					<li> <a href="#"> Payment </a> </li>
						<ul>
							<li> <a href="#">Payment To Admin</a></li>
							<li> <a href="cleaner_view_payment.php"> Cust Payment </a> </li>
						</ul>
					</ul>
						</li>
				</li>
				
				<li><a href="cleaner_contact.php">Contact</a>
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
				<h1 class="titlehead">Cleaner Payment Sections </h1>
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
			<div class="c1">
			</div>
			<div class="c10" style="text-align:center;margin-top:50px;margin-bottom:130px;">
				
				<h1> <center><span>Cleaner Payment</span></h1></center>		
				<br/>
				
			<form action="" method="post">
			<fieldset><legend> Payment Form </legend>
			
				<?php
		
				
						$result = mysqli_query($con, "SELECT * FROM cleaner WHERE cleaner_username='$username'");
						
						$result2 = mysqli_query($con, "SELECT admin_account from admin WHERE admin_username='admin1'");
				
						$row = mysqli_fetch_array($result);
						
						$row2 = mysqli_fetch_array($result2);
				?>
			

			<pre align="left">
Your ID:     <input type="text" name="id" readonly Value="<?php echo $row["cleaner_username"];?>">

Amount:    <input type="text" name="amount" placeholder="Insert Amount Need to pay here" required="">
 
Account:   <input type="text" name="account" placeholder="Insert Your account Number here" required="">

Admin Account Number:	<input type="text" name="admin" readonly Value="<?php echo $row2["admin_account"];?>">
			</pre>
						<center><button id="submit" type="submit" onclick="myFunction()" required="true" name="submit"> Submit </center></button>
			

						<h2><center> Please Email Proof Payment to This Email : snvcleaningservice@gmail.com </center></h2><br/>
	
						
				
			</div>
				<div class="c1">
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
				<h2 class="title"><img src="/fypdip/main/Cleaner/Image/instagram-logo.png" height="15" width="15">   Follow us</h2>
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
					<li><a href="http://localhost/fypdip/main/Cleaner/cleaner_index.php">Homepage</li>
					<li><a href="http://localhost/fypdip/main/Cleaner/cleaner_profile.php">Profile</li>
					<li><a href="http://localhost/fypdip/main/Cleaner/cleaner_request.php">Request</li>
					<li><a href="http://localhost/fypdip/main/Cleaner/cleaner_feedback.php">Feedback</li>
					<li><a href="http://localhost/fypdip/main/Cleaner/cleaner_view_payment.php">Customer Payment<li>
					<li><a href="http://localhost/fypdip/main/Cleaner/cleaner_contact.php">Contact</li>
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
				 SNV Cleaning  &copy; 2017. All Rights Reserved.
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