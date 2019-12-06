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
									<tr><th colspan="2"><h3>ITEM INFORMATION</h3></th></tr>                       
                    <tr>
                        <th>Item ID</th>
                        <th>Item Name</th>                           
                    </tr>
<?php
    
   // $actions=array('edit'=>array('label'=>'Edit','link'=>'edit_items.php','params'=>array('item_id'=>'item_id'),'attributes'=>array('class'=>'btn btn-success')),
   // 'delete'=>array('label'=>'Delete','link'=>'edit_items.php','params'=>array('item_id'=>'item_id'),'attributes'=>array('class'=>'btn btn-success')));

   // $config=array('srno'=>true,'hiddenfields'=>array('item_id'));

   
 $fields=array('item_id','item_name');
    $users=$da->selectAsTable($fields,'item_mnge','status=0',null,null,null);
    
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
    
    
