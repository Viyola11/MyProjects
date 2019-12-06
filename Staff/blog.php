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
                    <li class="active">
                        <a href="blog.php">Blog</a>
                    </li>
                    <li>
                        <a href="team.php">Team</a>
                    </li>
                    <li>
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
    <div id="banners"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-9"> 
                    <div class="blog-post">
                        <h1 class="blog-title">
                            <i class="fa fa-file-text"></i>
                            Kitchenware and Gifts Division of Moolans Hyper Mart, Angmaly Inaguration
                        </h1>
                        <br>
                        <img src="assets/img/slider/blog3.jpg" alt="Feature-img" align="right" width="100%" class="blog-image">
                        <br>
                        <p>
                            Kitchenware and Gifts Division of Moolans Hyper Mart, Angmaly inaugurated by Sanusha and Sanoop.
                        </p>
                        <div>
                            <span class="badge">Posted 2012-08-02 20:47:04</span>
						</div>
                    </div>
                    <hr>

                    <div class="blog-post">
                        <h1 class="blog-title">
                            <i class="fa fa-file"></i>
                            Siddique-Lal Program-2015
                        </h1>
                        <img src="assets/img/slider/blog2.jpg" alt="Feature-img" align="right" width="100%" class="blog-image"> 
                        <br>
                        <p>
                            Siddique-Lal Program-2015 team in New York after performing on 16 stages across USA & Canada (organized by Global.
                        </p>
                        <div>
                            <span class="badge">Posted 2015-10-2 20:47:04</span>
                        </div>  
                    </div>   
                    <hr>

                    <div class="blog-post">
                        <h1 class="blog-title">
                            <i class="fa fa-cloud"></i>
                            Free Pediatric Cardiac Medical Camp at CMS College, Kottayam
                        </h1>
                        <img src="assets/img/slider/blog1.jpg" alt="Feature-img" align="right" width="100%" class="blog-image">
                        <p>
                            Cardiac Medical Camp at CMS College, Kottayam was organized on Sunday Varghese Moolan Foundation, Kottayam Collectorate, Amrita Hospital and Ardrada Fellowship, for children. Minister Thiruvanchoor Radhakrishnan, Kottayam Collector Sri UV Jose, Kottayam SP, Varghese Moolan, Rema George and Prof. PC Varghese took the initiative of the Camp. 24 poor Children were selected for heart surgery at Amrita Hospital of which expense will be met by Varghese Moolan Foundation as part of the Touch-a-heart project Phase-II
                        </p>
                        <div>
                            <span class="badge">Posted 2015-12-02 02:47:04</span>         
                        </div>
                    </div>
                    <hr>

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
