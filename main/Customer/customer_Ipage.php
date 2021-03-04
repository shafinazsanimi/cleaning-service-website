<?php
include("connectionDB.php");

   $variable;
	
	$username = $_COOKIE['username'];	
	
	if (isset($_POST["submit"]))
	{
		 ?><script type="text/javascript">
		 alert("Booking Successful");
		 </script>
		 <?php

		$name = $_POST['name'];
		$address = $_POST["address"];
        $email = $_POST["email"];
	    $phone = $_POST["phone"];
		$date = $_POST["date"];
		$services = $_POST["services"];
		$company = $_POST["company"];
		
		mysql_query("insert into booking (booking_username, booking_name, booking_address, booking_phone, booking_email, booking_date, booking_services, booking_company ) 
		values ('$username','$name','$address','$phone','$email','$date','$services','$company')");
	}
 ?>
		
<!DOCTYPE HTML>
<html>
<head><meta name="viewport" content="width=device-width"/>


<title>Booking Form</title>
<!-- STYLES & JQUERY 
================================================== -->
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/icons.css"/>
<link rel="stylesheet" type="text/css" href="css/skinred.css"/><!-- change skin color here -->
<link rel="stylesheet" type="text/css" href="css/responsive.css"/>
<link rel="stylesheet" type="text/css" href="css/image.css"/>
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
				<h1 class="titlehead">Customer Area</h1>
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
				<h1> Booking Form for Individual Cleaner </h1>
				<div class="pageline">
						
				<form action="" method="post" >	
					<span class="left"> <h6> Name : </h6> </span> 
					<input type="text" name="name" size="10" placeholder="Insert Your Name Here" required="true"/>
		
					<span class="left"> <h6> Address : </h6> </span> 
					<textarea rows="5" cols="20" name="address" placeholder="Insert Your Address Here" required="true"></textarea>
	
					<span class="left"> <h6> Contact : </h6> </span> 
					<input type="text" name="phone" size="10" placeholder="Insert Your Contact Number Here" required="true"/>
		
					<span class="left"> <h6> Email : </h6> </span>
					<input type="text" name="email" size="10" placeholder="Insert Your Email Here" required="true"/>
		
					<span class="left"> <h6> Date : </h6> </span> 
					<input type="date" name="date" size="10" required="true"/>
					
					<h6 align="left"> Choose Your Services : </h6>  
					<select style="max-width:30%" name="services" required="true">
						<option value="" readonly> Please Choose 1 </option>
						<option value="House Cleaning"> House Cleaning </option>
						<option value="Apartment Cleaning"> Apartment Cleaning </option>
						<option value="Move in / Move out Cleaning"> Move in / Move out Cleaning </option>
						<option value="All"> All The Above </option>
					</select>
					
					<h6> Choose your Individual </h6>
					<h6> ( Click on the Image To Choose Cleaner ) </h6>
					
					<div class="container">
						<label>
						<input  type='radio' name='company' value='cleaner1'/>
						<img src="image/c1.jpg" style="border-bottom: 5px solid #eee;" alt="" name="A"/>
						</label>
					</div>		
					
					<div class="container">
						<label>
						<input type='radio' name='company' value='cleaner2' />
						<img src="image/c2.png" style="border-bottom: 5px solid #eee;" alt="" name="A"/>
							
						</label>
					</div>	
					
					<div class="container">
						<label>
						<input type='radio' name='company' value='cleaner3' />
						<img src="image/c3.jpg" style="border-bottom: 5px solid #eee;" alt="" name="A"/>
						</label>
					</div>
					<br/>
					
					<br/><button type="submit" name="submit" value="submit" required="true"> Confirm Booking </button>
					
				</form>	
					
				</div>
			<br/>
<br/>
<br/>
<br/>			
				
			</div>
			<div class="c1">
			</div>
		</div>
</div>
<!-- end grid -->

<!-- FOOTER
================================================== -->

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