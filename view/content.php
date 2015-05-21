<div class="padd wrap gap">
	<?php 
	if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['EmailAddress'])){
		if (!empty($_SESSION['FullReg'])){
			require "include/getparty.php";
		} else {
			require "include/additional.php";
		}
	} else {
		require "include/usercontrol.php";
	}
	?>
</div>