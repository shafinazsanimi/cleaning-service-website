<?php

include("connectionDB.php");

	$username = $_COOKIE['username'];
	
?>	

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

<title> Customer Feedback </title>
<!-- STYLES & JQUERY 
================================================== -->
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/icons.css"/>
<link rel="stylesheet" type="text/css" href="css/skinlila.css"/><!-- change skin color -->
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
				<li class="active"><a href="admin_index.php"><i class="icon-home homeicon"></i></a></li>
				<li><a href="#">Customer</a>
				<ul style="display: none;">
					<li><a href="customer_profile.php">Profile</a></li>
					<li><a href="customer_booking.php">Booking History</a></li>
					<li><a href="#">Feedback</a></li>	
					<li><a href="customer_payment.php">Payment</a></li>
					
				</ul>
				</li>
				
				
				
				<li><a href="#">Cleaner</a>
				<ul style="display: none;">					
					<li><a href="cleaner_profile.php">Profile</a></li>
					<li><a href="cleaner_feedback.php">Feedback</a></li>	
					<li><a href="cleaner_payment.php">Payment</a></li>
					
										
					
				</ul>
				</li>
				<li><a href="#">Admin</a>
				<ul style="display:none;">
					<li><a href="admin_profile.php">Profile</a></li>
					
				</ul>
				</li>				
				
				<li><a href="logout.php" title="Logout">Log Out</a>
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
				<h1 class="titlehead">Customer Feedback Sections</h1>
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
					<h2 class="title stresstitle">Feedback Menu</h2>
					<hr class="hrtitle">
					<table border="5" width="100" height="448" style="float:left">	
					<tr height="29">
					<th>Customer ID </th>
			
					<tr>
					<td><textarea rows="13" cols="15" name="OrderNumber" readonly>		
					<?php
	
						$result = mysqli_query($con, "SELECT customer_username FROM customer");
						while($row=mysqli_fetch_assoc($result))	
					{?>
					<?php echo "Customer ID : " . $row["customer_username"]; ?>
	 
					<?php
					}
					?>
					</textarea></td>
					</tr>

					
					<br/>
					
						<tr height="1">
						<th>Feedback ID </th>
		
		
						</tr>
						<tr>
						<td><textarea rows="13" cols="15" name="OrderNumber" readonly>		
					<?php
					if(isset($_POST['sub']))
					{
					$id=$_POST['SearchOrder'];
					$result = mysqli_query($con, "SELECT
					feedback_all.feedback_id		
					FROM 
					feedback_all 
					RIGHT JOIN 
					customer 
					ON
					customer.customer_username = feedback_all.feedback_username AND customer.customer_username='$id'

					GROUP BY feedback_all.feedback_id
					");
					
					while($row=mysqli_fetch_assoc($result))	
					{
					  echo "Customer Feedback : " . $row["feedback_id"] . "  ";
					}
					}
					?>
	
				</textarea></td>
				</tr>
					
				</table>
				<br/>
					
				</div>
			</div><!-- end sidebar -->
			
			<!-- MAIN CONTENT -->
			<div class="c9">
				<h1 class="maintitle space-top">
				<span>Customer Feedback</span>
				</h1>
				<br/>
			
		<table>
		<tr>
		<th><center>Input Member ID To List Out Feedback ID
		<th><center>Input Feedback ID to Check out Feedback
	</tr>
	<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
	<tr> 
	
		<td><center><input type="text" name="SearchOrder"><button type="submit" value="Check" name="sub"> List Out </center>
		<td><center><input type="text" name="SearchDetails"><button type="submit" value="Details" name="detail"> Check </center>
		
	</tr>
	</form>
	
	<tr>
	<td colspan="2"><textarea rows="24" cols="67" name="SearchDetails" readonly>	
	<?php
	if(isset($_POST['detail']))
	{
	$io=$_POST['SearchDetails'];
	$result = mysqli_query($con, "SELECT * FROM feedback_all WHERE feedback_id ='$io'");
	if($row=mysqli_fetch_assoc($result))
	{
	?>
        <?php echo " ID : " . $row["feedback_id"]; ?>	
		
		<?php echo " Name : " . $row["feedback_username"]; ?>
	
		<?php echo " Feedback : " . $row["feedback_info"]; ?>
		
	<?php
	
	}
	}
?>
	</textarea></td>
	</tr>
		</tr>
		</table>
				</p>
				
				
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
					<li><a href="http://localhost/fypdip/main/Admin/admin_index.php">Homepage</li>
					<li><a href="http://localhost/fypdip/main/Admin/customer_profile.php">Customer Profile</li>
					<li><a href="http://localhost/fypdip/main/Admin/customer_booking.php">Customer Booking History</li>
					<li><a href="http://localhost/fypdip/main/Admin/customer_payment.php">Customer Payment</li>
					<li><a href="http://localhost/fypdip/main/Admin/cleaner_profile.php">Cleaner Profile</li>
					<li><a href="http://localhost/fypdip/main/Admin/cleaner_feedback.php">Cleaner Feedback</li>
					<li><a href="http://localhost/fypdip/main/Admin/cleaner_payment.php">Cleaner Payment</li>
					<li><a href="http://localhost/fypdip/main/Admin/admin_profile.php">Admin Profile</li>
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