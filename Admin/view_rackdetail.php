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
                       <h3>Rack Details Table</h3>
                                <div class="panel-body table-responsive">
                                    <table  border=1>                       
                    <tr>
                        <th>Rack ID</th>
                        <th>Rack Name</th>
                        <th>Supply Type Name</th>
                        <th>Supplier Name</th>
						<th>From Date</th>
                        <th>To Date</th>
                        <th>Amount</th>
                        <th>Rent Type</th>
						<th>Renew Date</th>
                        <th>Description</th>
						<th>Edit</th>                                 
                    </tr>
<?php
    
    $actions=array('edit'=>array('label'=>'Edit','link'=>'edit_rackdetail.php','params'=>array('rack_id'=>'rack_id'),'attributes'=>array('class'=>'btn btn-success')));
    //'delete'=>array('label'=>'Delete','link'=>'del_rackdetail.php','params'=>array('rack_id'=>'rack_id'),'attributes'=>array('class'=>'btn btn-success')));

    $config=array(
        'srno'=>true,
        'hiddenfields'=>array('rack_id'));
	   
 //$join=array('type_mgne as tm'=>array('tm.type_id=admin_rack.type_id','join'));
										
  //$join=array('admin_supplier as ads'=>array('ads.sup_id=admin_rack.sup_id','join'));

  $join=array('rent_mode as rm'=>array('rm.rent_id=admin_rack.rent_id','join'),
			 'admin_supplier as ads'=>array('ads.sup_id=admin_rack.sup_id','join'),
			 'type_mgne as tm'=>array('tm.type_id=admin_rack.type_id','join'));

 $fields=array('rack_id','rack_name','type_name','sup_name','from_date','to_date','amt','rent_type','renew_date','description');
    $users=$da->selectAsTable($fields,'admin_rack',1,$join,$actions,$config);
    
    echo $users;
?>          
                </table>
<nav>
  <ul class="pager">
    <li><a href="rack.php" style="color: crimson">Previous Page</a></li>
	</ul>
</nav>
       </div><!-- End row -->
     </div>
    </div><!-- End container -->
    </div><!-- End container_gray_bg -->
	</center>
    
    
