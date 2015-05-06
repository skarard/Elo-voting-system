<div class="padd wrap gap">
	<?php 
	if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['EmailAddress'])){
		require "include/getparty.php";
	} else {
		require "include/usercontrol.php";
	}
	?>
</div>