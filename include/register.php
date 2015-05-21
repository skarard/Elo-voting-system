<?php
if(!empty($_POST['regemail']) && !empty($_POST['regnewpassword'])){
	$fullname = $conn->real_escape_string($mysqli, $_POST['regfullname']);
    $password = md5($conn->real_escape_string($mysqli, $_POST['regnewpassword']));
    $email = $conn->real_escape_string($mysqli, $_POST['regemail']);
    
	 $checkemail = "SELECT * FROM users WHERE EmailAddress = '".$email."'";
     
     if(mysqli_num_rows($conn->query($checkemail)) == 1)
     {
     	echo "<h1>Error</h1>";
        echo "<p>Sorry, that email is taken. Please go back and try again.</p>";
     }
     else
     {
     	$registerquery = "INSERT INTO users (FullName, Password, EmailAddress) VALUES('".$fullname."', '".$password."', '".$email."')";
        if($conn->query($registerquery))
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
    
   <?php
   return;
}
?>