<!doctype html>
<?php 

 require('../config/autoload.php'); 
include("header.php");

$da=new DataAccess();

$info=$da->getData('*','admin_rack','rack_id='.$_GET['rack_id']);

$elements=array("rack_name"=>$info[0]['rack_name'],"type_id"=>$info[0]['type_id'],"sup_id"=>$info[0]['sup_id'],"to_date"=>$info[0]['to_date'],"amt"=>$info[0]['amt'],"rent_id"=>$info[0]['rent_id'],"renew_date"=>$info[0]['renew_date'],"description"=>$info[0]['description']);

$form=new FormAssist($elements,$_POST);

$rules=array("rack_name"=>array("required"=>true),
			 "type_id"=>array("required"=>true),
			 "sup_id"=>array("required"=>true),
			 "to_date"=>array("required"=>true),
			 "amt"=>array("required"=>true,"integeronly"=>true),
			 "rent_id"=>array("required"=>true),
			 "renew_date"=>array("required"=>true),
			 "description"=>array("required"=>true,"minlength"=>5));

$labels=array('rack_name'=>"Rcak Name",
			  'type_id'=>"From where you get racks?",
			  'sup_id'=>"Supplier ID",
			  "from_date"=>"From date",
			  "to_date"=>"To date",
			  "amt"=>"Amount of rack",
			  "rent_id"=>"Rent payable method",
			  "renew_date"=>"Renewal date",
			  "description"=>"If any");

$validator = new FormValidator($rules,$labels);


if(isset($_POST["sub_rack"]))
{
 if($validator->validate($_POST))
 {
   $data= array('rack_name'=>$_POST['rack_name'],
				'type_id'=>$_POST['type_id'],
				'sup_id'=>$_POST['sup_id'],
				'to_date'=>$_POST['to_date'],
				'amt'=>$_POST['amt'],
				'rent_id'=>$_POST['rent_id'],
				'renew_date'=>$_POST['renew_date'],
				'description'=>$_POST['description'],
			     'st_info'=>1,
			     'status'=>0);

	 	 
	$condition='rack_id='.$_GET['rack_id'];

    if($da->update($data,'admin_rack',$condition))
    {
        echo "<script> alert('Record updated successfully');</script> ";
		echo"<script> location.replace('view_rackdetail.php'); </script>";
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
						<h3>Rack Details</h3>
<table>
	<tr><td>Rack Name:</td>
		<td><?= $form->textBox('rack_name',array('class'=>'form-control')); ?></td>
		<td ><?= $validator->error('rack_name'); ?></td>
	</tr>
	<tr><td>Type of Rack mode:</td>
		<?php $options = $da->createOptions('type_name','type_id','type_mgne'); ?>
		<td><?= $form->dropDownList('type_id',array('class'=>'form-control'),$options); ?></td>
		<td ><?= $validator->error('type_id'); ?></td>
	</tr>
	<tr><td>Supplier ID:</td>
		<?php $options = $da->createOptions('sup_name','sup_id','admin_supplier'); ?>
		<td><?= $form->dropDownList('sup_id',array('class'=>'form-control'),$options); ?></td>
		<td ><?= $validator->error('sup_id'); ?></td>
	</tr>
	<tr><td>To Date:</td>
		<td><?= $form->inputBox('to_date',array('class'=>'form-control'),"date"); ?></td>
		<td ><?= $validator->error('to_date'); ?></td>
	</tr>
	<tr><td>Amount of Rack:</td>
		<td><?= $form->textBox('amt',array('class'=>'form-control')); ?></td>
		<td ><?= $validator->error('amt'); ?></td>
	</tr>
	<tr><td>Rent Mode:</td>
		<?php $options = $da->createOptions('rent_type','rent_id','rent_mode'); ?>
		<td><?= $form->dropDownList('rent_id',array('class'=>'form-control'),$options); ?></td>
		<td ><?= $validator->error('rent_id'); ?></td>
	</tr>
	<tr><td>Renew Date:</td>
		<td><?= $form->inputBox('renew_date',array('class'=>'form-control'),"date"); ?></td>
		<td ><?= $validator->error('renew_date'); ?></td>
	</tr>
	<tr><td>Description:</td>
		<td><?= $form->textBox('description',array('class'=>'form-control')); ?></td>
		<td ><?= $validator->error('description'); ?></td>
	</tr>
</table>
<br>
<button type="submit" name="sub_rack" class='btn btn-success'>Update</button>
<nav>
  <ul class="pager">
    <li><a href="rack.php" style="color: crimson">Previous Page</a></li>
	</ul>
</nav>
</form>
</center>
</div>
</body>
</html>
