<!doctype html>
<?php 

 require('../config/autoload.php'); 
include("header.php");

$da=new DataAccess();

$info=$da->getData('*','rent_mode','rent_id='.$_GET['rent_id']);

$elements=array("rent_type"=>$info[0]['rent_type']);

$form=new FormAssist($elements,$_POST);

$rules=array("rent_type"=>array("required"=>true,"minlength"=>3,"maxlength"=>30,"alphaonly"=>true));

$labels=array('rent_type'=>"Type Name");

$validator = new FormValidator($rules,$labels);


if(isset($_POST["sub_rent_type"]))
{
$data= array('status'=>1);

	$condition='rent_id='.$_GET['rent_id'];

    if($da->update($data,'rent_mode',$condition))
    {
        echo "<script> alert('Record Deleted successfully');</script> ";
		echo"<script> location.replace('view_payment.php'); </script>";
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
						<h3>Rent Payment Method</h3>
<table>
	<tr><td>Rent Mode:</td>
		<td><?= $form->textBox('rent_type',array('class'=>'form-control','readonly'=>true)); ?></td>
		<td ><?= $validator->error('rent_type'); ?></td>
	</tr>
</table>
<br>
<button type="submit" name="sub_rent_type" class='btn btn-success'>Delete</button>
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
