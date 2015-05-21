<div class="header">
	<div class="wrap padd">
		<div class="twocolumn">
			<div class="title">Voteelo</div>
		</div>
		<div class="twocolumn">
			<?php if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['EmailAddress'])){
				?>
				<div class="loggedin">Logged in as: <?php echo $_SESSION['FullName'] ?> <a href="index.php?logout">Log out</a></div>
				<div class="leaderboardclick"><a href="#" onclick="toggle_visibility('leaderboard');">Show Leaderboard</a></div>
				<div id="leaderboard" class="padd" style="display:none"><?php include "include/leaderboard.php"; ?></div>
				<?php } else {?>
				<form method="post" action="index.php" name="loginform" id="loginform">
					<div class="login">
						<div class="column">
							<label for="email">Email:</label><input type="text" name="email" id="email" />
						</div>
						<div class="column">
							<label for="password">Password:</label><input type="password" name="password" id="password" />
						</div>
						<div class="column">
							<input type="submit" name="login" id="login" value="Login" />
						</div>
					</div>
				</form>
				<?php } ?>
			</div>
		</div>
	</div>