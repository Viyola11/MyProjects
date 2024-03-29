<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Admin side</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="description" content="Developed By M Abdur Rokib Promy">
    <meta name="keywords" content="Admin, Bootstrap 3, Template, Theme, Responsive">
    <!-- bootstrap 3.0.2 -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="css/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="css/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- fullCalendar -->
    <!-- <link href="css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" /> -->
    <!-- Daterange picker -->
    <link href="css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- iCheck for checkboxes and radio inputs -->
    <link href="css/iCheck/all.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <!-- <link href="css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" /> -->
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <!-- Theme style -->
    <link href="css/style.css" rel="stylesheet" type="text/css" />



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
          <![endif]-->

          <style type="text/css">

          </style>
      </head>
      <body class="skin-black">


        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="index.html" class="logo">
              ADMIN
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
              <!-- Sidebar toggle button-->
              <!--<a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </a>-->

              <div class="navbar-right">
                <ul class="nav navbar-nav">
                  <!-- Messages: style can be found in dropdown.less-->
                  <!-- User Account: style can be found in dropdown.less -->
                <!--<li class="dropdown user user-menu">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-user"></i>
                    <span>VIYOLA JOY <i class="caret"></i></span>
                  </a>  -->
                  
                      <li class="divider">
					  <li><a href="../Login/change_pswd.php"><i class="fa fa-user"></i>&nbsp;&nbsp;Change Password</a></li>

                      <li><a href="../Login/login.php"><i class="fa fa-globe"></i>&nbsp;&nbsp;Logout</a></li>
                      </li>
                      </ul>
                    </li>
                  </ul>
                </div>
            </nav>
			
        </header>



        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="img/26115.jpg" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info"><br>
                            <p>Hello, Viyola</p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                   <!--  <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>   -->
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
					<br>
                    <ul class="sidebar-menu">
                        <li>
                            <a href="dashboard.php">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
						
                        <li>
							<a href="staff.php">
                                <i class="fa fa-gavel"></i> <span>Manage Staff</span>
                            </a>
                        </li>
						
						 <li>
                            <a href="supplier.php">
                                <i class="fa fa-gavel"></i> <span>Manage Suppliers</span>
                            </a>
                        </li>

                        <li>
                            <a href="rack.php">
                                <i class="fa fa-globe"></i> <span>Manage Racks</span>
                            </a>
                        </li>
						
						<li>
                            <a href="rack_supply.php">
                                <i class="fa fa-gavel"></i> <span>Manage Rack Supply Mode</span>
                            </a>
                        </li>
						
						<li>
                            <a href="rent.php">
                                <i class="fa fa-gavel"></i> <span>Manage Rent pay Mode</span>
                            </a>
                        </li>
					
                        <li>
                            <a href="item.php">
                                <i class="fa fa-globe"></i> <span>Manage Items</span>
                            </a>
                        </li>
						
						<li>
                            <a href="company.php">
                                <i class="fa fa-gavel"></i> <span>Manage Company</span>
                            </a>
                        </li>
						
						<li>
                            <a href="product.php">
                                <i class="fa fa-gavel"></i> <span>Manage Products</span>
                            </a>
						</li>
						
												
						<li>
                            <a href="complaint_view.php">
                                <i class="fa fa-glass"></i> <span>View Complaints</span>
                            </a>
                        </li>	
						
						 <li>
                            <a href="report.php">
                                <i class="fa fa-globe"></i> <span>Reports</span>
                            </a>
                        </li>
	                </ul>
	                </section>
                <!-- /.sidebar -->
            </aside>
