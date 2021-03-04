<?php

include("connectionDB.php");

  $username = $_COOKIE['username'];

   if (isset($_POST["upbtn"]))
  { 
	$id = $_POST["id"];
    $name = $_POST["name"];
	$password = $_POST["password"];
	$account = $_POST["account"];
	$Username = $_POST["user"];
	
	


	mysqli_query($con, "UPDATE admin SET admin_username='$Username' , admin_name='$name',admin_password='$password', admin_account='$account'  WHERE  admin_id ='$id';");
	
	//header("location:MainPage.php");
   
  }
?>
 <script language="javascript" type="text/javascript">
	
function myFunction()
{
    {
    alert("Your Profile has been Updated");
	window.location=Profile.php;
	window.close();
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


	<title>	Profile </title>
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
				<span>Update Admin Profile</span>
				</h1>  
	
	<div id="page2">
	 <form id="UpdateProfileForm" name="UpdateProfileForm" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
	<table border="5">	
	<?php
	 
	 $result = mysqli_query($con, "SELECT * FROM admin");
	 $row=mysqli_fetch_assoc($result);
	?>
	
	<tr>
		<th>ID
		<td><input type="text" name="id" size="40" readonly Value="<?php echo $row["admin_id"]; ?>">
	</tr>
	
	<tr>
		<th>Your UserName :
		<td><input type="text" name="user" size="40" Value="<?php echo $row["admin_username"]; ?>">
	</tr>
	
	<tr>
		<th>Your Name :
		<td><input type="text" name="name" size="40" Value="<?php echo $row["admin_name"]; ?>">
	</tr>
	
	<tr>
		<th>Your Password :
		<td><input type="text" name="password" size="40" Value="<?php echo $row["admin_password"];?>">
	</tr>
	
	<tr>
		<th>Your Account :
		<td><input type="text" name="account" size="40" Value="<?php echo $row["admin_account"];?>">
	</tr>
		
	</table>
	<br/>
	<center><button type="submit" name="upbtn" onclick="myFunction()" value="Update"> Update </center> </a>
	 </form>
	</div>
	
	
</body>
</html>

<?php

?>