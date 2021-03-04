<?php

$username="LOGOUT";
 setcookie("username","$username",time()+86400);

?>
<script type="text/javascript">

	alert("You have safely logout from the system, User");
	window.location='/fyp/fyp/main/Guest/guest_index.php';

</script>

?>