<?php
if(!empty($_POST['email']) && !empty($_POST['password'])){
	$fullname = mysqli_real_escape_string($mysqli, $_POST['fullname']);
    $password = md5(mysqli_real_escape_string($mysqli, $_POST['password']));
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);
    
	 $checkemail = mysqli_query($mysqli, "SELECT * FROM users WHERE EmailAddress = '".$email."'");
     
     if(mysqli_num_rows($checkemail) == 1)
     {
     	echo "<h1>Error</h1>";
        echo "<p>Sorry, that email is taken. Please go back and try again.</p>";
     }
     else
     {
     	$registerquery = mysqli_query($mysqli, "INSERT INTO users (FullName, Password, EmailAddress) VALUES('".$fullname."', '".$password."', '".$email."')");
        if($registerquery)
        {
            $_SESSION['FullName'] = $fullname;
            $_SESSION['EmailAddress'] = $email;
            $_SESSION['LoggedIn'] = 1;
            
            echo "<meta http-equiv=\"refresh\" content=\"0;index.php\">";
        }
        else
        {
     		echo "<h1>Error</h1>";
        	echo "<p>Sorry, your registration failed. Please go back and try again.</p>";
            return; 
        }    	
     }
}
else
{
	?>
    
   <h1>Register</h1>
    
   <p>Please enter your details below to register.</p>
    
	<form method="post" action="index.php?register" name="registerform" id="registerform">
	<fieldset>
		<label for="fullname">Full Name:</label><input type="text" name="fullname" id="fullname" /><br />
        <label for="email">Email Address:</label><input type="text" name="email" id="email" /><br />
		<label for="password">Password:</label><input type="password" name="password" id="password" /><br />
		<input type="submit" name="register" id="register" value="Register" />
	</fieldset>
	</form>
    
   <?php
   return;
}
?>