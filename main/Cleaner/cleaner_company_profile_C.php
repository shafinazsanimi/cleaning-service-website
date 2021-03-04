<?php

include("connectionDB.php");

  $username=$_COOKIE['username'];
   
  
?>
	
		
<!DOCTYPE HTML>
<html>
<head><meta name="viewport" content="width=device-width"/>

<script> 
function myFunction()
{
window.close();
}

</script>



<title>Cleaner Company Profile</title>
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
				<h1> Maid Cleaning Sdn. Bhd </h1>
				<div class="pageline">
					
					
					
				<form action="" method="post">	
				
					
						<label>
						<img src="image/c6.jpg" style="border-bottom: 5px solid #eee; text-align:center;" width="300" height="300" alt="" name="A"/>
						</label>
					
	<?php
	 
	 $result = mysqli_query($con, "SELECT * FROM cleaner WHERE cleaner_username ='cleaner6'");
	 $row = mysqli_fetch_assoc($result);
	?>
					
					
					<span class="left"> <h6> Name : </h6> </span> 
					<input type="text" name="name" size="40" readonly Value="<?php echo $row["cleaner_name"];?>"> </pre>
					
					<span class="left"> <h6> Address : </h6> </span> 
					<textarea rows="5" cols="31" name="address" readonly ><?php echo $row["cleaner_address"];?></textarea>
					
					<span class="left"> <h6> Contact : </h6> </span> 
					<input type="text" name="phone" size="40" readonly Value="<?php echo $row["cleaner_phone"];?>">
										
					<span class="left"> <h6> Email : </h6> </span>
					<input type="text" name="email" size="40" readonly Value="<?php echo $row["cleaner_email"];?>">
					
					<span class="left"> <h6> Company Name : </h6> </span>
					<input type="text" name="company" size="10" readonly Value="<?php echo $row["cleaner_company"];?>" >
					
					<span class="left"> <h6> Bank Account Number : </h6> </span>
					<input type="text" name="account" size="10" readonly Value="<?php echo $row["cleaner_account"];?>" >
					
					<span class="left"> <h5> Cleaner Services Price : </h5> </span>
					<input type="text" name="account" size="10" readonly Value="<?php echo $row["cleaner_price"];?>" >
					
					<br/>
					
					<br/><button type="submit" onclick="myFunction()" name="return"> Back </button>
					
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