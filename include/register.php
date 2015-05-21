<?php
if(!empty($_POST['regemail']) && !empty($_POST['regnewpassword'])){
	$fullname = $conn->real_escape_string($_POST['regfullname']);
    $password = md5($conn->real_escape_string($_POST['regnewpassword']));
    $email = $conn->real_escape_string($_POST['regemail']);
    
	 $checkemail = "SELECT * FROM users WHERE EmailAddress = '".$email."'";
     
     if(mysqli_num_rows($conn->query($checkemail)) == 1)
     {
     	echo "<h1>Error</h1>";
        echo "<p>Sorry, that email is taken. Please try again.</p>";
     }
     else
     {
     	$registerquery = "INSERT INTO users (FullName, Password, EmailAddress, fullreg) VALUES('".$fullname."', '".$password."', '".$email."', '0')";
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
        	echo "<p>Sorry, your registration failed. Please try again.</p>";
        }    	
     }
}
?>