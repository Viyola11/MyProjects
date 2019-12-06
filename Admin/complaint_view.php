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
                       <h3>COMPLAINT BOX</h3>
                                <div class="panel-body table-responsive">
                                    <table  border=1>                       
                    <tr>
						<th>Complaint ID</th>
                        <th>Staff ID</th>
						<th>Date of Submission</th>
                        <th>Status</th>                                 
                    </tr>
<?php
    
    $actions=array('edit'=>array('label'=>'VIEW','link'=>'Admin_complaints.php','params'=>array('comp_id'=>'comp_id'),'attributes'=>array('class'=>'btn btn-success')));
   // 'delete'=>array('label'=>'Delete','link'=>'edit_staff.php','params'=>array('u_id'=>'u_id'),'attributes'=>array('class'=>'btn btn-success'))

    $config=array('srno'=>true,
        'hiddenfields'=>array('comp_id'));

   
 	$fields=array('comp_id','staff_id','date_c');
										
    

    $users=$da->selectAsTable($fields,'complaint_box','st_user=1',null,$actions,$config);
    
    echo $users;
?>          
                </table>
	<nav>
  <ul class="pager">
    <li><a href="dashboard.php" style="color: crimson" >Previous Page</a></li>
	</ul>
</nav>
       </div><!-- End row -->
     </div>
    </div><!-- End container -->
    </div><!-- End container_gray_bg -->
	</center>
    
    
