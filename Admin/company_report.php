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
										<tr><th colspan="2"><h3>COMPANY INFORMATION</h3></th></tr>
                    <tr>
                        <th>Company ID</th>
                        <th>Company Name</th>                                 
                    </tr>
<?php
    
    //$actions=array('edit'=>array('label'=>'Edit','link'=>'edit_company.php','params'=>array('comp_id'=>'comp_id'),'attributes'=>array('class'=>'btn btn-success')),
   // 'delete'=>array('label'=>'Delete','link'=>'edit_company.php','params'=>array('comp_id'=>'comp_id'),'attributes'=>array('class'=>'btn btn-success')));

    //$config=array('srno'=>true,'hiddenfields'=>array('comp_id'));
	   
  //$join=array('admin_rack as ar'=>array('ar.rack_id=pro.rack_id','join'));
   
 	$fields=array('comp_id','c_name');
    $users=$da->selectAsTable($fields,'company_product','status=0',null,null,null);
    
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
	</html>
    
