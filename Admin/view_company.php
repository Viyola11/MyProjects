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
                       <h3>Comapny Details Table</h3>
                                <div class="panel-body table-responsive">
                                    <table  border=1>                       
                    <tr>
                        <th>Company ID</th>
                        <th>Company Name</th>
						<th>Edit/Delete</th>                                 
                    </tr>
<?php
    
    $actions=array('edit'=>array('label'=>'Edit','link'=>'edit_company.php','params'=>array('comp_id'=>'comp_id'),'attributes'=>array('class'=>'btn btn-success')),
    'delete'=>array('label'=>'Delete','link'=>'del_company.php','params'=>array('comp_id'=>'comp_id'),'attributes'=>array('class'=>'btn btn-success')));

    $config=array(
        'srno'=>true,
        'hiddenfields'=>array('comp_id'));
	   
  //$join=array('admin_rack as ar'=>array('ar.rack_id=pro.rack_id','join'));
   
 	$fields=array('comp_id','c_name');
    $users=$da->selectAsTable($fields,'company_product','status=0',null,$actions,$config);
    
    echo $users;
?>          
                </table>
<nav>
  <ul class="pager">
    <li><a href="company.php" style="color:crimson">Previous Page</a></li>
	</ul>
</nav>
       </div><!-- End row -->
     </div>
    </div><!-- End container -->
    </div><!-- End container_gray_bg -->
	</center>
    
    
