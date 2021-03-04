<?php
  include("connectionDB.php");

   
	$username=$_POST['username'];
	$password=$_POST['password'];
	$login= $_GET['login'];
   
   
          
	if($login=='yes')
	{
        
			/* Fetch Info from Database */
   
			$get= mysql_query("SELECT count(admin_ID) FROM admin WHERE admin_name='$username' and admin_password='$password'");
                           
			$get2= mysql_query("SELECT count(customer_id) FROM customer WHERE customer_name='$username' and customer_password='$password'");                                                   
			$get3= mysql_query("SELECT count(cleaner_id) FROM cleaner WHERE cleaner_name='$username' and cleaner_password='$password'");
	   
	   
	   
			/* Store Info into Temporary Variable */
	   
			$result= mysql_result($get,0);
	   
			$result2= mysql_result($get2,0);
	   
			$result3= mysql_result($get3,0);
	   
	   
	   
		/* Check If input = info in database */
	   
		if($result!=1 && $result2!=1 && $result3!=1)
		{
?>
			<script type="text/javascript">


			alert("YOU HAS KEY IN THE WRONG PASSWORD OR USERNAME MAYBE YOU DONT HAS KEY IN ANTHING");
			window.location='/fyp/fyp/main/Login/index.php';
			</script>
<?php 	
		}
		elseif ($result==1 && $result2!=1 && $result3!=1)
		{
	     setcookie("username","$username",time()+86400);
?>            
				<script type="text/javascript">

				alert("Welcome Admin");
               
				 
                // window.location = '/fyp/fyp/main/Admin/admin_index.php';
				window.open("/fyp/fyp/main/Admin/admin_index.php");
				window.close();
				 
				</script>
				
<?php    
		}
		elseif ($result!=1 && $result2==1 && $result3!=1)
		{
	     setcookie("username","$username",time()+86400);
?>            
				<script type="text/javascript">

				alert("Welcome User");
               
				 
                // window.location = '/fyp/fyp/main/Admin/admin_index.php';
				window.open("/fyp/fyp/main/Customer/customer_index.php");
				window.close();
				 
				</script>
				
<?php 
	   }
	   elseif ($result!=1 && $result2!=1 && $result3==1)
	   {
	     setcookie("username","$username",time()+86400);
?>            
	           <script type="text/javascript">

				 alert("Welcome Cleaner");
               
				 
                 // window.location = '/fyp/fyp/main/Admin/admin_index.php';
				 window.open("/fyp/fyp/main/Cleaner/cleaner_index.php");
				 window.close();
				 
				</script>
				

<?php 
	   }
	   
   
	}

?>


	