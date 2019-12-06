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
                       <h3>Rack Supply Details Table</h3>
                                <div class="panel-body table-responsive">
                                    <table  border=1>                       
                    <tr>
                        <th>Type ID</th>
                        <th>Type Name</th>
						<th>Edit/Delete</th>                                 
                    </tr>
<?php
    
    $actions=array('edit'=>array('label'=>'Edit','link'=>'edit_racksupply.php','params'=>array('type_id'=>'type_id'),'attributes'=>array('class'=>'btn btn-success')),
    'delete'=>array('label'=>'Delete','link'=>'del_racksupply.php','params'=>array('type_id'=>'type_id'),'attributes'=>array('class'=>'btn btn-success')));

    $config=array(
        'srno'=>true,
        'hiddenfields'=>array('type_id')
        
        
    );

   
 $fields=array('type_id','type_name');
    $users=$da->selectAsTable($fields,'type_mgne','status=0',null,$actions,$config);
    
    echo $users;
?>          
                </table>
<nav>
  <ul class="pager">
    <li><a href="rack_supply.php" style="color: crimson">Previous Page</a></li>
	</ul>
</nav>
       </div><!-- End row -->
     </div>
    </div><!-- End container -->
    </div><!-- End container_gray_bg -->
	</center>
    
    
