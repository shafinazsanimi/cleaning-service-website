<?php

include("connectionDB.php");

  $username=$_COOKIE['username'];
   

   if (isset($_POST["upbtn"]))
  { 
 
    $ID=$_POST["ID"];
	$Username=$_POST["user"];
    $Name= $_POST["name"];
	$address=$_POST["address"];
    $email=$_POST["email"];
	$phone= $_POST["phone"];
	$company = $_POST["company"];
	$account = $_POST["account"];


	mysqli_query($con, "UPDATE cleaner SET cleaner_username='$Username',cleaner_name ='$Name',cleaner_address='$address',cleaner_email ='$email',cleaner_phone ='$phone', cleaner_company='$company', cleaner_account='$account' WHERE  cleaner_id ='$ID';");
	
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

<title>Cleaner Profile</title>
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
	 
	 $result = mysqli_query($con, "select * from cleaner where cleaner_username ='$username'");
	 $row = mysqli_fetch_assoc($result);
	?>
		
		
	<tr>
		<th>ID
		<td><input type="text" name="ID" size="40" readonly Value="<?php echo $row["cleaner_id"]; ?>">
	</tr>
	
	<tr>
		<th>Your UserName
		<td><input type="text" name="user" size="40" Value="<?php echo $row["cleaner_username"]; ?>">
	</tr>
	
	<tr>
		<th>Your Name
		<td><input type="text" name="name" size="40" Value="<?php echo $row["cleaner_name"];?>">
	</tr>
	
	<tr>
		<th>Your Address 
		<td><textarea rows="5" cols="31" name="address" ><?php echo $row["cleaner_address"];?></textarea>
	</tr>
	
	<tr>
		<th>Your Contact
		<td><input type="text" name="phone" size="40" Value="<?php echo $row["cleaner_phone"];?>">
	</tr>
	
	<tr>
		<th>Your Email
		<td><input type="text" name="email" size="40" Value="<?php echo $row["cleaner_email"];?>">
	</tr>
	
	<tr>
		<th>Your Company Name
		<td><input type="text" name="company" size="10"  Value="<?php echo $row["cleaner_company"];?>" >
	</tr>
	
	<tr>
		<th>Your Company Bank Account Number
		<td><input type="text" name="account" size="10" Value="<?php echo $row["cleaner_account"];?>" >
	</tr>
	
	<tr>
		<th> Update Profile Picture
		<td><input type="file" name="pic" accept="image/*" align="center"> </input>
	</tr>
	
	</table>
	<br/>
	<center><button type="submit" name="upbtn" onclick="myFunction()" value="Update"> Update </center> </a>
	 </form>
	</div>
	
	
</body>
</html>