<!doctype html>
<?php 

 require('../config/autoload.php'); 
include("header.php");


$elements=array("name"=>"","address"=>"","phn"=>"","pwd"=>"","c_pwd"=>"","email"=>"","doj"=>"");

$form=new FormAssist($elements,$_POST);

$da=new DataAccess();

$rules=array("name"=>array("required"=>true,"maxlength"=>30,"alphaspaceonly"=>true),
			 "address"=>array("required"=>true,"alphaspaceonly"=>true),
			 "phn"=>array("required"=>true,"minlength"=>10,"maxlength"=>13),
			 "pwd"=>array("required"=>true,"minlength"=>3),
			 "c_pwd"=>array("required"=>true,"minlength"=>3,"compare"=>array("comparewith"=>"pwd","operator"=>"=")),	 "email"=>array("required"=>true,"minlength"=>3,"maxlength"=>30,"email"=>true,"unique"=>array("field"=>"email","table"=>"admin_user")),
			 "doj"=>array("required"=>true,'date'=>array('from'=>'-5 days 12 am','to'=>'today')));

$labels=array('name'=>"Staff Name ",
			  'address'=>"Staff Address",
			  'phn'=>"Staff Phone Number",
			  'pwd'=>"Password",
			  'c_pwd'=>"Re-Enter Password",
			  'email'=>"Staff E-mail",
			  'doj'=>"Staff DOJ");

$validator = new FormValidator($rules,$labels);


if(isset($_POST["sub_staff"]))
{
if($validator->validate($_POST))
{
$data= array('name'=>$_POST['name'],
			'address'=>$_POST['address'],
			'phn'=>$_POST['phn'],
			'pwd'=>$_POST['pwd'],
			'email'=>$_POST['email'],
			'doj'=>$_POST['doj'],
			'status'=>0);
	
	if($da->insert($data,"admin_user"))
    {
        echo "<script> alert('New record created successfully');</script> ";
		echo"<script> location.replace('view_staff.php'); </script>";
    }
    else
        {
		  echo "<script> alert('Registration failed');</script> ";
	    }
   }
 }
?>

<html>
<body>
<center>
		
	<aside class="right-side">

        <!-- Main content -->
<div class="row" style="margin-bottom:5px;">
 <form action="" method="POST" >
	<div class="row">
                    <div class="col-md-6">
						<h3>Staff Details</h3>
<table>
	<tr><td>Staff Name:</td>
		<td><?= $form->textBox('name',array('class'=>'form-control')); ?></td>
		<td ><?= $validator->error('name'); ?></td>
	</tr>
	<tr><td>Staff Address:</td>
		<td><?= $form->textBox('address',array('class'=>'form-control')); ?></td>
		<td ><?= $validator->error('address'); ?></td>
	</tr>
	<tr><td>Staff Phone Number:</td>
		<td><?= $form->textBox('phn',array('class'=>'form-control')); ?></td>
		<td ><?= $validator->error('phn'); ?></td>
	</tr>
	<tr><td>Staff Password:</td>
		<td><?= $form->passwordBox('pwd',array('class'=>'form-control')); ?></td>
		<td ><?= $validator->error('pwd'); ?></td>
	</tr>
	<tr><td>Confirm Password:</td>
		<td><?= $form->passwordBox('c_pwd',array('class'=>'form-control')); ?></td>
		<td ><?= $validator->error('c_pwd'); ?></td>
	</tr>
		<tr><td>Staff E-mail:</td>
		<td><?= $form->textBox('email',array('class'=>'form-control')); ?></td>
		<td ><?= $validator->error('email'); ?></td>
	</tr>
	<tr><td>Staff Date of Join:</td>
		<td><?= $form->inputBox('doj',array('class'=>'form-control'),"date"); ?></td>
		<td ><?= $validator->error('doj'); ?></td>
	</tr>
</table>
<br>						
<button type="submit" name="sub_staff" class='btn btn-success'>Insert</button>
<nav>
  <ul class="pager">
    <li><a href="staff.php" style="color: crimson">Previous Page</a></li>
	</ul>
</nav>
<!--<button type="submit" name="sub_rent_type" >Save & continue</button>-->
</form>
</center>
	       </div>
      <!-- row end -->
<!-- Main content end -->
</body>
</html>
