<!doctype html>
<?php 

 require('../config/autoload.php'); 
include("header.php");

$cd=date('Y-m-d',time());

$elements=array("reply"=>"");

$form=new FormAssist($elements,$_POST);

$da=new DataAccess();



$rules=array("date_r"=>array(),
			 "reply"=>array());

$labels=array('date_r'=>"Date of Reply",
			  'reply'=>"Reply for ypur complaint");

$validator = new FormValidator($rules,$labels);


if(isset($_POST["comp_box"]))
{
 if($validator->validate($_POST))
 {
  $data= array("date_r"=>$_POST['date_r'],
  			   "reply"=>$_POST['reply'],
			   'st_admin'=>'4');
	 
   //$condition=$_GET['id'];
	 $condition='comp_id='.$_GET['id'];

    if($da->update($data,'complaint_box',$condition))
    		{
        //echo "<script> alert('Reply successfully');</script> ";
		     echo"<script> location.replace('complaint_view.php'); </script>";
    		}
    else
        {
		  echo "<script> alert('complaint reply failed');</script> ";
	    }

   } 
$authKey = "191249AlJenWR7Pws5a4da48b";
//echo "haidfsd";
//Multiple mobiles numbers separated by comma
 $mobileNumber="9946399800";

//Sender ID,While using route4 sender id should be 6 characters long.
$senderId = "102234";

//Your message to send, Add URL encoding here.
$msg="Complaint solved";
$message = urlencode($msg);

//Define route 
$route = "default";
//Prepare you post parameters
$postData = array(
    'authkey' => $authKey,
    'mobiles' => $mobileNumber,
    'message' => $message,
    'sender' => $senderId,
    'route' => $route
);

//API URL
$url="http://api.msg91.com/api/sendhttp.php";

// init the resource
$ch = curl_init();
curl_setopt_array($ch, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $postData
    //,CURLOPT_FOLLOWLOCATION => true
));


//Ignore SSL certificate verification
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);


//get response
$output = curl_exec($ch);

//Print error if any
if(curl_errno($ch))
{
    echo 'error:' . curl_error($ch);
}

curl_close($ch);

echo $output;	
			
	
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
						<h3>COMPLAINT BOX</h3><br>
						 <table align="center">
							<tr><td>Date of Reply:</td>
								<td><input type="" name="date_r" id="date_r" value="<?php echo $cd; ?>" readonly></td>
								<td ><?= $validator->error('date_r'); ?></td>
							</tr>
							<tr><td>Reply for the complaint:</td>
								<td><?= $form->textBox('reply',array('class'=>'form-control')); ?></td>
								<td ><?= $validator->error('reply'); ?></td>
							</tr>
						</table>
						<br>						
						<button type="submit" name="comp_box" class='btn btn-success'>Reply</button>
						</div>
					</div>
				</form>
			  </div>
</center>
</body>
</html>