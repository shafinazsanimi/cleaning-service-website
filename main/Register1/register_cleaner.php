<?php
include("connectionDB.php");

  
   $variable;
	
    
	if (isset($_POST["register"]))
  {
  
      if(empty ($_POST['acceptterms']))
	{
		 ?><script type="text/javascript">
		 alert("Please Accept The Term and Condition");
		 </script>
		 <?php
	}else
        {    
			  //$variable = ($_POST['acceptterms']);
		
         		
		$username= $_POST["username"];
		$name = $_POST["name"];
        $email = $_POST["email"];
	    $password = $_POST["password"];
		$phone = $_POST["phone"];
		$package = $_POST["package"];
		$package = $_POST["package2"];
		$packagetype = $_POST["type"];
		$packagetype = $_POST["type2"];
	 
	    $get = mysqli_query($con, "SELECT count(cleaner_id) FROM cleaner WHERE cleaner_username='$username'");
	    $result = mysqli_result($get,0);
 
			    if($result!=0)
			 {
			  ?>
				<script>
				alert("Username Unavailable, please choose different Username");
				 </script>
			
				<?php
			  }
				else
				{
				 mysqli_query($con, "INSERT INTO cleaner (cleaner_username, cleaner_name, cleaner_email, cleaner_phone ,cleaner_password ,cleaner_package, cleaner_package_type) 
				 VALUES ('$username','$name','$email','$phone','$password','$package','$packagetype')");
				?>				
				<script type="text/javascript">
				alert("You are Registered");
				 </script>
			
				<script>
			   window.close();
				</script>
				<?php
				}
		?>
	
	<?php
	    }
			
	  
	  
    }
  ?>

<!DOCTYPE html>

<html lang="en">
<head>

	
	
</script>

<title>Register Form Cleaner</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all">
<!-- //css files -->
<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Cuprum:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese" rel="stylesheet">
<!--//online-fonts -->
</head>
<body>
<div class="header">
</div>
<div class="w3-main">
	<!-- Main -->
	
	<br/><br/><br/>
	<div class="about-bottom main-agile book-form">
		
		
		<h2 class="tittle">Cleaner Register Here</h2>
		<form action="" method="post">
			<div class="form-date-w3-agileits">
			
				<label> User Name </label>
				<input type="text" name="username" class="text" placeholder="Your Username" required="true" style="color:white;">
				
				<label> Name </label>
				<input type="text" name="name" class="text" placeholder="Your Name" required="true" style="color:white;">
				
				<label> Email </label>
				<input type="email" name="email" class="text" placeholder="Your Email" required="true">
				
				<label> Phone </label>
				<input type="text" name="phone" class="text" placeholder="Your Phone" required="true">
				
				<label> Password </label>
				<input type="password" name="password" maxlength=20 placeholder="Your Password" required="true" id="password">
				
				<label> CONFIRM Password </label>
				<input type="password" name="password" maxlength=20 placeholder="Confirm Password" required="true" id="confirm_password"></input>
				
				<div class="hide-show">
				<button type="button" width="80px" height="30px" ><span> Show </span></button>
				<font color="white"> &nbsp; <-- Click Here to Show Password </font>
				</div>
				<br/>	
				
				<br/>
				
				<input type="button" onclick="location.href='../Login/index.php';" value="Login Form" width="80px" height="30px"/> 
				<font color="white"> &nbsp; <-- Click Here to Login </font>
				
				<br/><br/>
				
				<label > Package chosen </label>
				<input type="radio" id="1" value="Individual"  name="package"><font color="white"> Individual </font> 
					<select name="type">
						<option value="Gold"> Gold </option>
						<option value="Platinum"> Platinum </option>
						<option value="Diamond"> Diamond </option>
					</select>
				</input>
					
					<br/><br/>
					
				<input type="radio" id="2" value="Company"  name="package2"><font color="white"> Company </font> 
					<select name="type2">
						<option value="Gold"> Gold </option>
						<option value="Platinum"> Platinum </option>
						<option value="Diamond"> Diamond </option>
					</select>
				</input>
				
				<br/><br/>
				
				<div class="login-check">
					<label class="checkbox">
					<input id="acceptterms" type="checkbox" name="acceptterms" > I Accept Terms & Conditions  // 
					<a href="a.pdf" > <font color="yellow"> Link </font> </a></label>
											 
				</div>
					
			</div>
			<div class="make wow shake">
				  <input id="submit" name="register" type="submit" value="Register" onclick="myFunction()" required>
			</div>
		</form>
	</div>
	<!-- //Main -->
</div>
<!-- footer -->
<div class="footer-w3l">
	<p>&copy; 2017 SNV Register Form. All rights reserved </a></p>
</div>
<!-- //footer -->
<!-- js-scripts-->
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
		<script>$(document).ready(function(c) {
		$('.alert-close').on('click', function(c){
			$('.main-agile').fadeOut('slow', function(c){
				$('.main-agile').remove();
			});
		});	  
	});
	</script>
	
<script>
$(function(){
  $('.hide-show').show();
  $('.hide-show span').addClass('show')
  
  $('.hide-show span').click(function(){
    if( $(this).hasClass('show') ) {
      $(this).text('Hide');
      $('input[name="password"]').attr('type','text');
      $(this).removeClass('show');
    } else {
       $(this).text('Show');
       $('input[name="password"]').attr('type','password');
       $(this).addClass('show');
    }
  });
	
});
</script>	

<script>
var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;

</script>


<!-- //js-scripts-->
</body>
</html>