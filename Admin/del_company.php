<!doctype html>
<?php 

 require('../config/autoload.php'); 
include("header.php");

$da=new DataAccess();

$info=$da->getData('*','company_product','comp_id='.$_GET['comp_id']);

$elements=array("c_name"=>$info[0]['c_name']);

$form=new FormAssist($elements,$_POST);


$rules=array("c_name"=>array("required"=>true,"alphaonly"=>true));

$labels=array('c_name'=>"Company Name");

$validator = new FormValidator($rules,$labels);


if(isset($_POST["sub_company"]))
{
   $data= array('c_name'=>$_POST['c_name'],
			     'status'=>1);
	 	 
	$condition='comp_id='.$_GET['comp_id'];

    if($da->update($data,'company_product',$condition))
    {
        echo "<script> alert('Record deleted successfully');</script> ";
		echo"<script> location.replace('view_company.php'); </script>";
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
						<h3>Company Details</h3>
<table>
	<tr><td>Company Name:</td>
		<td><?= $form->textBox('c_name',array('class'=>'form-control','readonly'=>true)); ?></td>
		<td ><?= $validator->error('c_name'); ?></td>
	</tr>
</table>
<br>
<button type="submit" name="sub_company" class='btn btn-success'>Delete</button>
<nav>
  <ul class="pager">
    <li><a href="company.php" style="color: crimson">Previous Page</a></li>
	</ul>
</nav>
</form>
</center>
</div>
</body>
</html>
