<?php 
session_start();
error_reporting(0);
include 'include/config.php';
$uid=$_SESSION['uid'];

if(isset($_POST['submit']))
{ 
$pid=$_POST['pid'];


$sql="INSERT INTO tblbooking (package_id,userid) Values(:pid,:uid)";

$query = $dbh -> prepare($sql);
$query->bindParam(':pid',$pid,PDO::PARAM_STR);
$query->bindParam(':uid',$uid,PDO::PARAM_STR);
$query -> execute();
echo "<script>alert('Package has been booked.');</script>";
echo "<script>window.location.href='booking-history.php'</script>";

}

?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<!-- <title>Gym Cook</title>
	<meta charset="UTF-8">
	<meta name="description" content="Ahana Yoga HTML Template">
	<meta name="keywords" content="yoga, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 

	-- Stylesheets -->

	<!-- <link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/nice-select.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<link rel="stylesheet" href="css/animate.css"/>

	<- Main Stylesheets -->
	<!-- <link rel="stylesheet" href="css/style.css"/> --> 





	<!-- new code -->

<title>FitnessYo</title>
	<!-- custom-theme -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Gym Trainer Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //custom-theme -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Owl-carousel-CSS -->
	
<!-- Testimonials-slider-css-files -->
	<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
	<link href="css/owl.theme.css" rel="stylesheet">
<!-- //Testimonials-slider-css-files -->

	<link href="css/style copy.css" rel="stylesheet" type="text/css" media="all" />
	<!-- font-awesome-icons -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //font-awesome-icons -->
	<link href="//fonts.googleapis.com/css?family=Raleway:400,500,600,700,800" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
</head>
<body>
	



<!-- banner -->
<div class="main_section_agile" id="home">
		<div class="agileits_w3layouts_banner_nav">
			<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1><a class="navbar-brand" href="index.html">FitnessYo</a></h1>

				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="link-effect-2" id="link-effect-2">
						<ul class="nav navbar-nav">
							<li class="active"><a href="index.html" class="effect-3">Home</a></li>
							<li><a href="copy.php" class="effect-3">Booking</a></li>
							<li><a href="registration.php" class="effect-3">Signup</a></li>
							<li><a href="contact.php" class="effect-3">contact us</a></li>
							<li><a href="login.php" class="effect-3">login </a></li>
						</ul>
					</nav>
				</div>
			</nav>
			<div class="clearfix"> </div>
			</div>
		</div>
	</div>

	<div class="banner_top">
		<div class="slider">
			<div class="wrapper">
				
				<!-- Slideshow 3 -->
				<ul class="rslides" id="slider">
					<li>
						<div class="agile_banner_text_info">
							<h3>Become Strong And Healthy </h3>
							<p>TrainHard is the right place to start new life as an athletic, strong and healthy person with a strong will.</p>
						</div>
					</li>
					<li>
						<div class="agile_banner_text_info">
							<h3>Exceptional Life Fitness </h3>
							<p>TrainHard is the right place to start new life as an athletic, strong and healthy person with a strong will.</p>
						</div>
					</li>
					<li>
						<div class="agile_banner_text_info">
							<h3>Build Your Body With Us </h3>
							<p>TrainHard is the right place to start new life as an athletic, strong and healthy person with a strong will.</p>
						</div>
					</li>
					<li>
						<div class="agile_banner_text_info">
							<h3>Exceptional Life Fitness </h3>
							<p>TrainHard is the right place to start new life as an athletic, strong and healthy person with a strong will.</p>
						</div>
					</li>
				</ul>
				<!-- Slideshow 3 Pager -->
				<ul id="slider3-pager">
					<li><a href="#"><img src="img/banner11.jpg" data-selector="img" alt=""></a></li>
					<li><a href="#"><img src="img/banner22.jpg" data-selector="img" alt=""></a></li>
					<li><a href="#"><img src="img/banner33.jpg" data-selector="img" alt=""></a></li>
					<li><a href="#"><img src="img/banner44.jpg" data-selector="img" alt=""></a></li>

				</ul>
			</div>
		</div>
	</div>
	<!-- //banner -->
	<!-- About us -->
	<div class="about-3">
		<div class="wthree_head_section">
				<h3 class="w3l_header">What We <span>Do?</span></h3>
			</div>
		<div class="container">
			<div class="d-flex">
				
				<div class="about1"> 
					<h4>CrossFit and TrainHard GYM </h4>
					<p class="details"> Crossfit mixed with mass building is a good combination. Incorporting variety into your workout routine prevents your body from adapting,which slows results over time.</p>
					<ul class="about-list">
						<li>
							<div class="col-md-4 we-w3l">
								<img src="images/1.jpg" alt="" class="img-responsive" />
							</div>
							<div class="col-md-8 in-block">
								<h5>ELEMENTS</h5>
								<p>Aim to have aerobic fitness, strength training, core exercises, balance training, and flexibility and stretching in your exercise plan.</p>
							</div>
							<div class="clearfix"> </div>
						</li>
						<li>
						<div class="col-md-4 we-w3l">
								<img src="images/2.jpg" alt="" class="img-responsive" />
							</div>
							<div class="col-md-8 in-block">
								<h5>BOOT CAMP</h5>
								<p>Bootcamp training is a type of athletic training modality with a particular focus on body weight exercises adapted from military training, a high level of intensity and the intention of rapidly altering the bodily composition and subsequent abilities of the practitioner in a short span of time.</p>
							</div>
							<div class="clearfix"> </div>
						</li>
						<li>
							<div class="col-md-4 we-w3l">
								<img src="images/3.jpg" alt="" class="img-responsive" />
							</div>
							<div class="col-md-8 in-block">
								<h5>CROSSFIT</h5>
								<p>A form of high intensity interval training, CrossFit is a strength and conditioning workout that is made up of functional movement performed at a high intensity leve.</p>
							</div>
							<div class="clearfix"> </div>
						</li>
					</ul>
				</div>
				<div class="about2">
					
				</div>
			</div>
			
		</div>
	</div>
	<!-- //About us -->
		<div class="ser-agile">
			<div class="container">
				<div class="wthree_head_section">
					<h3 class="w3l_header w3_agileits_header two">Our <span>Classes</span></h3>
				</div>
					<div class="w3l-info">
							<div class="col-md-4 ser-lef-agile">
								<div class="grid1">
									<h5>Sunday, 13.00</h5>
									<h4>AEROBIC CAPACITY</h4>
									<h6>Trainer: Andrew Ross</h6>
								</div>
							</div>
							<div class="col-md-4 ser-lef-agile">
								<div class="grid1">
									<h5>Monday, 13.00</h5>
									<h4>GYMNASTICS PRO</h4>
									<h6>Trainer: Steve Smith</h6>
								</div>
							</div>
							<div class="col-md-4 ser-lef-agile">
								<div class="grid1">
									<h5>Tuesday, 13.00</h5>
									<h4>BEGINNERS LEVEL</h4>
									<h6>Trainer: Jessy Raider</h6>
								</div>
							</div>
								<div class="clearfix"></div>
						</div>
				</div>
		</div>
	<!-- testimonials -->

<!-- testimonals section -->
<div class="testimonals">
		<div class="container">
			<div class="wthree_head_section">
				<h3 class="w3l_header">Our <span>Testimonials</span></h3>
			</div>
			<div class="agileits-feedback-grids">
				<div id="owl-demo" class="owl-carousel owl-theme">
					<div class="item">
						<div class="testimonal grid-1">
							<div class="first-grid">
								<img src="images/1.png" alt="" />
								<h3>Gus Fring</h3>
								<p>In his legitimate professional life, Gustavo Fring displays many characteristics of an ESTJ. However, the final ruling is ISTJ, because those characteristics appear to only come out as a mask to hide more insidious intentions. </p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimonal grid-1">
							<div class="first-grid">
								<img src="images/2.png" alt="" />
								<h3>Patrick Bateman</h3>
								<p>Healthy ENTJs aim to achieve their goals in an ethical way, but for unhealthy ENTJs, morals go out of the window. </p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimonal grid-1">
							<div class="first-grid">
								<img src="images/3.png" alt="" />
								<h3>Antonio Montana</h3>
								<p>Tony Montana was a former Cuban soldier, who was imprisoned in Cuba along with his friends Angel and Manny. </p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimonal grid-1">
							<div class="first-grid">
								<img src="images/2.png" alt="" />
								<h3>Gomez</h3>
								<p>Cras tortor ipsum, gravida vitae finibus non, bibendum quis turpis. Cras semper accumsan metus, et aliquet diam vestibulum ut. </p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimonal grid-1">
							<div class="first-grid">
								<img src="images/3.png" alt="" />
								<h3>john whick</h3>
								<p>Cras tortor ipsum, gravida vitae finibus non, bibendum quis turpis. Cras semper accumsan metus, et aliquet diam vestibulum ut. </p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimonal grid-1">
							<div class="first-grid">
								<img src="images/1.png" alt="" />
								<h3>Federeka</h3>
								<p>Cras tortor ipsum, gravida vitae finibus non, bibendum quis turpis. Cras semper accumsan metus, et aliquet diam vestibulum ut. </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- /testimonals section -->
	<!-- stats -->
	<div class="stats">
		<div class="container">
		<div class="wthree_head_section">
					<h3 class="w3l_header w3_agileits_header two">Our <span>Stats</span></h3>
				</div>
			<div class="col-md-3 w3layouts_stats_left w3_counter_grid">
				<span class="fa fa-user" aria-hidden="true"></span>
				<p class="counter">45</p>
				<h3>Trianers</h3>
			</div>
			<div class="col-md-3 w3layouts_stats_left w3_counter_grid1">
				<span class="fa fa-pencil-square-o" aria-hidden="true"></span>
				<p class="counter">165</p>
				<h3>success full changes</h3>
			</div>
			<div class="col-md-3 w3layouts_stats_left w3_counter_grid2">
				<span class="fa fa fa-folder-open-o" aria-hidden="true"></span>
				<p class="counter">563</p>
				<h3>GYM </h3>
			</div>
			<div class="col-md-3 w3layouts_stats_left w3_counter_grid3">
				<span class="fa fa-smile-o" aria-hidden="true"></span>
				<p class="counter">245</p>
				<h3>Happy Customers </h3>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //stats -->

<!-- our blog -->

<!-- 
	<div class="wthree-blog">
	<div class="container">
		<div class="wthree_head_section">
				<h3 class="w3l_header">Our Latest <span>News</span></h3>
			</div>
		<div class="blog1">
			<div class="blog-box">
				<a href="#" data-toggle="modal" data-target="#myModal1"><img src="img/1.jpg" alt="blog image" class="img-responsive" /></a>
				<div class="blog-txt">
					<h3><a href="#" data-toggle="modal" data-target="#myModal1">Lorem Ipsum </a></h3>
					<h4>December 15,2017</h4>
					<p>Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem ip sum has been the industry's standard text ever.
						Lorem ipsum is simply dummy text.</p>
					<!-- Trigger the modal with a button  

					<a href="#" data-toggle="modal" data-target="#myModal1">Read More &raquo; </a>
					<!-- Modal -
					
					

				</div>
			</div>
			
		</div>
		<div class="blog2">
			<div class="blog-box">
				<div class="blog-txt">
					<h3><a href="#" data-toggle="modal" data-target="#myModal1">Lorem Ipsum </a></h3>
					<h4>December 25,2017</h4>
					<p>Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem ip sum has been the industry's standard text ever.
						Lorem ipsum is simply dummy text.</p>
					<!-- Trigger the modal with a button --
					<a href="#" data-toggle="modal" data-target="#myModal1">Read More &raquo; </a>
					<!-- Modal --
					
				</div>
				<a href="#" data-toggle="modal" data-target="#myModal1"><img src="img/3.jpg" alt="blog image" class="img-responsive" /></a>
				
			</div>
		</div>
		</div>	
	</div> -->



	<!-- our blog -->

	<!-- footer -->
	<div class="footer">
		<div class="f-bg-w3l">
				<!-- <div class="col-md-3 w3layouts_footer_grid">
					<h2>Subscribe <span>Newsletter</span></h2>
					<p>By subscribing to our mailing list you will always get latest news from us.</p>
					<form action="#" method="post">
						<input type="email" name="Email" placeholder="Enter your email..." required="">
						<button class="btn1"><i class="fa fa-envelope-o" aria-hidden="true"></i></button>
						<div class="clearfix"> </div>
					</form>
					
				
				</div> -->
				<div class="col-md-4 w3layouts_footer_grid">
					<h3>Recent <span>Works</span></h3>
					 <ul class="con_inner_text midimg">
						<li><a href="#"><img src="img/banner22.jpg" alt="" class="img-responsive" /></a></li>
					    <li><a href="#"><img src="img/banner33.jpg" alt="" class="img-responsive" /></a></li>
						<li><a href="#"><img src="img/banner44.jpg" alt="" class="img-responsive" /></a></li>
						<li><a href="#"><img src="img/banner11.jpg" alt="" class="img-responsive" /></a></li>
						<li><a href="#"><img src="img/banner22.jpg" alt="" class="img-responsive" /></a></li>
					    <li><a href="#"><img src="img/banner33.jpg" alt="" class="img-responsive" /></a></li>
						 <li><a href="#"><img src="img/banner11.jpg" alt="" class="img-responsive" /></a></li>
						<li><a href="#"><img src="img/banner44.jpg" alt="" class="img-responsive" /></a></li>
				     </ul>
					
				</div>
				<div class="col-md-2 w3layouts_footer_grid">
					<h3>Our <span>Links</span> </h3>
					  <ul class="links">
							<li><a href="index.php">Home</a></li>
							<li><a href="copy.php">Booking</a></li>
							<li><a href="login.php">Login</a></li>
							<li><a href="registration.php">signup</a></li>

							
						</ul>
				</div>
				<div class="col-md-3 w3layouts_footer_grid">
					<h2>Contact <span>Us</span></h2>
					    <ul class="con_inner_text">
							<li><span class="fa fa-map-marker" aria-hidden="true"></span>infopark, 4th block, <label> Kochi.</label></li>
							<li><span class="fa fa-envelope-o" aria-hidden="true"></span> <a href="mailto:info@example.com">fitnessyo@example.com</a></li>
							<li><span class="fa fa-phone" aria-hidden="true"></span> +91 9744116448</li>
						</ul>

					<ul class="social_agileinfo">
						<li><a href="#" class="w3_facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" class="w3_twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" class="w3_instagram"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#" class="w3_google"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>


				<div class="clearfix"> </div>
					
			</div>
			<p class="copyright">© 2022 FitnessYo. All Rights Reserved </p>
	</div>
	<!-- //footer -->
<!-- bootstrap-pop-up -->
					<div class="modal video-modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModal">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									Gym Trainer
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>	
								</div>
								<section>
									<div class="modal-body">
										<img src="img/3.jpg" alt=" " class="img-responsive" />
										<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
									</div>
								</section>
							</div>
						</div>
					</div>
					<!-- //bootstrap-pop-up -->
	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- //js -->
	<!-- Slider script -->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		// You can also use "$(window).load(function() {"
		$(function () {
			$("#slider").responsiveSlides({
				auto: true,
				nav: true,
				manualControls: '#slider3-pager',
			});
		});
	</script>
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>

	<!-- for testimonials slider-js-file-->
			<script src="js/owl.carousel.js"></script>
	<!-- //for testimonials slider-js-file-->
		<script>
		$(document).ready(function() { 
		$("#owl-demo").owlCarousel({
 
			autoPlay: 3000, //Set AutoPlay to 3 seconds
			autoPlay:true,
			items : 3,
			itemsDesktop : [640,5],
			itemsDesktopSmall : [414,4]
		});
		}); 
</script>
<!-- for testimonials slider-js-script-->
<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
	<!-- //stats -->
	</body>
</html>
