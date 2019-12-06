<html>
<script>
function printData()
{
   var divToPrint=document.getElementById("printDoc");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}
</script>
<?php 

include("h_sub.php");

//$info=$da->getData('*','complaint_box','comp_id='.$_GET['comp_id']);

  	$name=$_SESSION['name'];
	$q="select u_id from admin_user where u_id = $name";
	$info=$da->query($q);
	$b=$info[0]['u_id'];

?>

<body>
<center>
	<aside class="right-side">

        <!-- Main content -->
          <div class="row" style="margin-bottom:5px;">
			 <form action="" method="POST" >
				<div class="row">
                    <div class="col-md-12">
						<h3><u>COMPLAINT REPLY</u></h3><br><br>
						 <?php 
				   			//$name=$_SESSION['name'];
			   				$q="select * from complaint_box where st_admin='4' and staff_id=$b";
			 				$info=$da->query($q);
							$arrlength=count($info);
							?>
							<table cellspacing="2" cellpadding="3" border="2" align="center" id="printDoc">
							<tr><th colspan="6"><h3>COMPLAINT REPLY REPORT</h3></th></tr>
			  				<tr><th colspan="6"><h5>Staff ID:<?php echo $name?></h5></th></tr>
							<tr><th>Date of submission</th><th>Complaint</th><th>Date of reply</th><th>Reply</th></tr>
							 <?php
			 				   $i=0;
			 					while($i<count($info))
			 						{
											  ?>
											  <tr>	<td> <?php echo $info[$i]["date_c"]; ?></td>
												  	
												  	<td> <?php echo $info[$i]["comp"]; ?></td>
												  
												    <td> <?php echo $info[$i]["date_r"]; ?></td>
												  	
												  	<td><i> <?php echo  $info[$i]["reply"]; ?></i></td>
												  	
											 </tr>
											<?php
											$i++;
									}
                    		?>
						</table>
						<br><br>
		<input type="button" onclick="printData()" value="print" class='btn btn-success'/>
						<nav>
  							<ul class="pager">
							<li><a href="notification.php" style="color:black">BACK</a></li>
							</ul>
						</nav>
					</div>
					</div>
				</form>
			  </div>
</center>
</body>
</html>