<?php
if (isset($_GET['register'])){
  require "include/register.php";
  return;
}
if(!empty($_POST['username']) && !empty($_POST['password'])) {
  $username = mysqli_real_escape_string($mysqli, $_POST['username']);
  $password = md5(mysqli_real_escape_string($mysqli, $_POST['password']));

  $checklogin = mysqli_query($mysqli, "SELECT * FROM users WHERE Username = '".$username."' AND Password = '".$password."'");

  if(mysqli_num_rows($checklogin) == 1){
    $row = mysqli_fetch_array($checklogin);
    $email = $row['EmailAddress'];

    $_SESSION['Username'] = $username;
    $_SESSION['EmailAddress'] = $email;
    $_SESSION['LoggedIn'] = 1;
    echo "<meta http-equiv=\"refresh\" content=\"0;index.php\">";
  } else {
    echo "<div class=\"error\">";
    echo "<h1>Error</h1>";
    echo "<p>Sorry, your account could not be found. Please <a href=\"index.php\">click here to try again</a>.</p>";
    echo "</div>";
    return;
  }
} 
else { ?>
<div class="twocolumn">
  <h1>Explination</h1>
</div>
<div class="twocolumn">
  <h1>Member Login</h1>

  <p>Thanks for visiting! Please either login below, or <a href="index.php?register">click here to register</a>.</p>

  <form method="post" action="index.php" name="loginform" id="loginform">
    <fieldset>
      <label for="username">Username:</label><input type="text" name="username" id="username" /><br />
      <label for="password">Password:</label><input type="password" name="password" id="password" /><br />
      <input type="submit" name="login" id="login" value="Login" />
    </fieldset>
  </form>
</div>
<?php
}
?>