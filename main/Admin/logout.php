<?php

$username="LOGOUT";
 setcookie("username","$username",time()+86400);

?>
<script type="text/javascript">


				alert("You have safely logout from the system, Admin");
				window.location='/fypdip/main/Guest/guest_index.php';
				</script>

?>