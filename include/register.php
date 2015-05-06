<?php
if(!empty($_POST['username']) && !empty($_POST['password'])){
	$username = mysqli_real_escape_string($mysqli, $_POST['username']);
    $password = md5(mysqli_real_escape_string($mysqli, $_POST['password']));
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);
    
	 $checkusername = mysqli_query($mysqli, "SELECT * FROM users WHERE Username = '".$username."'");
     
     if(mysqli_num_rows($checkusername) == 1)
     {
     	echo "<h1>Error</h1>";
        echo "<p>Sorry, that username is taken. Please go back and try again.</p>";
        return;
     }
     else
     {
     	$registerquery = mysqli_query($mysqli, "INSERT INTO users (Username, Password, EmailAddress) VALUES('".$username."', '".$password."', '".$email."')");
        if($registerquery)
        {
            $_SESSION['Username'] = $username;
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
		<label for="username">Username:</label><input type="text" name="username" id="username" /><br />
		<label for="password">Password:</label><input type="password" name="password" id="password" /><br />
        <label for="email">Email Address:</label><input type="text" name="email" id="email" /><br />
		<input type="submit" name="register" id="register" value="Register" />
	</fieldset>
	</form>
    
   <?php
   return;
}
?>