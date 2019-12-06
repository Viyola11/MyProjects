<?php
include 'dbcon.php';
//require('../config/autoload.php');
//$da=new DataAccess();
if(isset($_POST) & !empty($_POST))
  {
		$username = mysqli_real_escape_string($con, $_POST['user_id']);
	$sql = "SELECT * FROM login_ad WHERE email = '$username'";
	$res = mysqli_query($con, $sql);
	$count = mysqli_num_rows($res);
	if($count == 1)
	{
		$r = mysqli_fetch_assoc($res);
		$password = $r['pwd'];
		$to = $r['email'];
		$subject = "Your Recovered Password";
 		$message = "Please use this password to login " . $password;
		$headers = "From : admin@gmail.com";
		    if(mail($to, $subject, $message, $headers))
				{
				  echo "Your Password has been sent to your email id";
				  echo"<script> location.replace('../Login/login_ad.php'); </script>";
				}
			else
				{
				  echo "Failed to Recover your password, try again";
				}
	}
	else
	{
		echo "User name does not exist in database";
	}
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Forgot Password</title>
<style type="text/css">
 input{
 border:1px solid olive;
 border-radius:5px;
 }
 h1{
  color:darkgreen;
  font-size:22px;
  text-align:center;
 }

</style>
</head>
<body>
<h1>Forgot Password<h1>
<form action='' method='post'>
<table cellspacing='5' align='center'>
<tr><td>Phone No:</td><td><input type='text' name='user_id' required/></td>
<tr><td></td><td><input type='submit' name='submit' value='Send Password'/></td></tr>
</table>
</form>
</body>
</html>