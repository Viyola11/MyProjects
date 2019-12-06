<!doctype html>
<html lang="en">
<head>

        <!-- meta data & title -->
        <meta charset="utf-8">
        <title>M-office</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300">
        <link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
        <link href="http://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        
    </head>
<body>

    <!-- Header -->
        
    <nav id="navbar-section" class="navbar navbar-default navbar-static-top navbar-sticky" role="navigation">
        <div class="container">
        
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand wow fadeInDownBig" href="staff_client.php"><img class="office-logo" src="assets/img/slider/Office.png" alt="M-Office"></a>      
            </div>
     <!-- End Header -->
<?php  
 require('../config/autoload.php');
 $da=new DataAccess();
//include("header.php"); 
?>
      <div id="navbar-spy" class="collapse navbar-collapse navbar-responsive-collapse">
                <ul class="nav navbar-nav pull-right">
                    <li>
                        <a href="staff_client.php">Home</a>
                    </li>
                    <li>
                        <a href="about.php">About</a>
                    </li>
					<li class="active">
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

    <div class="row container-kamn">
        <img src="assets/img/slider/slide9.jpg" class="blog-post" alt="Feature-img" align="right" width="100%"> 
    </div>

    <div id="banners"></div>
    <div class="container">   
        <div class="row">
            <div class="side-left col-sm-4 col-md-4">

                <h3 class="lead">  SERVICES PROVIDED: </h3><hr>

                <a href="notification.php"> NOTIFICATIONS</a><br>
                <a href="complaint.php"> COMPLAINT BOX</a><br>
				<a href="product_track.php"> PRODUCT TRACK</a><br><br>
            </div>
            <div class="col-sm-8 col-md-8">