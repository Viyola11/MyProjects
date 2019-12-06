<!doctype html>
<?php 

 require('../config/autoload.php'); 
include("header.php");

$da=new DataAccess();

//$info=$da->getData('*','complaint_box','comp_id='.$_GET['comp_id']);

$a=$_GET['comp_id'];

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
						<h3>COMPLAINT BOX</h3><br><br>
						 <?php 
				   			//$name=$_SESSION['name'];
			   				$q="select * from complaint_box where st_user='1' and comp_id=$a";
			 				$info=$da->query($q);
							$arrlength=count($info);
							?>
							<table cellspacing="5" cellpadding="5">
							 <?php
			 				   $i=0;
			 					while($i<count($info))
			 						{
											  echo "<br/>";
											  echo $info[$i]["staff_id"];echo " ";
										      echo $info[$i]["date_c"]; echo "<br/>";
											  ?><b><?php echo  $info[$i]["comp"];echo " "; ?></b>
											<?php
											$i++;
								}
								$data= array('st_user'=>'2');
								$condition='comp_id='.$a;

    					if($da->update($data,'complaint_box',$condition))
    {
       // echo "<script> alert('Record updated successfully');</script> ";
		//echo"<script> location.replace('complai.php'); </script>";
    }
    else
        {
		  echo "<script> alert('Updation failed');</script> ";
	    }

                    		?>
						<br><br>
						
						<nav>
  							<ul class="pager">
							<li><a href="reply_comp.php? id=<?= $info[0]["comp_id"]?>" style="color: crimson">REPLY</a></li>
								<!--<li><a href="reply_comp.php">REPLY</a></li> -->
							<li><a href="complaint_view.php" style="color: crimson">BACK</a></li>
							</ul>
						</nav>
					</div>
					</div>
				</form>
			  </div>
</center>
</body>
</html>