<div class="header">
	<div class="wrap padd">
		<div class="title">UK General Elections </div>
		<?php if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username'])){
		?>
		<a href="include/logout.php">Log out</a>
		<div class="leaderboardclick"><a href="#" onclick="toggle_visibility('leaderboard');">Show Leaderboard</a></div>
		<div id="leaderboard" class="padd" style="display:none"><?php include "include/leaderboard.php"; ?></div>
		<?php } ?>
	</div>
</div>