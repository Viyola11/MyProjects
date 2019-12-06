<?php  
//require('../config/autoload.php'); 
include("h_sub.php"); 
//include("header.php"); 
	$name=$_SESSION['name'];
	$q="select * from admin_user where u_id = $name";
	$info=$da->query($q);
	$b=$info[0]['u_id'];
	$cd=date('Y-m-d',time());


$elements=array("comp"=>"");

$form=new FormAssist($elements,$_POST);

//$da=new DataAccess();

$rules=array("staff_id"=>array(),
			 "date_c"=>array(),
			 "comp"=>array("required"=>true));

$labels=array('comp'=>"Complaint");

$validator = new FormValidator($rules,$labels);


if(isset($_POST["comp_box"]))
{
	
if($validator->validate($_POST))
{
	
$data= array('staff_id'=>$_POST['staff_id'],
			'date_c'=>$_POST['date_c'],
			'comp'=>$_POST['comp'],
			'st_user'=>'1',
			'st_admin'=>'3');
	
	if($da->insert($data,"complaint_box"))
    {
        echo "<script> alert('complaint filed successfully');</script> ";
		echo"<script> location.replace('services.php'); </script>";
    }
    else
        {
		  echo "<script> alert('complaint filed failed');</script> ";
	    }
   }
 }
?>

<div class="row">
            <div class="col-md-6 bg">

                <div class="hedding">

                   <b><i>Complaint box</i></b> 

                </div>
				  <form role="form" method="post">
                    <div class="form-group">
						<table cellpadding="2" cellspacing="5">
							<tr><td>Staff ID:</td>
								<td><input type="text" name="staff_id" id="staff_id" value="<?php 
									if (isset($_SESSION['name']))
									{
										echo $b;
									}?>" readonly></td>
								<td><?= $validator->error('staff_id'); ?></td>
							</tr>
							<tr><td>Submission Date:</td>
								<td><input type="" name="date_c" id="date_c" value="<?php 
									if (isset($_SESSION['name']))
									{
										echo $cd;
									}?>" readonly></td>
								<td ><?= $validator->error('date_c'); ?></td>
							</tr>
							<tr><td>Complaint:</td>
								<td><?= $form->textBox('comp',array('class'=>'form-control')); ?></td>
								<td ><?= $validator->error('comp'); ?></td>
							</tr>
						</table>
						<br><button type="submit" name="comp_box" class="btn btn-success">Send</button>
						<nav>
  							<ul class="pager">
							<li><a href="services.php" style="color: black">BACK</a></li>
							</ul>
						</nav>
                    </div>
					<div class="col-md-6 bg">
                        <img class="d-block w-100" alt="Carousel Bootstrap First" src="images/business.svg">
                    </div>

        </div>

    </div>

<?php  
include("f_sub.php"); 
?>

