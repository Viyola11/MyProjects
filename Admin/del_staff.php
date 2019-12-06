<!doctype html>
<?php 


require('../config/autoload.php');
include("header.php"); 


$da=new DataAccess();

$info=$da->getData('*','admin_user','u_id='.$_GET['u_id']);

$elements=array("name"=>$info[0]['name'],"address"=>$info[0]['address'],"phn"=>$info[0]['phn'],"pwd"=>$info[0]['pwd'],"c_pwd"=>$info[0]['pwd'],"email"=>$info[0]['email'],"doj"=>$info[0]['doj']);

$form=new FormAssist($elements,$_POST);

$rules=array("name"=>array("required"=>true,"maxlength"=>30,"alphaspaceonly"=>true),
			 "address"=>array("required"=>true,"alphaspaceonly"=>true),
			 "phn"=>array("required"=>true,"minlength"=>10,"maxlength"=>13),
			 "pwd"=>array("required"=>true,"minlength"=>3,"maxlength"=>30),
			 "c_pwd"=>array("required"=>true,"minlength"=>3,"compare"=>array("comparewith"=>"pwd","operator"=>"=")),		 "email"=>array("required"=>true,"minlength"=>3,"maxlength"=>30,"email"=>true,"unique"=>array("field"=>"email","table"=>"admin_user")),
			 "doj"=>array("required"=>true,'date'=>array('from'=>'-5 days 12 am','to'=>'today')));

$labels=array('name'=>"Enter Staff Name ",
			  "address"=>"Enter Staff Address",
			  'phn'=>"Enter Staff Phone Number",
			  'pwd'=>"Enter Password",
			  'c_pwd'=>"Re-Enter Password",
			  'email'=>"Enter Staff E-mail",
			  'doj'=>"Enter Staff DOJ");

$validator = new FormValidator($rules,$labels);


if(isset($_POST["del_staff"]))
{

$data= array('status'=>1);
	
	  $condition='u_id='.$_GET['u_id'];

    if($da->update($data,'admin_user',$condition))
    {
        echo "<script> alert('Record deleted successfully');</script> ";
		echo"<script> location.replace('view_staff.php'); </script>";
    }
    else
        {
		  echo "<script> alert('Deletion failed');</script> ";
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
		<td><?= $form->textBox('name',array('class'=>'form-control','readonly'=>true)); ?></td>
		<td ><?= $validator->error('name'); ?></td>
	</tr>
	<tr><td>Staff Address:</td>
		<td><?= $form->textBox('address',array('class'=>'form-control','readonly'=>true)); ?></td>
		<td ><?= $validator->error('address'); ?></td>
	</tr>
	<tr><td>Staff Phone Number:</td>
		<td><?= $form->textBox('phn',array('class'=>'form-control','readonly'=>true)); ?></td>
		<td ><?= $validator->error('phn'); ?></td>
	</tr>

		<tr><td>Staff E-mail:</td>
		<td><?= $form->textBox('email',array('class'=>'form-control','readonly'=>true)); ?></td>
		<td ><?= $validator->error('email'); ?></td>
	</tr>
	<tr><td>Staff Date of Join:</td>
		<td><?= $form->inputBox('doj',array('class'=>'form-control','readonly'=>true),"date"); ?></td>
		<td ><?= $validator->error('doj'); ?></td>
	</tr>
</table>
<br>						
<button type="submit" name="del_staff" class='btn btn-success'>Delete</button>
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
