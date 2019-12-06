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
                    <li class="active">
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
            <div class="col-md-6">
                <div class="blockquote-box blockquote-info animated wow fadeInLeft clearfix">
                    <div class="square pull-left">
                        <img src="assets/img/team/member2.png" alt="Feature-img" height="80" width="100">
                    </div>
                    <h4>
                        Ruby Mathay
                    </h4>
                    <p>
                        Web Developer , Technext
                    </p>
                </div>
                <div class="blockquote-box blockquote-primary animated wow fadeInLeft clearfix">
                    <div class="square pull-left">
                        <img src="assets/img/team/member1.png" alt="Feature-img" height="80" width="100">
                    </div>
                    <h4>
                        Krishnageethi T.U.
                    </h4>
                    <p>
                        Software Developer , Technext
                    </p>
                </div>
                <div class="blockquote-box blockquote-success animated wow fadeInLeft clearfix">
                    <div class="square pull-left">
                        <img src="assets/img/team/member2.png" alt="Feature-img" height="80" width="100">
                    </div>
                    <h4>
                        Binu Baby
                    </h4>
                    <p>
                        App Developer , Technext
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="blockquote-box blockquote-danger animated wow fadeInRight clearfix">
                    <div class="square pull-left">
                        <img src="assets/img/team/member3.png" alt="Feature-img" height="80" width="100">
                    </div>
                    <h4>
                        Renju Sajan
                    </h4>
                    <p>
                        Android Developer , Technext
                    </p>
                </div>
                <div class="blockquote-box blockquote-warning animated wow fadeInRight clearfix">
                    <div class="square pull-left">
                        <img src="assets/img/team/member2.png" alt="Feature-img" height="80" width="100">
                    </div>
                    <h4>
                        Ignatious Raju
                    </h4>
                    <p>
                        iOS Developer , Technext
                    </p>
                </div>
                <div class="blockquote-box animated wow fadeInRight clearfix">
                    <div class="square pull-left">
                        <img src="assets/img/team/member1.png" alt="Feature-img" height="80" width="100">
                    </div>
                    <h4>
                        Akhil Babu
                    </h4>
                    <p>
                        Web Developer , Technext
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--End Main Container -->


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
