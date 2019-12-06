<!doctype html>
<?php 

 require('../config/autoload.php'); 
include("header.php");

$da=new DataAccess();

$info=$da->getData('*','type_mgne','type_id='.$_GET['type_id']);

$elements=array("type_name"=>$info[0]['type_name']);

$form=new FormAssist($elements,$_POST);

$rules=array("type_name"=>array("required"=>true,"minlength"=>3,"maxlength"<=30,"alphaonly"=>true));

$labels=array('type_name'=>"Type Name");

$validator = new FormValidator($rules,$labels);


if(isset($_POST["sub_type"]))
{
if($validator->validate($_POST))
{
$data= array('type_name'=>$_POST['type_name']);

	
	$condition='type_id='.$_GET['type_id'];

    if($da->update($data,'type_mgne',$condition))
    {
        echo "<script> alert('Record updated successfully');</script> ";
		echo"<script> location.replace('view_racksupply.php'); </script>";
    }
    else
        {
		  echo "<script> alert('Updation failed');</script> ";
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
						<h3>Rack Supply Mode</h3>
<table>
	<tr><td>Type Method:</td>
		<td><?= $form->textBox('type_name',array('class'=>'form-control')); ?></td>
		<td ><?= $validator->error('type_name'); ?></td>
	</tr>
</table>
<br>
<button type="submit" name="sub_type" class='btn btn-success'>Update</button>
<nav>
  <ul class="pager">
    <li><a href="rack_supply.php" style="color: crimson">Previous Page</a></li>
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
