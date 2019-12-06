<!doctype html>
<?php 

 require('../config/autoload.php'); 
include("header.php");

$da=new DataAccess();

$info=$da->getData('*','product_mnge','pro_id='.$_GET['pro_id']);

$elements=array("pro_name"=>$info[0]['pro_name'],"item_id"=>$info[0]['item_id'],"rack_id"=>$info[0]['rack_id'],"comp_id"=>$info[0]['comp_id']);

$form=new FormAssist($elements,$_POST);

$rules=array("pro_name"=>array("required"=>true,"minlength"=>3,"alphaspaceonly"=>true),
			 "item_id"=>array("required"=>true),
			 "rack_id"=>array("required"=>true),
			 "comp_id"=>array("required"=>true));

$labels=array('pro_name'=>"Product name",
			 'item_id'=>"Item ID",
			 'rack_id'=>"Rack ID",
			 'comp_id'=>"Company ID");

$validator = new FormValidator($rules,$labels);


if(isset($_POST["sub_product"]))
{
 if($validator->validate($_POST))
 {
   $data= array('pro_name'=>$_POST['pro_name'],
			     'item_id'=>$_POST['item_id'],
			     'rack_id'=>$_POST['rack_id'],
			     'comp_id'=>$_POST['comp_id'],
			     'status'=>0);

	 
	$condition='pro_id='.$_GET['pro_id'];

    if($da->update($data,'product_mnge',$condition))
    {
        echo "<script> alert('Record updated successfully');</script> ";
		echo"<script> location.replace('view_product.php'); </script>";
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
						<h3>Product Details</h3>
<table>
	<tr><td>Product Name:</td>
		<td><?= $form->textBox('pro_name',array('class'=>'form-control')); ?></td>
		<td ><?= $validator->error('pro_name'); ?></td>
	</tr>
	<tr><td>Item ID:</td>
		<?php $options = $da->createOptions('item_name','item_id','item_mnge'); ?>
		<td><?= $form->dropDownList('item_id',array('class'=>'form-control'),$options); ?></td>
		<td ><?= $validator->error('item_id'); ?></td>
	</tr>
	<tr><td>Rack ID:</td>
		<?php $options = $da->createOptions('rack_name','rack_id','admin_rack'); ?>
		<td><?= $form->dropDownList('rack_id',array('class'=>'form-control'),$options); ?></td>
		<td ><?= $validator->error('rack_id'); ?></td>
	</tr>
	<tr><td>Company Name:</td>
		<?php $options = $da->createOptions('c_name','comp_id','company_product'); ?>
		<td><?= $form->dropDownList('comp_id',array('class'=>'form-control'),$options); ?></td>
		<td ><?= $validator->error('comp_id'); ?></td>
	</tr>
</table>
<br>
<button type="submit" name="sub_product" class='btn btn-success'>Update</button>
<nav>
  <ul class="pager">
    <li><a href="product.php" style="color: crimson">Previous Page</a></li>
	</ul>
</nav>
<!--<button type="submit" name="sub_product" >Save & continue</button>-->
</form>
</center>
</div>
</body>
</html>
