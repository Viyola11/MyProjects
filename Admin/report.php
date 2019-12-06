<!doctype html>
<?php 

 require('../config/autoload.php'); 
include("header.php");
	 ?>
<html>
<center>
<nav>
  <h3>REPORT GENERATION</h3>
    <ul class="pager">
		<center>
		<table>
        <tr><td><li><a href="staff_report.php" style="color:red">STAFF REPORT</a></li></td>
			<td><li><a href="supplier_report.php" style="color:red">SUPPLIER REPORT</a></li></td>
		</tr>
		
		<tr><td><li><a href="rack_report.php" style="color:red">RACK REPORT</a></li></td>
			<td><li><a href="supply_report.php" style="color:red">RACK SUPPLY REPORT</a></li></td>
		</tr>
		
		<tr><td><li><a href="payment_report.php" style="color:red">PAYMENT REPORT</a></li></td>
			<td><li><a href="item_report.php" style="color:red">ITEM REPORT</a></li></td>
		</tr>
		
		<tr><td><li><a href="company_report.php" style="color:red">COMPANY REPORT</a></li></td>
			<td><li><a href="product_report.php" style="color:red">PRODUCT REPORT</a></li></td>
		</tr>	
		</table>
		</center>
    </ul>
</nav>
<nav>
  <ul class="pager">
    <li><a href="../Admin/dashboard.php">Previous Page</a></li>
	</ul>
</nav>
</center>
</html>


