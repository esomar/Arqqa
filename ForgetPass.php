<?php

$conn = mysqli_connect("localhost", "root", "", "hr") or die("Connection Error: " . mysqli_error($conn));

if (count($_POST) > 0) {
    $result = mysqli_query($conn, "SELECT * from employee WHERE email='" . $_POST["Email"] . "'");    
	if(mysqli_num_rows($result) > 0)
	{	
		$row = mysqli_fetch_array($result);
		//send mail code
		$to_email = $row["email"];
		$subject = 'This mail is sent using the PHP mail function';
		$message = 'You password is'.$row["password"];
		$headers = 'From: mohamed1709629@miuegypt.edu.eg';
		if(mail($to_email,$subject,$message,$headers))
		$message = 'Please check your email to get password!';
		else
			$message = 'Email not Send';
	}
	else
	{
		 $message = "Current Email is not correct";
	}      
}
?>
<html>
<head>
<title>Change Password</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
<script>
function validateEmail() {
var Email,output = true;

Email = document.frmChange.Email;

if(!Email.value) {
	Email.focus();
	document.getElementById("Email").innerHTML = "required";
	output = false;
}
 	
return output;
}
</script>
</head>
<body>
    <form name="frmChange" method="post" action=""
        onSubmit="return validateEmail()">
        <div style="width: 500px;">
            <div class="message"><?php if(isset($message)) { echo $message; } ?></div>
            <table border="0" cellpadding="10" cellspacing="0"
                width="500" align="center" class="tblSaveForm">
                <tr class="tableheader">
                    <td colspan="2">Forget Password</td>
                </tr>
                 <tr>
                    <td width="40%"><label>Email</label></td>
                    <td width="60%"><input type="text"
                        name="Email" class="txtField" /><span
                        id="Email" class="required"></span></td>
                </tr>
				
                <tr>
                    <td colspan="2"><input type="submit" name="submit"
                        value="Submit" class="btnSubmit"></td>
                </tr>
            </table>
        </div>
    </form>
</body>
</html>