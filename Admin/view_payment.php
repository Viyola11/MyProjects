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
                       <h3>Payment Method Details Table</h3>
                                <div class="panel-body table-responsive">
                                    <table  border=1>                       
                    <tr>
                        <th>Rent Method ID</th>
                        <th>Rent Method Type</th>
						<th>Edit/Delete</th>                                 
                    </tr>
<?php
    
    $actions=array('edit'=>array('label'=>'Edit','link'=>'edit_payment.php','params'=>array('rent_id'=>'rent_id'),'attributes'=>array('class'=>'btn btn-success')),
    'delete'=>array('label'=>'Delete','link'=>'del_payment.php','params'=>array('rent_id'=>'rent_id'),'attributes'=>array('class'=>'btn btn-success')));

    $config=array(
        'srno'=>true,
        'hiddenfields'=>array('rent_id')
        
        
    );

   
 $fields=array('rent_id','rent_type');
    $users=$da->selectAsTable($fields,'rent_mode','status=0',null,$actions,$config);
    
    echo $users;
?>          
                </table>
<nav>
  <ul class="pager">
    <li><a href="rent.php" style="color: crimson">Previous Page</a></li>
	</ul>
</nav>
       </div><!-- End row -->
     </div>
    </div><!-- End container -->
    </div><!-- End container_gray_bg -->
	</center>
    
    
