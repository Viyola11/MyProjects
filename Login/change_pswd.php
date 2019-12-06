<?php
session_start();
$_SESSION["id"] = "1";
include 'dbcon.php';

if (count($_POST) > 0) 
	{
    $res=mysqli_query($con, "SELECT * from login_ad WHERE log_id='" . $_SESSION["id"] . "'");
    $row = mysqli_fetch_array($res);
    if ($_POST["currentPswd"] == $row["pwd"]) 
	{
		mysqli_query($con, "UPDATE login_ad set pwd='" . $_POST["newPswd"] . "' WHERE log_id='" . $_SESSION["id"] . "'");
		$message ="Password Changed successfully";
		echo "<script> alert('Password changed successfully');</script> ";
        echo"<script> location.replace('../Admin/dashboard.php'); </script>";
    } 
else
        //$message = "Current Password is not correct";
	    echo "<script> alert('Current Password is not correct');</script> ";
}
?>

<html>
<head>
<title>Change Password</title>
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
<script>
function validatePswd() 
	{
		var currentPswd,newPswd,confirmPswd,output = true;
		currentPswd = document.frmChange.currentPswd;
		newPswd = document.frmChange.newPswd;
		confirmPswd = document.frmChange.confirmPswd;
			if(!currentPswd.value) 
			{
				currentPswd.focus();
				document.getElementById("currentPswd").innerHTML = "required";
				output = false;
			}
			else if(!newPswd.value) 
			{
				newPswd.focus();
				document.getElementById("newPswd").innerHTML = "required";
				output = false;
			}
			else if(!confirmPswd.value)
			{
				confirmPswd.focus();
				document.getElementById("confirmPswd").innerHTML = "required";
				output = false;
			}
		if(newPswd.value != confirmPswd.value) 
		{
			newPswd.value="";
			confirmPswd.value="";
			newPswd.focus();
			document.getElementById("confirmPswd").innerHTML = "not same";
			output = false;
		} 	
      return output;
	}
</script>
</head>
<body>
	<h1>Change Password</h1>
<center>
<form name="frmChange" method="post" action="" onSubmit="return validatePswd()">
<div style="width:500px;">
<div class="message">
	<?php 
	if(isset($message)) 
		{ 
			echo $message; 
		} ?>
</div>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr>
<td width="40%"><label>Current Password</label></td>
<td width="60%"><input type="password" name="currentPswd" class="txtField"/><span id="currentPswd"  class="required"></span></td>
</tr>
<tr>
<td><label>New Password</label></td>
<td><input type="password" name="newPswd" class="txtField"/><span id="newPswd" class="required"></span></td>
</tr>
<td><label>Confirm Password</label></td>
<td><input type="password" name="confirmPswd" class="txtField"/><span id="confirmPswd" class="required"></span></td>
</tr>
</table>
	<br><br>
	<input type="submit" name="submit" value="Change Password" class="btnSubmit"><br><br><br>
	<nav>	
		<a href="../Admin/dashboard.php">BACK</a>	
	</nav>
</div>
</form>
</center>
</body>
</html>