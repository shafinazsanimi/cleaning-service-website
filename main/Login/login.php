<?php
  include("connectionDB.php");
   
	$username=mysqli_real_escape_string($con,$_POST['username']);
	$password=mysqli_real_escape_string($con,$_POST['password']);
	$login= $_GET['login'];
   
	$username=trim($username);
	$password=trim($password);
	
          
	if($login=='yes')
	{
   
			$get="SELECT admin_password FROM admin WHERE admin_username='$username' and admin_password='$password'";
			$get2="SELECT customer_password FROM customer WHERE customer_username='$username' and customer_password='$password'";
			$get3="SELECT cleaner_password FROM cleaner WHERE cleaner_username='$username' and cleaner_password='$password'";

			$result=mysqli_query($con,$get);
			$result2=mysqli_query($con,$get2);
			$result3=mysqli_query($con,$get3);

			$row= mysqli_num_rows($result);
			$row2= mysqli_num_rows($result2);
			$row3= mysqli_num_rows($result3);
	   
		/* Check If input = info in database */
	   
		if($row != 1 && $row2 != 1 && $row3 != 1)
		{
?>
			<script type="text/javascript">
			alert("YOU HAS KEY IN THE WRONG PASSWORD OR USERNAME MAYBE YOU DONT HAS KEY IN ANTHING");
			window.location='/fypdip/main/Login/index.php';
			</script>
<?php 	
		}
		elseif ($row == 1 && $row2 != 1 && $row3 != 1)
		{
		
	     setcookie("username","$username",time()+36000 , "/");
?>            
				<script type="text/javascript">
				alert("Welcome Admin");
                window.location = '/fypdip/main/Admin/admin_index.php';
				</script>
				
<?php    
		}
		elseif ($row != 1 && $row2 == 1 && $row3 != 1)
		{
			
	     setcookie("username", "$username" ,time()+36000 , "/");
?>            
				<script type="text/javascript">
				alert("Welcome User");
                window.location = '/fypdip/main/Customer/customer_index.php';
				</script>
				
<?php 
	   }
	   elseif ($row != 1 && $row2 != 1 && $row3 == 1)
	   {
		   
	     setcookie("username","$username",time()+36000 , "/");
?>            
	           <script type="text/javascript">
				 alert("Welcome Cleaner");
                 window.location = '/fypdip/main/Cleaner/cleaner_index.php';
				</script>
				

<?php 
	   }
	   
   
	}

?>


	