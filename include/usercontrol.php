<?php
if (isset($_GET['register'])){
  require "include/register.php";
  return;
}
if(!empty($_POST['email']) && !empty($_POST['password'])) {
  $email = $conn->real_escape_string($_POST['email']);
  $password = md5($conn->real_escape_string($_POST['password']));

  $checklogin = "SELECT * FROM users WHERE EmailAddress = '".$email."' AND Password = '".$password."'";
  
  if(mysqli_num_rows($conn->query($checklogin)) == 1){
    $row = mysqli_fetch_array($conn->query($checklogin));
    $fullname = $row['FullName'];

    $_SESSION['FullName'] = $fullname;
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
  <iframe width="420" height="270" src="https://www.youtube.com/embed/KzLE8hZSTV8" frameborder="0" allowfullscreen></iframe>
</div>
<div class="twocolumn">
  <?php require "include/register.php"; ?>
</div>
<?php
}
?>