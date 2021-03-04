<?php

include("connectionDB.php");

  $username = $_COOKIE['username'];

   if (isset($_POST["addbtn"]))
  { 
	
    $name = $_POST["name"];
	$password=$_POST["password"];
	
	mysql_query("insert into admin (admin_username, admin_password) 
	values ('$name','$password')");
   
  ?>
  
 <?php
  }
?>

<html>

<style text="text/css">
input[type="text"], textarea, td {

  background-color : white; 

}
</style>

<head>

<script> 
	function myFunction()
	{
	
	alert("New Admin has Been Added");
	window.location=Profile.php;
	window.close();
	
	}
</script>

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
				<span>Admin Profile</span>
				</h1>  
	
	<div id="page2">
	 <form id="AddAdmin" name="AddAdmin" action="" method="post">
		<table border="5">	
	
	<tr>
		<th>Your UserName :
		<td><input type="text" name="name" size="40" />
	</tr>
	
	<tr>
		<th>Your Password :
		<td><input type="text" name="password" size="40" />
	</tr>
	
	</table>
	<br/>
	<center><button type="submit" name="addbtn" onclick="myFunction()" value="Add"> Add </center> </a>
	 </form>
	</div>
	
</body>
</html>

<?php

?>