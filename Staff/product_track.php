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

  	//$name=$_SESSION['name'];
	//$q="select u_id from admin_user where u_id = $name";
	//$info=$da->query($q);
	//$b=$info[0]['u_id'];
//$name=$_SESSION['name'];

?>		

<body>
<center>
	<aside class="right-side">

        <!-- Main content -->
          <div class="row" style="margin-bottom:5px;">
			 <form action="" method="POST" >
				<div class="row">
                    <div class="col-md-12">
						<h3><u>Product Search</u></h3><br><br>
						 <table>
							<tr><td>Item Name:</td>
							<td><input type="text" name="item_name" required></td>
							</tr>
						</table>
						<br>
						<button type="submit" name="pro_search" class="btn btn-success">Search</button><br><br>
					</div>
					</div>
	<?php
	if(isset($_POST["pro_search"]))
		{
		  $item=$_POST['item_name'];
		  $q="select * from product_mnge,item_mnge,admin_rack,company_product where product_mnge.item_id = item_mnge.item_id and product_mnge.rack_id = admin_rack.rack_id and product_mnge.comp_id = company_product.comp_id and item_mnge.item_name='$item'";
		  $info=$da->query($q);
		  $arrlength=count($info);
		  ?>
		  <table cellspacing="2" cellpadding="3" border="2" align="center" id="printDoc">
			<tr><th colspan="3"><h3>PRODUCT SERACH REPORT</h3></th></tr>
			  <tr><th colspan="3"><h3>Serach Item:<?php echo $item?></h3></th></tr>
		  <tr><th>Product Name</th><th>Rack Name</th><th>Company Name</th></tr>
			<?php
			 	$i=0;
			 	 while($i<$arrlength)
			 		{
					  ?>
						<tr><td><?php echo $info[$i]["pro_name"]; ?></td>
							<td><?php echo $info[$i]["rack_name"]; ?></td>
							<td><?php echo  $info[$i]["c_name"]; ?></td>
												  	
						</tr>
						<?php
							$i++;
					}
		  ?>
		</table>
		<?php
	}
  ?>
				 <br><br>
		<input type="button" onclick="printData()" value="print Details if any" class='btn btn-success'/>
	
				</form>
			  </div>
		<nav>
  			<ul class="pager">
				<li><a href="services.php" style="color:black">BACK</a></li>
			</ul>
		</nav>
</center>
</body>
</html>