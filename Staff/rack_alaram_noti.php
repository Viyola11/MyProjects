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
	$q="select * from admin_user where u_id = $name";
	$info=$da->query($q);
	$b=$info[0]['u_id'];
	$cd=date('Y-m-d',time());


?>

<body>
<center>
	<aside class="right-side">

        <!-- Main content -->
          <div class="row" style="margin-bottom:5px;">
			 <form action="" method="POST" >
				<div class="row">
                    <div class="col-md-12">
						<h3><u>RACK NOTIFICATION</u></h3><br><br>							
						 <?php 
				   			//$name=$_SESSION['name'];
			   				$q="select * from admin_supplier,admin_rack where admin_rack.sup_id=admin_supplier.sup_id";
						   	//$q="SELECT * FROM admin_rack WHERE DATEDIFF($cd,renew_date) < 5";
			 				$info=$da->query($q);
						   	$arrlength=count($info);
							?>
							<table cellspacing="10" cellpadding="10" border="1" align="center" id="printDoc">
							<tr><th colspan="6"><h3>RACK NOTIFICATION REPORT</h3></th></tr>
							<tr><th>Re-new Date</th><th>Supplier ID</th><th>Supplier Name</th><th>Supplier Phone</th><th>Amount</th><th>Rack Name</th></tr>
							<?php
			 				   $i=0;
								 while($i<count($info))
			 						{
											  $r=$info[$i]["renew_date"];
											  $startTimeStamp = strtotime("$r");
											  $endTimeStamp = strtotime("$cd");
											  $timeDiff = abs($endTimeStamp - $startTimeStamp);
											  $numberDays = $timeDiff/86400;
											  $numberDays = intval($numberDays);
									          	if($numberDays<=2 and $numberDays>=1)
												{
													?>
								
													<tr>
													<td><b><?php echo $info[$i]["renew_date"]; ?></b></td>
														
													<td> <?php echo $info[$i]["sup_id"]; ?></td>
												  	
												  	<td> <?php echo $info[$i]["sup_name"]; ?></td>
														
													<td> <?php echo $info[$i]["sup_phn"]; ?></td>
												  	
												  	<td><i> <?php echo  $info[$i]["amt"]; ?></i></td>
												  
												   	<td><b> <?php echo  $info[$i]["rack_name"]; ?></b></td>
																							  	
											 		</tr>
													<?php
												}
											$i++;
										
									}
								?>
                    		
						</table>
						<br><br>
		<input type="button" onclick="printData()" value="print" class='btn btn-success'/>
						<nav>
  							<ul class="pager">
							<li><a href="notification.php" style="color: black">BACK</a></li>
							</ul>
						</nav>
							
					</div>
					</div>
				</form>
			  </div>
</center>
</body>
</html>