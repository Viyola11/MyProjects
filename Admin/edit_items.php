<!doctype html>
<?php 

 require('../config/autoload.php'); 
include("header.php");

$da=new DataAccess();

$info=$da->getData('*','item_mnge','item_id='.$_GET['item_id']);

$elements=array("item_name"=>$info[0]['item_name']);

$form=new FormAssist($elements,$_POST);

$rules=array("item_name"=>array("required"=>true,"minlength"=>3,"alphaspaceonly"=>true));

$labels=array('item_name'=>"Item Name");

$validator = new FormValidator($rules,$labels);


if(isset($_POST["sub_item"]))
{
if($validator->validate($_POST))
{
$data= array('item_name'=>$_POST['item_name'],
			'status'=>0);

	
	$condition='item_id='.$_GET['item_id'];

    if($da->update($data,'item_mnge',$condition))
    {
        echo "<script> alert('Record updated successfully');</script> ";
		echo"<script> location.replace('view_items.php'); </script>";
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
						<h3>Item Details</h3>
<table>
	<tr><td>Item Name:</td>
		<td><?= $form->textBox('item_name',array('class'=>'form-control')); ?></td>
		<td ><?= $validator->error('item_name'); ?></td>
	</tr>
</table>
<br>
<button type="submit" name="sub_item" class='btn btn-success'>Update</button>
<nav>
  <ul class="pager">
    <li><a href="item.php" style="color: crimson">Previous Page</a></li>
	</ul>
</nav>
<!--<button type="submit" name="sub_rack" >Save & continue</button>-->
</form>
</center>
</div>
</body>
</html>
