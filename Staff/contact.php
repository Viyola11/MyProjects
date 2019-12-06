<?php  
require('../config/autoload.php');
$da=new DataAccess();
include("header.php"); 
//include("dbcon.php");
?>

      <div id="navbar-spy" class="collapse navbar-collapse navbar-responsive-collapse">
                <ul class="nav navbar-nav pull-right">
                    <li>
                        <a href="staff_client.php">Home</a>
                    </li>
                    <li>
                        <a href="about.php">About</a>
                    </li>
					<li>
                        <a href="services.php">Services</a>
                    </li>
                    <li>
                        <a href="blog.php">Blog</a>
                    </li>
                    <li>
                        <a href="team.php">Team</a>
                    </li>
                    <li class="active">
                        <a href="contact.php"><span>Contact</span></a>
                    </li>
					<li>
                        <a href="../Login/change_pswd_staff.php"><span>Change Password</span></a>
                    </li>
				    <li>
                        <a href="../Login/login.php">Log Out</a>
                    </li>
                </ul>  
		  		<i><?php 
				   $name=$_SESSION['name'];
			   		$q="select name from admin_user where u_id = $name";
			   		$info=$da->query($q);
			   		echo($info[0]['name']);
                    ?>
					</i>
            </div>
        </div>
    </nav>



        <!-- Main Container -->

        <div class="container-fluid-kamn">
            <div class="row">
                <div>
                    <iframe width="100%" height="450px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3618.727010735933!2d91.837871!3d24.907291700000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1404919738144"></iframe>
                    <br />
                </div>
                <div class="col-lg-4 col-lg-offset-1">
                    <h4>Find us at:</h4>
                    <p class="block-author"> VIYOLA JOY & Associates</p>
                    <p>Via ANGAMALY KERALA PIN: 683574 INDIA </p>

                    <p>Phone: +91-9946399800</p>
                    <p>Fax: 1.800.245.248</p>
                    <em class="block-author">Email: zerarossviyola@gmail.com </em> <br>
                    
                </div>
                
            </div>
        </div>    
            
    <!--End Main Container -->


    <!-- Footer -->
    <?php
	include("footer.php");
    ?>

    
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>

</body>
</html>
