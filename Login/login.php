<!DOCTYPE html>
<html lang="en">
<head>
	<title>R-TRACK LOGIN</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<!--===============================================================================================-->
	<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
<?php require('../config/autoload.php'); ?>
<?php
$dao=new DataAccess();
	
$elements=array("email"=>"","pwd"=>"");
	
$form=new FormAssist($elements,$_POST);
	

	
$rules=array('email'=>array('required'=>true,"email"=>true),
    'pwd'=>array('required'=>true,"minlength"=>3));
	
$validator=new FormValidator($rules);
	
if(isset($_POST['log']))
{ 
    if($validator->validate($_POST))
    {
        $data=array('email'=>$_POST['email'],'pwd'=>$_POST['pwd']);
        if($dao->login($data,'admin_user'))
        {
			
		  $email=$_POST['email'];
		  $userid="select * from admin_user where email ="."'".$email."'";
          $info=$dao->query($userid);
          $u = $info[0]["u_id"];
		  $_SESSION['name']=$u;
			
		 // $data=array('email'=>$_POST['email'],'pwd'=>$_POST['pwd']);
   		  echo"<script> location.replace('../Staff/staff_client.php'); </script>";
			// header('location:student/index.html');
        }
        else
		{
            //$msg="invalid username or password";
			//echo $msg;
			echo "<script> alert('Invalid username or password');</script> ";
        }
    }

    
}


?>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(../Login/images/bkg.jpg);">
					<span class="login100-form-title-1">
						SIGN IN
					</span>
				</div>

				<form class="login100-form validate-form" method="POST">
					<div class="wrap-input100 validate-input m-b-26">
						<span class="label-input100">Email</span>
						<?= $form->textBox('email',array('class'=>'form-control')); ?>
						<?= $validator->error('email'); ?>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18">
						<span class="label-input100">Password</span>
						<?= $form->passwordBox('pwd',array('class'=>'form-control')); ?>
						<?= $validator->error('pwd'); ?>
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">
					<!-- <div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>  -->

						<div>
							<a href="forgot_pswd_staff.php" class="txt1">
								Forgot Password?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="log" type="submit">
							Login
						</button>
					</div>
					 
					<div>
					
						<div>
							<a href="login_ad.php" class="txt1">
								Admin Login 
							</a>&nbsp;&nbsp;&nbsp;

						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/bootstrap/js/popper.js"></script>
	<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/daterangepicker/moment.min.js"></script>
	<script src="../vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->

</body>
</html>