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

require('../config/autoload.php');
$da=new DataAccess();
include("header.php"); 

?>
	
<aside class="right-side">
	<center>
        <div class="row">
             <div class="col-md-12">
                <div class="panel">
                       <div class="panel-body table-responsive">
                                    <table  border=1 id="printDoc">  
									<tr><th colspan="5"><h3>PRODUCT INFORMATION</h3></th></tr> 
                    <tr>
                        <th>Product ID</th>
                        <th>Product Name</th>
                        <th>Item Name</th>
                        <th>Rack Name</th>
						<th>Company Name</th>                                
                    </tr>
<?php
    
   // $actions=array('edit'=>array('label'=>'Edit','link'=>'edit_product.php','params'=>array('pro_id'=>'pro_id'),'attributes'=>array('class'=>'btn btn-success')),
   // 'delete'=>array('label'=>'Delete','link'=>'edit_product.php','params'=>array('pro_id'=>'pro_id'),'attributes'=>array('class'=>'btn btn-success')));

    //$config=array('srno'=>true,'hiddenfields'=>array('pro_id'));
	   
  $join=array('item_mnge as im'=>array('im.item_id=pro.item_id','join'),
			 'admin_rack as ar'=>array('ar.rack_id=pro.rack_id','join'),
			 'company_product as cp'=>array('cp.comp_id=pro.comp_id','join'));

  //$join=array('admin_rack as ar'=>array('ar.rack_id=pro.rack_id','join'));
   
 	$fields=array('pro_id','pro_name','item_name','rack_name','c_name');
    $users=$da->selectAsTable($fields,'product_mnge as pro',1,$join,null,null);
    
    echo $users;
?>          
                </table>
			<br><br>
		<input type="button" onclick="printData()" value="print" class='btn btn-success'/>
<nav>
  <ul class="pager">
    <li><a href="report.php">Previous Page</a></li>
</ul>
</nav>				
		</div><!-- End row -->
     </div>
    </div><!-- End container -->
    </div><!-- End container_gray_bg -->
	</center>
    
    
