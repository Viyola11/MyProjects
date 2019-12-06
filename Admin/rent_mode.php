<!doctype html>
<?php 

 require('../config/autoload.php'); 
include("header.php");


$elements=array("rent_type"=>"");

$form=new FormAssist($elements,$_POST);

$da=new DataAccess();

$rules=array("rent_type"=>array("required"=>true,"minlength"=>3,"maxlength"=>30,"alphaonly"=>true,"unique"=>array("field"=>"rent_type","table"=>"rent_mode")));

$labels=array('rent_type'=>"Type Name");

$validator = new FormValidator($rules,$labels);


if(isset($_POST["sub_rent_type"]))
{
if($validator->validate($_POST))
{
$data= array('rent_type'=>$_POST['rent_type'],
			 'status'=>0);
	if($da->insert($data,"rent_mode"))
	   {
        echo "<script> alert('New record created successfully');</script> ";
		echo"<script> location.replace('view_payment.php'); </script>";
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
						<h3>Rent Payment Method</h3>
<table>
	<tr><td>Rent Mode:</td>
		<td><?= $form->textBox('rent_type',array('class'=>'form-control')); ?></td>
		<td ><?= $validator->error('rent_type'); ?></td>
	</tr>
</table>
<br>
<button type="submit" name="sub_rent_type" class='btn btn-success'>Insert</button>
<nav>
  <ul class="pager">
    <li><a href="rent.php" style="color: crimson">Previous Page</a></li>
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
