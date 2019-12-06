<!doctype html>
<?php 

 require('../config/autoload.php'); 
include("header.php");

$da=new DataAccess();

$info=$da->getData('*','admin_supplier','sup_id='.$_GET['sup_id']);

$elements=array("sup_name"=>$info[0]['sup_name'],"sup_add"=>$info[0]['sup_add'],"sup_phn"=>$info[0]['sup_phn'],"sup_email"=>$info[0]['sup_email']);

$form=new FormAssist($elements,$_POST);

$rules=array("sup_name"=>array("required"=>true,"minlength"=>3,"maxlength"=>15,"alphaonly"=>true),
			 "sup_add"=>array("required"=>true,"minlength"=>3,"maxlength"=>30,"alphaspaceonly"=>true),
			 "sup_phn"=>array("required"=>true,"minlength"=>10,"maxlength"=>10,"integeronly"=>true),
			 "sup_email"=>array("required"=>true,"minlength"=>3,"maxlength"=>30,"email"=>true));

$labels=array('sup_name'=>"Supplier Name",
			  'sup_add'=>"Supplier Address",
			  "sup_phn"=>"Supplier Phone number",
			  "sup_email"=>"Supplier Email");

$validator = new FormValidator($rules,$labels);


if(isset($_POST["del_sup"]))
{
   $data= array('status'=>1);

	$condition='sup_id='.$_GET['sup_id'];

    if($da->update($data,'admin_supplier',$condition))
    {
		echo "<script> alert('Record deleted successfully');</script> ";
        echo"<script> location.replace('view_supplier.php'); </script>";
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
						<h3>Supplier Details</h3>
<table>
	<tr><td>Supplier Name:</td>
		<td><?= $form->textBox('sup_name',array('class'=>'form-control','readonly'=>true)); ?></td>
		<td ><?= $validator->error('sup_name'); ?></td>
	</tr>
	<tr><td>Supplier Address:</td>
		<td><?= $form->textBox('sup_add',array('class'=>'form-control','readonly'=>true)); ?></td>
		<td ><?= $validator->error('sup_add'); ?></td>
	</tr>
	<tr><td>Supplier Phone :</td>
		<td><?= $form->textBox('sup_phn',array('class'=>'form-control','readonly'=>true)); ?></td>
		<td ><?= $validator->error('sup_phn'); ?></td>
	</tr>
	<tr><td>Supplier E-mail:</td>
		<td><?= $form->textBox('sup_email',array('class'=>'form-control','readonly'=>true)); ?></td>
		<td ><?= $validator->error('sup_email'); ?></td>
	</tr>
</table>
<br>
<button type="submit" name="del_sup" class='btn btn-success'>Delete</button>
<nav>
  <ul class="pager">
    <li><a href="supplier.php" style="color: crimson">Previous Page</a></li>
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
