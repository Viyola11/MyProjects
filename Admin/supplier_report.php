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
									<tr><th colspan="5"><h3>SUPPLIER INFORMATION</h3></th></tr>                        
                    <tr>
                        <th>Supplier ID</th>
                        <th>Supplier Name</th>
                        <th>Supplier Address</th>
                        <th>Supplier Phone</th>
                        <th>Email</th>                              
                    </tr>
<?php
       
 $fields=array('sup_id','sup_name','sup_add','sup_phn','sup_email');
    $users=$da->selectAsTable($fields,'admin_supplier','status=0',null,null,null);
    
    echo $users;
?>          
                </table>
				<br><br>
		<input type="button" onclick="printData()" value="print" class='btn btn-success'/>
<nav>
  <ul class="pager">
    <li><a href="../Admin/report.php">Previous Page</a></li>
	</ul>
</nav>
       </div><!-- End row -->
     </div>
    </div><!-- End container -->
    </div><!-- End container_gray_bg -->
	</center>
    
    
