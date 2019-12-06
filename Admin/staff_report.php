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
									<tr><th colspan="6"><h3>STAFF INFORMATION</h3></th></tr>                        
                    <tr>
                        <th>Staff ID</th>
                        <th>Staff Name</th>
                        <th>Staff Address</th>
                        <th>Staff Phone</th>
                        <th>Email</th>
						<th>Staff Date of Join</th>                            
                    </tr>
<?php
    	
 $fields=array('u_id','name','address','phn','email','doj');
    $users=$da->selectAsTable($fields,'admin_user','status=0',null,null,null);
    
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
    
    
