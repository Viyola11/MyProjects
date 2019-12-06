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
									<tr><th colspan="2"><h3>PAYMENT METHOD INFORMATION</h3></th></tr>                       
                    <tr>
                        <th>Rent Method ID</th>
                        <th>Rent Method Type</th>                                
                    </tr>
<?php
    
    //$actions=array('edit'=>array('label'=>'Edit','link'=>'edit_payment.php','params'=>array('rent_id'=>'rent_id'),'attributes'=>array('class'=>'btn btn-success')),
   // 'delete'=>array('label'=>'Delete','link'=>'edit_payment.php','params'=>array('rent_id'=>'rent_id'),'attributes'=>array('class'=>'btn btn-success')));

    //$config=array('srno'=>true,'hiddenfields'=>array('rent_id'));

   
 $fields=array('rent_id','rent_type');
    $users=$da->selectAsTable($fields,'rent_mode','status=0',null,null,null);
    
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
    
    
