<?php
if(!empty($_POST['regNI']) && !empty($_POST['regaddress'])){
	$ni = $conn->real_escape_string($_POST['regNI']);
    $address = $conn->real_escape_string($_POST['regaddress']);
    $fullreg = 1;
    
     	$registerquery = "UPDATE users SET NationalInsurance='".$ni."', Address='".$address."', fullreg='1' WHERE EmailAddress='".$_SESSION['EmailAddress']."'";
        if($conn->query($registerquery))
        {
            $_SESSION['FullReg'] = 1;
            
            echo "<meta http-equiv=\"refresh\" content=\"0;index.php\">";
        }
        else
        {
     		echo "<h1>Error</h1>";
        	echo "<p>Sorry, your registration failed. Please try again.</p>";
        }    	
} else { ?>
         <h1>Additional Information</h1>
    
   <p>Please enter your details below to register.</p>
    
  <form method="post" action="index.php?additional" name="additionalform" id="additionalform">
  <fieldset>
        <div class="input">
        <div class="inputtext" id="regNIhide">National Insurance</div>
    <input type="text" name="regNI" id="regNI" onfocus="hideFocus('National Insurance','regNI');" onblur="hideFocus('National Insurance','regNI');" value=" "/>
        </div>
        <div class="input">
        <div class="inputtext" id="regaddresshide">Full Address</div>
        <input type="text" name="regaddress" id="regaddress" onfocus="hideFocus('Full Address','regaddress');" onblur="hideFocus('Full Address','regaddress');" value=" "/>
    </div>
        <div class="input">
        <input type="submit" name="register" id="register" value="Register" />
     </div>
    </fieldset>
  </form>
<?php } ?>