<?php

include("connectionDB.php");

  $username = $_COOKIE['username'];

   if (isset($_POST["upbtn"]))
  { 
	$ID = $_POST["ID"];
    $Name = $_POST["name"];
	$Username = $_POST["user"];
	$address = $_POST["address"];
	$phone = $_POST["phone"];
	$email = $_POST["email"];
	


	mysqli_query($con, "UPDATE customer SET customer_name='$Name' , customer_username='$Username' , customer_address='$address' , customer_phone='$phone' , customer_email='$email' WHERE  customer_ID ='$ID';");
	
	//header("location:MainPage.php");
   
  }
?>

<script language="javascript" type="text/javascript">
	
function myFunction()
{
    {
    alert("Your Profile has been Updated");
    }
}
	
	
</script>
<html>

<style text="text/css">
input[type="text"], textarea, td {

  background-color : white; 

}
</style>

<head>

<title>Customer Profile</title>
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

</style>
</head>
	
<body>
	<center><div class="c9">
				<h1 class="maintitle space-top">
				<span>Update Profile</span>
				</h1>  
	
	<div id="page2">
	 <form id="UpdateProfileForm" name="UpdateProfileForm" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
		<table border="5">	
	
	<?php 
	 $result = mysqli_query($con, "select * from customer where customer_username ='$username'");
	 $row = mysqli_fetch_assoc($result);
	?>
		
		
	<tr>
		<th>ID
		<td><input type="text" name="ID" size="40" readonly Value="<?php echo $row["customer_id"]; ?>">
	</tr>
	
	<tr>
		<th>Your UserName
		<td><input type="text" name="user" size="40" Value="<?php echo $row["customer_username"]; ?>">
	</tr>
	
	<tr>
		<th>Your Name
		<td><input type="text" name="name" size="40" Value="<?php echo $row["customer_name"];?>">
	</tr>
	
	<tr>
		<th>Your Address 
		<td><textarea rows="5" cols="31" name="address" ><?php echo $row["customer_address"];?></textarea>
	</tr>
	
	<tr>
		<th>Your Contact
		<td><input type="text" name="phone" size="40" Value="<?php echo $row["customer_phone"];?>">
	</tr>
	
	<tr>
		<th>Your Email
		<td><input type="text" name="email" size="40" Value="<?php echo $row["customer_email"];?>">
	</tr>
		
	<tr>
		<th> Update Profile Picture
		<td><input type="file" name="pic" accept="image/*" align="center"> </input>
	</tr>	
	
	</table>
	<br/>
	<center><button id="submit" type="submit" name="upbtn" onclick="myFunction()" value="Update"> Update </center></a>
	 </form>
	</div>
	
	
</body>
</html>

<?php
/*
	UPDATE  `herbalife`.`member` SET  `mem_user` =  'AB',
`mem_name` =  'AB BIN',
`mem_address` =  'dvgadfdfds',
`mem_email` =  'sdsadsad',
`mem_phone` =  '1323233' WHERE  `member`.`mem_id` =20;*/
?>