<?php  
require('../config/autoload.php');
 $da=new DataAccess();
include("header.php"); 
//nclude("dbcon.php");
?>

      <div id="navbar-spy" class="collapse navbar-collapse navbar-responsive-collapse">
                <ul class="nav navbar-nav pull-right">
                    <li>
                        <a href="staff_client.php">Home</a>
                    </li>
                    <li class="active">
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
        <img src="assets/img/slider/slide1.jpg" class="blog-post" alt="Feature-img" align="right" width="100%"> 
    </div>

    <div id="banners"></div>
    <div class="container">   
        <div class="row">
            <div class="side-left col-sm-4 col-md-4">

                <h3 class="lead">  About our Firm : </h3><hr>

                <p>We aim to create value to our customers through optimization of our products & services to suit their taste & needs. The various awards & recognitions received throughout the years summarize the expertise and developments of Moolans Group. Research and formulation in the field of spices & foods along with its preservation as well as marketing the products, have earned Dr. Varghese Moolan, the group foundation-chairman, a doctorate of philosophy in the field of marketing management with relevance of food. The company markets its products independently as well as in co-operation with its sister concerns, associates and collaborators all over the world.</p>
                <a href="#anchor1"> Our Firm's History</a><br>
                <a href="#anchor2"> Philosophy</a><br>
                <a href="#anchor3">More Info:</a><br>
                <br>
                <h4>SPICE THE GLOBE FOR A BETTER AND TASTIER TOMORROW</h4><hr>
                The retail chain markets of Moolans group under the name and style of “Vijay Foods” began its first super market in Al-khobar, Saudi Arabia in 1985, succeeded by Elite Super Market in Dammam, Saudi Arabia during 1994. Nicee Studio & Colorlab, another venture of Moolans group was started during 1993 (opp. Seiko building) at the core of Dammam City, Saudi Arabia. The first super market in India with the innovative idea of Margin-free marketing started in 1998 at Angamaly, Kerala.
            </div>
            <div class="col-sm-8 col-md-8">
                <h3 class="lead"id="anchor1"> Our Firm's History </h3><hr>
                <p>
                    Dr. Varghese Moolan, the founder of Moolans Group, opened his first warehouse at Al-khobar Saudi
					Arabia during 1987 striking a Partnership with Mr. Khalid Al-Saleh, and started the distribution of grocery products in the Eastern Province of Saudi Arabia, followed by the formation of an Exporting Company in India under the name and style of Moolans International, a partnership firm, inducting his parents as partners, and executed the first export of grocery products to Saudi Arabia during May 1987. The second shipment was executed during 1989.
             		 As a feather on the crown of these business activities, a charitable organization, ‘Varghese Moolan Foundation’ has been set up, extending various charitable projects to the needy. Marking the 30th year of Excellence, Moolans Group, in association with Apollo Hospital Group, Chennai, launched the “Touch A Heart” project, under which 60 poor paediatric heart patients were given full treatment including heart surgery during early 2015. More over a house was fully built for an under-privileged family; 25 poor brides were helped substantially for getting wed-locked and 1,000 spice & rice-kits were distributed among the people below poverty line.
					Dr. Varghese Moolan, the founder of Moolans group, believes that it is the duty of every human being to be thankful to God by sharing a part of the blessings HE has bestowed upon us, with the less privileged and Moolans Group is committed to distribute a certain percentage of profit every year for charitable projects.
                </p>
                <h3 class="lead"id="anchor2">Our Philosophy:</h3>
                <p>
					Moolans group, with its cutting edges in the thrust area of manufacturing various spice products and foodstuff, specifically transcend the nature’s goodness to the whole world thru the selection of quality raw materials, thorough cleaning and grading, traditional processing, modern packaging and precise marketing. The products includes but not limited to Spices & Spice Powders, Curry Powders & Masalas, Agricultural products, Nuts & Dry fruits, Rice & Rice products, Grains & Cereals, Chips & Nibbles, Pickles & chutneys, Jams & Marmalades, instant food Products, Noodles, general food products, Pulses & Lentils, Beverages & Food Supplements, Ayurvedic Products & massage oils, vegetable oils, spice oils, Essential oils, oleoresins, fresh frozen foods, Kitchenware & General Utensils, Toiletries & cleaning chemicals.

					The retail chain markets of Moolans group under the name and style of “Vijay Foods” began its first super market in Al-khobar, Saudi Arabia in 1985, succeeded by Elite Super Market in Dammam, Saudi Arabia during 1994. Nicee Studio & Colorlab, another venture of Moolans group was started during 1993 (opp. Seiko building) at the core of Dammam City, Saudi Arabia. The first super market in India with the innovative idea of Margin-free marketing started in 1998 at Angamaly, Kerala.

					Dr. Varghese Moolan, the founder of Moolans Group, opened his first warehouse at Al-khobar Saudi
					Arabia during 1987 striking a Partnership with Mr. Khalid Al-Saleh, and started the distribution of grocery products in the Eastern Province of Saudi Arabia, followed by the formation of an Exporting Company in India under the name and style of Moolans International, a partnership firm, inducting his parents as partners, and executed the first export of grocery products to Saudi Arabia during May 1987. The second shipment was executed during 1989.

					The distribution net-work developed in Saudi Arabia, by recruiting more and more employees including his brothers, and extending the marketing network to the whole of Saudi Arabia and to the neighboring gulf countries. <br>
                </p>

                <h3 class="lead"id="anchor3">More Info:</h3>
                <blockquote>
                    <em>Moolans Exports India Pvt. Ltd.
						Moolans Avenue, P. O. Box-95,
						Angamaly, Cochin – 683 572, Kerala, India.
						Phone: +91484- 2694594, 8547500001, 0484-2694567
						Mobile: 92495 00001, 92495 00004
						Fax 0484-2694584</em>
                </blockquote>
                <p class="block-author"> Our first Invention</p>
                <br><br>
                <p>Moolans Hyper Mart
				   	TB Junction
					Angamaly
					Tel: 2453800
					Moolans Estate
					1/469, Vathacad
					Thuravoor, Angamaly
					Kerala</p></p>
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
     <script type="text/javascript">$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});</script>

</body>
</html>
