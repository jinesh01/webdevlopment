	<?php
$conn = mysqli_connect("localhost","root","","car_rental");
$query ="select *  from product";
$result = mysqli_query($conn,$query);

?>
	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/elements/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Car Rentals</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<!-- <link rel="stylesheet" href="css/nice-select.css">			 -->
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>

			   <header id="header" id="home">
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href=""><img src="img/logo.png" height = "90px" width= "160px" alt="" title="" /></a>

				       </div>

				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="car.php">Home</a></li>
				          <li><a href="about.html">About</a></li>
				          <li><a href="cars_data.php">Cars</a></li>
				          <li><a href="service.html">Service</a></li>
				          <li><a href="team.html">Team</a></li>	 
				           <!-- <li><a href="blog-home.html">Blog</a></li>	 --> 
				          <li><a href="contact.html">Contact</a></li>
				          <li><a href="login.php">Logout</a></li>	
				          <!-- <li><button class="btn btn-primary">Rent Car</button></li> -->
				      <!--     <a href="#" class="primary-btn text-uppercase">Rent Car Now</a> -->
				          <!-- <li class="menu-has-children"><a href="">Pages</a> -->
				            <ul>
				              <li><a href="blog-single.html">Blog Single</a></li>
				              <li><a href="elements.html">Elements</a></li>
				            </ul>
				          </li>			          
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			    
			  </header><!-- #header -->

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Cars Detail			
							</h1>	
							<!-- <p class="text-white link-nav"><a href="car.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="car_data.php"> Cars</a></p> -->
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start model Area -->
			<!-- <section class="model-area section-gap" id="cars">
				<div class="container">
					<div class="row d-flex justify-content-center pb-40">
						<div class="col-md-8 pb-40 header-text">
							<h1 class="text-center pb-10">Desired Car Model For You</h1>
							<p class="text-center">
								Who are in extremely love with eco friendly system.
							</p>
						</div>
					</div> -->	
					<div>
					<table border="2" align="center" width="600" height="200">
	<tr>
		<td align="center"><b><font face="verdana" color="blue" size="5"> ID </font></b></td>
		<td align="center"><b><font face="verdana" color="blue" size="5">Car Name</font></b></td>
		<td align="center"><b><font face="verdana" color="blue" size="5">Rent/Day</font></b></td>
		<td align="center"><b><font face="verdana" color="blue" size="5">Capacity</font></b></td>
	</tr>
	<?php
	while($row = mysqli_fetch_array($result))
{
	?>
	
	<tr>
	<td align="center"><b><font face="verdana" color="orange" size="4"><?php echo $row['id']; ?></font></b></td>
	<td align="center"><b><font face="verdana" color="orange" size="4"><?php echo $row['car_name']; ?></font></b></td>
	<td align="center"><b><font face="verdana" color="orange" size="4"><?php echo $row['rent_per_day']; ?></font></b></td>
	<td align="center"><b><font face="verdana" color="orange" size="4"><?php echo $row['capacity']; ?></font></b></td>
</tr>
<?php
}
?>
</table>			
</div>
					<!-- <div class="active-model-carusel">
						<div class="row align-items-center single-model item">
							<div class="col-lg-6 model-left">
								<div class="title justify-content-between d-flex">
									<h4 class="mt-20">Audi 3000 msi</h4>
									<h2>$149<span>/day</span></h2>
								</div>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								</p>
								<p>
									Capacity         : 04 Person <br>
									Doors            : 04 <br>
									Air Condition    : Dual Zone <br>
									Transmission     : Automatic
								</p>
								<a class="text-uppercase primary-btn" href="#">Book This Car Now</a>
							</div>
							<div class="col-lg-6 model-right">
								<img class="img-fluid" src="img/car.jpg" alt="">
							</div>
						</div>
						<div class="row align-items-center single-model item">
							<div class="col-lg-6 model-left">
								<div class="title justify-content-between d-flex">
									<h4 class="mt-20">Audi 3000 msi</h4>
									<h2>$149<span>/day</span></h2>
								</div>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								</p>
								<p>
									Capacity         : 04 Person <br>
									Doors            : 04 <br>
									Air Condition    : Dual Zone <br>
									Transmission     : Automatic
								</p>
								<a class="text-uppercase primary-btn" href="#">Book This Car Now</a>
							</div>
							<div class="col-lg-6 model-right">
								<img class="img-fluid" src="img/car.jpg" alt="">
							</div>
						</div>
						<div class="row align-items-center single-model item">
							<div class="col-lg-6 model-left">
								<div class="title justify-content-between d-flex">
									<h4 class="mt-20">Audi 3000 msi</h4>
									<h2>$149<span>/day</span></h2>
								</div>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								</p>
								<p>
									Capacity         : 04 Person <br>
									Doors            : 04 <br>
									Air Condition    : Dual Zone <br>
									Transmission     : Automatic
								</p>
								<a class="text-uppercase primary-btn" href="#">Book This Car Now</a>
							</div>
							<div class="col-lg-6 model-right">
								<img class="img-fluid" src="img/car.jpg" alt="">
							</div>
						</div>												
					</div>
				</div>	 -->
			<!-- </section> -->
			<!-- End model Area -->			

			<!-- Start callaction Area -->
			<!--  <section class="callaction-area relative section-gap">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-10">
							<h1 class="text-white">Experience Great Support</h1>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
							</p>
							<a class="callaction-btn text-uppercase" href="#">Reach Our Support Team</a>	
						</div>
					</div>
				</div>	
			</section>
			<End callaction Area -->

			<!-- Start feature Area -->
			<!-- <section class="feature-area section-gap" id="service">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-8 pb-40 header-text">
							<h1>What Services we offer to our clients</h1>
							<p>
								Who are in extremely love with eco friendly system.
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<h4><span class="lnr lnr-user"></span>Expert Technicians</h4>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<h4><span class="lnr lnr-license"></span>Professional Service</h4>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>								
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<h4><span class="lnr lnr-phone"></span>Great Support</h4>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>								
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<h4><span class="lnr lnr-rocket"></span>Technical Skills</h4>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>				
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<h4><span class="lnr lnr-diamond"></span>Highly Recomended</h4>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>								
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<h4><span class="lnr lnr-bubble"></span>Positive Reviews</h4>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>									
							</div>
						</div>						
					</div>
				</div>	
			</section> -->
			<!-- End feature Area -->				
	
			<!-- start footer Area -->		
			<!-- <footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-2 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Quick links</h6>
								<ul>
									<li><a href="#">Jobs</a></li>
									<li><a href="#">Brand Assets</a></li>
									<li><a href="#">Investor Relations</a></li>
									<li><a href="#">Terms of Service</a></li>
								</ul>								
							</div>
						</div>
						<div class="col-lg-2 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Features</h6>
								<ul>
									<li><a href="#">Jobs</a></li>
									<li><a href="#">Brand Assets</a></li>
									<li><a href="#">Investor Relations</a></li>
									<li><a href="#">Terms of Service</a></li>
								</ul>								
							</div>
						</div>
						<div class="col-lg-2 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Resources</h6>
								<ul>
									<li><a href="#">Jobs</a></li>
									<li><a href="#">Brand Assets</a></li>
									<li><a href="#">Investor Relations</a></li>
									<li><a href="#">Terms of Service</a></li>
								</ul>								
							</div>
						</div>												
						<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
							<div class="single-footer-widget">
								<h6>Follow Us</h6>
								<p>Let us be social</p>
								<div class="footer-social d-flex align-items-center">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-dribbble"></i></a>
									<a href="#"><i class="fa fa-behance"></i></a>
								</div>
							</div>
						</div>							
						<div class="col-lg-4  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Newsletter</h6>
								<p>Stay update with our latest</p>
								<div class="" id="mc_embed_signup">
									<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
										<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
			                            	<button class="click-btn btn btn-default"><span class="lnr lnr-arrow-right"></span></button>
			                            	<div style="position: absolute; left: -5000px;">
												<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
											</div>

										<div class="info"></div>
									</form>
								</div>
							</div>
						</div>	 -->
						<!-- <p class="mt-50 mx-auto footer-text col-lg-12">
							 Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
<!-- Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> -->
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						<!-- </p>											
					</div>
				</div>
			</footer> 	 --> 
			<!-- End footer Area -->		

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
			<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>			
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>			
			<script src="js/jquery.sticky.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>	
			<script src="js/waypoints.min.js"></script>
			<script src="js/jquery.counterup.min.js"></script>					
			<script src="js/parallax.min.js"></script>		
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
	</html>
