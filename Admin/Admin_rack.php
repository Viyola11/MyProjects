<!doctype html>
<?php 

 require('../config/autoload.php'); 
include("header.php");


$elements=array("rack_name"=>"","type_id"=>"","sup_id"=>"","from_date"=>"","to_date"=>"","amt"=>"","rent_id"=>"","renew_date"=>"","description"=>"");

$form=new FormAssist($elements,$_POST);

$da=new DataAccess();

$rules=array("rack_name"=>array("required"=>true,"unique"=>array("field"=>"rack_name","table"=>"admin_rack")),
			 "type_id"=>array("required"=>true),
			 "sup_id"=>array("required"=>true),
			 "from_date"=>array("required"=>true,'date'=>array('from'=>'-5 days 12 am','to'=>'today')),
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
				'from_date'=>$_POST['from_date'],
				'to_date'=>$_POST['to_date'],
				'amt'=>$_POST['amt'],
				'rent_id'=>$_POST['rent_id'],
				'renew_date'=>$_POST['renew_date'],
				'description'=>$_POST['description'],
			     'st_info'=>1,
			     'status'=>0);
	if($da->insert($data,"admin_rack"))
	 {
	  echo "<script> alert('New record created successfully');</script> ";
	  echo"<script> location.replace('view_rackdetail.php'); </script>";
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
						<h3>Rack Details</h3>
<table>
	<tr><td>Rack Name:</td>
		<td><?= $form->textBox('rack_name',array('class'=>'form-control')); ?></td>
		<td ><?= $validator->error('rack_name'); ?></td>
	</tr>
	<tr><td>Type of Rack supply:</td>
		<?php $options = $da->createOptions('type_name','type_id','type_mgne'); ?>
		<td><?= $form->dropDownList('type_id',array('class'=>'form-control'),$options); ?></td>
		<td ><?= $validator->error('type_id'); ?></td>
	</tr>
	<tr><td>Supplier ID:</td>
		<?php $options = $da->createOptions('sup_name','sup_id','admin_supplier'); ?>
		<td><?= $form->dropDownList('sup_id',array('class'=>'form-control'),$options); ?></td>
		<td ><?= $validator->error('sup_id'); ?></td>
	</tr>
	<tr><td>From Date:</td>
		<td><?= $form->inputBox('from_date',array('class'=>'form-control'),"date"); ?></td>
		<td ><?= $validator->error('from_date'); ?></td>
	</tr>
	<tr><td>To Date:</td>
		<td><?= $form->inputBox('to_date',array('class'=>'form-control'),"date"); ?></td>
		<td ><?= $validator->error('to_date'); ?></td>
	</tr>
	<tr><td>Amount of Rack:</td>
		<td><?= $form->textBox('amt',array('class'=>'form-control')); ?></td>
		<td ><?= $validator->error('amt'); ?></td>
	</tr>
	<tr><td>Rent Payment Mode:</td>
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
<button type="submit" name="sub_rack" class='btn btn-success'>Insert</button>
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
