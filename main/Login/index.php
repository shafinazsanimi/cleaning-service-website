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
	 
	    $get = mysqli_query("SELECT COUNT(customer_id) FROM customer WHERE customer_username='$username'");
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
				 mysqli_query($con, "INSERT INTO customer (customer_username, customer_name, customer_email, customer_phone ,customer_password) 
				 VALUES ('$username','$name','$email','$phone','$password')");
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
<html>
<head>


<script language="javascript" type="text/javascript">
	<!--
	function popitup(url) {
	newwindow=window.open(url,'name','height=700,width=700,top=100,left=400');
	if (window.focus) {newwindow.focus()}
	return false;
	}
	// -->
	
</script>

<style>
	 abc { cursor: pointer; cursor: hand; }
</style>
	
<title> Login Form & Register Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

<!-- //web font -->
</head>
<body>
<h1>Login Form / Register Form</h1>
<div class="main-agileits">
<!--form-stars-here-->
		<div class="form-w3-agile">
			<h2>Login Form</h2>
			<form name="loginpage" action="login.php?login=yes" method="post">
				<div class="form-sub-w3">
					<input type="text" name="username" placeholder="Your username " required="" />
				<div class="icon-w3">
					<i class="fa fa-user" aria-hidden="true"></i>
				</div>
				</div>
				<div class="form-sub-w3">
					<input type="password" name="password" placeholder="Password" required="" />
				<div class="icon-w3">
					<i class="fa fa-unlock-alt" aria-hidden="true"></i>
				</div>
				</div>
				<p class="p-bottom-w3ls">Are you our new Customer?<a class="w3_play_icon1" href="#small-dialog1">  Register here</a></p>
				
				<br/>
				
				<p class="p-bottom-w3ls">Are you our new Cleaner?<a class="menu_links" onmouseover="" style="cursor: pointer;" onclick="return popitup('../Register1/register_cleaner.php')" type="popup">  Register here</a></p>
				
				<div class="submit-w3l">
					<input type="submit" value="LOGIN">
				</div>
			</form>
		</div>
<!--//form-ends-here-->
</div>
<div id="small-dialog1" class="mfp-hide">
					<div class="contact-form1">
										<div class="contact-w3-agileits">
										<h3>Customer Register Form</h3>
											<form action="#" method="post">
												<div class="form-sub-w3ls">
													<input id="name" name="username" class="text" placeholder="User Name"  type="text" required="">
													<div class="icon-agile">
														<i class="fa fa-user" aria-hidden="true"></i>
													</div>
												</div>
												<div class="form-sub-w3ls">
													<input id="name" name="name" class="text" placeholder="Name"  type="text" required="">
													<div class="icon-agile">
														<i class="fa fa-user" aria-hidden="true"></i>
													</div>
												</div>
												<div class="form-sub-w3ls">
													<input id="email" name="email" class="text" placeholder="Email" class="email" type="email" required="">
													<div class="icon-agile">
														<i class="fa fa-envelope-o" aria-hidden="true"></i>
													</div>
												</div>
												<div class="form-sub-w3ls">
													<input id="name" name="phone" class="text" placeholder="Phone" class="phone" type="text" required="">
													<div class="icon-agile">
														<i class="fa fa-phone" aria-hidden="true"></i>
													</div>
												</div>
												<div class="form-sub-w3ls">
													<input type="password" name="password" maxlength=20 placeholder="Your Password" required="true" id="password">
													<div class="icon-agile">
														<i class="fa fa-unlock-alt" aria-hidden="true"></i>
													</div>
												</div>
												<div class="form-sub-w3ls">
													<input type="password" name="password" maxlength=20 placeholder="Confirm Password" required="true" id="confirm_password"></input>
													<div class="icon-agile">
														<i class="fa fa-unlock-alt" aria-hidden="true"></i>
													</div>
												</div>
												
												<div class="hide-show">
													<button type="button" width="80px" height="30px"><span> Show </span></button>
													
												</div>
																						
											</div>
											
											<br/>
											
											<div class="login-check">
								 			 <label class="checkbox">
											 <input id="acceptterms" type="checkbox" name="acceptterms"><p>I Accept Terms & Conditions </p> <p><a href="a.pdf"><font color="yellow"> Link </font></a></p></label>
											
											</div>
											
											
											
										<div class="submit-w3l">
											<input name="register" type="submit" value="Register" onclick="myFunction()">
										</div>
										</form>
					</div>	
				</div>
						
				
<!-- copyright -->
	<div class="copyright w3-agile">
		<p> © 2017 Credit Login / Register Form . All rights reserved </a></p>
	</div>
	<!-- //copyright --> 
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- pop-up-box -->  
		<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
	<!--//pop-up-box -->
	<script>
		$(document).ready(function() {
		$('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
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


</body>
</html>