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
                       <h3>Staff Details Table</h3>
                                <div class="panel-body table-responsive">
                                    <table  border=1>                       
                    <tr>
                        <th>Staff ID</th>
                        <th>Staff Name</th>
                        <th>Staff Address</th>
                        <th>Staff Phone</th>
					    <th>Staff Password</th>
                        <th>Email</th>
						<th>Staff Date of Join</th>
                        <th>Edit/Delete</th>                                 
                    </tr>
<?php
    
    $actions=array('edit'=>array('label'=>'Edit','link'=>'edit_staff.php','params'=>array('u_id'=>'u_id'),'attributes'=>array('class'=>'btn btn-success')),
    'delete'=>array('label'=>'Delete','link'=>'del_staff.php','params'=>array('u_id'=>'u_id'),'attributes'=>array('class'=>'btn btn-success')));

    $config=array(
        'srno'=>true,
        'hiddenfields'=>array('u_id')
        
        
    );

   
 $fields=array('u_id','name','address','phn','pwd','email','doj');
    $users=$da->selectAsTable($fields,'admin_user','status=0',null,$actions,$config);
    
    echo $users;
?>          
                </table>
<nav>
  <ul class="pager">
    <li><a href="staff.php" style="color: crimson">Previous Page</a></li>
	</ul>
</nav>
       </div><!-- End row -->
     </div>
    </div><!-- End container -->
    </div><!-- End container_gray_bg -->
	</center>
    
    
