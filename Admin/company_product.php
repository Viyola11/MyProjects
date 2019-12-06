<!doctype html>
<?php 

 require('../config/autoload.php'); 
include("header.php");


$elements=array("c_name"=>"");

$form=new FormAssist($elements,$_POST);

$da=new DataAccess();

$rules=array("c_name"=>array("required"=>true,"alphaonly"=>true,"unique"=>array("field"=>"c_name","table"=>"company_product")));

$labels=array('c_name'=>"Company Name");

$validator = new FormValidator($rules,$labels);


if(isset($_POST["sub_company"]))
{
 if($validator->validate($_POST))
 {
   $data= array('c_name'=>$_POST['c_name'],
			   'status'=>0);
	if($da->insert($data,"company_product"))
	 {
	  echo "<script> alert('New record created successfully');</script> ";
	  echo"<script> location.replace('view_company.php'); </script>";
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
						<h3>Company Details</h3>
<table>
	<tr><td>Company Name:</td>
		<td><?= $form->textBox('c_name',array('class'=>'form-control')); ?></td>
		<td ><?= $validator->error('c_name'); ?></td>
	</tr>
</table>
<br>
<button type="submit" name="sub_company" class='btn btn-success'>Insert</button>
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
