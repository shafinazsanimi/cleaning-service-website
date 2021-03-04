<?php
  include("connectionDB.php");

  $username=$_POST['username'];
   $password=$_POST['password'];
   $login=$_GET['login'];
  
   
   
   
          
   
   if($login=='yes')
   {
        
   
	   
	   $get= mysql_query("SELECT count(admin_ID) FROM admin WHERE admin_name='$username' and admin_password='$password'");
                                 	                               
	                                                       
	   
	   $result= mysql_result($get,0);
	   
	   if($result!=1)
	   {
	   ?>
				<script type="text/javascript">


				alert("YOU HAS KEY IN THE WRONG PASSWORD OR USERNAME MAYBE YOU DONT HAS KEY IN ANTHING");
				window.location='C:\xampp\htdocs\fyp\fyp\main\Login\index.html';
				</script>
<?php 
		    
	   }
	   else
	   {
	     
?>            
	           <script type="text/javascript">

				 alert("You Are Logged In");
               
   			     window.close();
                 window.open("C:\xampp\htdocs\fyp\fyp\main\Admin\admin_index.html");
				 
				</script>
<?php 
				
				
	  
		
	   }
	   
   
   }

?>


	