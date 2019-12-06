<?php  
require('../config/autoload.php');
$da=new DataAccess();
include("header.php"); 
//include("dbcon.php");
?>
				<i><?php 
				   $name=$_SESSION['name'];
			   		$q="select name from admin_user where u_id = $name";
			   		$info=$da->query($q);
					?>
					<h3>WELCOME</h3>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<?php
			   		echo($info[0]['name']);
                    ?>
				</i>

      <div id="navbar-spy" class="collapse navbar-collapse navbar-responsive-collapse">
                <ul class="nav navbar-nav pull-right">
                    <li class="active">
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
            </div>
        </div>
    </nav>

    <!-- Begin #carousel-section -->
    <section id="carousel-section" class="section-global-wrapper"> 
        <div class="container-fluid-kamn">
            <div class="row">
                <div id="carousel-1" class="carousel slide" data-ride="carousel">

                    <!-- Indicators -->
                    <ol class="carousel-indicators visible-lg">
                        <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-1" data-slide-to="1"></li>
                        <li data-target="#carousel-1" data-slide-to="2"></li>
                    </ol>
        
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <!-- Begin Slide 1 -->
                        <div class="item active">
                            <img src="assets/img/slider/slide10.jpg" height="400" alt="Image of first carousel">
                            <div class="carousel-caption">
                                <h3 class="carousel-title hidden-xs">R-TRACK TEMPLATE</h3>
                                <p class="carousel-body">INFORM NOTIFICATION</p>
                            </div>
                        </div>
                        <!-- End Slide 1 -->

                        <!-- Begin Slide 2 -->
                        <div class="item">
                            <img src="assets/img/slider/slide11.jpg" height="400" alt="Image of second carousel">
                            <div class="carousel-caption">
                                <h3 class="carousel-title hidden-xs">EASY TO CUSTOMIZE</h3>
                                <p class="carousel-body">BEAUTIFUL \ CLEAN \ MINIMAL</p>
                            </div>
                        </div>
                        <!-- End Slide 2 -->

                        <!-- Begin Slide 3 -->
                        <div class="item">
                            <img src="assets/img/slider/slide14.jpg" height="400" alt="Image of third carousel">
                            <div class="carousel-caption">
                                <h3 class="carousel-title hidden-xs">MULTI-PURPOSE TEMPLATE</h3>
                                <p class="carousel-body">BEST \ CREATIVE \ REPORT</p>
                            </div>
                        </div>
                        <!-- End Slide 3 -->
                    </div>
        
                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-1" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-1" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End #carousel-section -->


    <!-- Begin #services-section -->
    <section id="services" class="services-section section-global-wrapper">
        <div class="container">
            <div class="row">
                <div class="services-header">
                    <h3 class="services-header-title">Our Mission</h3>
                    <p class="services-header-body"><em><b>IMAGINATION UNLIMITED</b></em>  </p><hr>
                </div>
				<p class="services-header-body"><em><b>Related Shops</b></em>  </p><hr>
            </div>
      
            <!-- Begin Services Row 1 -->
            <div class="row services-row services-row-head services-row-1">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="services-group wow animated fadeInLeft" data-wow-offset="40">
                        <p class="services-icon"></p>
                        <h4 class="services-title">Moolans Family Mart, Angamaly</h4>
                        <p class="services-body">Address: Moolans Avenue, East Junction, SH 1, Angamaly, Kerala 683572.</p>
                        <p class="services-more">Phone: 079029 55512</p>
                    </div>
                </div>
        
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="services-group wow animated zoomIn" data-wow-offset="40">
                        <p class="services-icon"></p>
                        <h4 class="services-title">Moolans Family Mart, Perumbavoor</h4>
                        <p class="services-body">Address: SH 1, Perumbavoor, Kerala 683542.</p>
                        <p class="services-more">Phone: 079029 55515</p>
                    </div>
                </div>
        
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="services-group wow animated fadeInRight" data-wow-offset="40">
                        <p class="services-icon"></p>
                        <h4 class="services-title">Moolans Family Mart, Kothamangalam</h4>
                        <p class="services-body">Address: State Highway 16, Aluva - Munnar Rd, Thankalam, Kothamangalam, Kerala 686666.</p>
                        <p class="services-more">Phone: 079029 55519</p>
                    </div>        
                </div>
            </div>
            <!-- End Serivces Row 1 -->
      
            <!-- Begin Services Row 2 -->
            <div class="row services-row services-row-tail services-row-2">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="services-group wow animated fadeInLeft" data-wow-offset="40">
                        <p class="services-icon"></p>
                        <h4 class="services-title">Moolans Family Mart, Palluruthy</h4>
                        <p class="services-body">Address: Kacheripady Junction, Aroor - Thoppumpady Rd, Kumblanghi Vazhi, Palluruthy, Kochi, Kerala 682006.</p>
                        <p class="services-more">Phone: 079029 55524</p>
                    </div>
                </div>
        
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="services-group wow animated zoomIn" data-wow-offset="40">
                        <p class="services-icon"></p>
                        <h4 class="services-title">Moolans Hyper Mart, Moolans Avenue T.B. Junction. Angamaly</h4>
                        <p class="services-body">Address: Angamaly - Manjapra Rd, Angamaly, Kerala 683572.</p>
                        <p class="services-more">Phone: 0484 245 3800</p>
                    </div>
                </div>
        
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="services-group wow animated fadeInRight" data-wow-offset="40">
                        <p class="services-icon"></p>
                        <h4 class="services-title">Moolans Family Mart, Kuruppampady</h4>
                        <p class="services-body">Address: Muthukkatt Tower, Police Station Road, Opposite, Private Bus Stand Rd, Kuruppampady, Kerala 683545.</p>
                        <p class="services-more">Phone: 079029 55517</p>
                    </div>
                </div>
            </div>
            <!-- End Serivces Row 2 -->
    
        </div>      
    </section>
    <!-- End #services-section -->


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
