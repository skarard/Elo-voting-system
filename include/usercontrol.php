<?php
if (isset($_GET['register'])){
  require "include/register.php";
}
if(!empty($_POST['email']) && !empty($_POST['password'])) {
  $email = $conn->real_escape_string($_POST['email']);
  $password = md5($conn->real_escape_string($_POST['password']));

  $checklogin = "SELECT * FROM users WHERE EmailAddress = '".$email."' AND Password = '".$password."'";

  if(mysqli_num_rows($conn->query($checklogin)) == 1){
    $row = mysqli_fetch_array($conn->query($checklogin));
    $fullname = $row['FullName'];
    $fullreg = $row['fullreg'];

    $_SESSION['FullName'] = $fullname;
    $_SESSION['EmailAddress'] = $email;
    $_SESSION['LoggedIn'] = 1;
    $_SESSION['FullReg'] = $fullreg;
    echo "<meta http-equiv=\"refresh\" content=\"0;index.php\">";
    return;
  } else {
    echo "<h1>Error</h1>";
    echo "<p>Sorry, your account could not be found.</p>";
  }
} 
 ?>
<div class="twocolumn">
  <h1>Explination</h1>
  <iframe width="420" height="270" src="https://www.youtube.com/embed/KzLE8hZSTV8" frameborder="0" allowfullscreen></iframe>
</div>
<div class="twocolumn">
     <h1>Register</h1>
    
   <p>Please enter your details below to register.</p>
    
  <form method="post" action="index.php?register" name="registerform" id="registerform">
  <fieldset>
        <div class="input">
        <div class="inputtext" id="regfullnamehide">Full Name</div>
    <input type="text" name="regfullname" id="regfullname" onfocus="hideFocus('Full Name','regfullname');" onblur="hideFocus('Full Name','regfullname');" value=" "/>
        </div>
        <div class="input">
        <div class="inputtext" id="regemailhide">Email Address</div>
        <input type="text" name="regemail" id="regemail" onfocus="hideFocus('Email Address','regemail');" onblur="hideFocus('Email Address','regemail');" value=" "/>
    </div>
        <div class="input">
        <div class="inputtext" id="regnewpasswordhide">New Password</div>
        <input type="password" name="regnewpassword" id="regnewpassword" onfocus="hideFocus('New Password','regnewpassword');" onblur="hideFocus('New Password','regnewpassword');" value=" "/>
    </div>
        <div class="input">
        <input type="submit" name="register" id="register" value="Register" />
     </div>
    </fieldset>
  </form>
</div>