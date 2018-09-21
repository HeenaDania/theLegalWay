<!DOCTYPE html>
<html>
<head>
	<title>The Legal Way</title>
	
	<!-------------- My stylesheet -------------->
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<!-------------- Pre-Loader stylesheet and JS -------------->
	<link rel="stylesheet" type="text/css" href="css/preLoader.css" />
	<script src="js/modernizr.custom.js"></script>

	<!-------------- Fonts stylesheet -------------->
	<link rel="stylesheet" type="text/css" href="fonts/fontsStylesheet.css">

	<!-------------- Favicon -------------->
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">

	<!-------------- Animations Stylesheet -------------->
	<link rel="stylesheet" href="css/aos.css">

	<!-------------- Master Slider Stylesheets -------------->
	<link rel="stylesheet" href="css/masterslider.css" />
    <link href="css/mastersliderStyle.css"  rel="stylesheet" type="text/css">
	<link href="css/ms-fullscreen.css"  rel="stylesheet" type="text/css">

	<!-------------- Owl Slider Stylesheets -------------->
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-------------- Sweet Alerts Stylesheet -------------->
	<link rel="stylesheet" href="css/sweetalert.css">

	<!-------------- Additional Stylesheets -------------->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/hover.css">

	
</head>
<body>

<!-------------- Pre Loader -------------->
<div id="ip-container" class="ip-container">
	<header class="ip-header">
		<div class="ip-loader">
			<svg class="ip-inner" width="60px" height="60px" viewBox="0 0 80 80">
				<path class="ip-loader-circlebg" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
				<path id="ip-loader-circle" class="ip-loader-circle" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
			</svg>
		</div>
	</header>
</div>
<?php 	include '../config.php';
		include 'includes/topHeader.php';
		include 'includes/mainHeaderIndex.php'; ?>

<!-------------- Master Slider -------------->
<section class="no-padding-tb"> 
        <div class="ms-fullscreen-template" id="slider1-wrapper">
			<!-- masterslider -->
			<div class="master-slider ms-skin-default" id="masterslider">
				<div class="ms-slide slide-3">
					<h3 class="ms-layer thin-text-white blacktext" data-type="text" data-effect="bottom(short)" data-duration="1800" data-delay="0" data-hide-effect="fade" >
						Welcome to
					</h3>
					<h4 class="ms-layer bold-text-white bigtext" data-type="text" data-effect="top(45)" data-duration="3400" data-delay="400" data-ease="easeOutExpo">
						The Legal Way
					</h4>
					<img src="images/loading-2.gif" data-src="images/slide-2.jpg" alt="lorem ipsum dolor sit">   
				</div>
				<div class="ms-slide slide-3">
					<h3 class="ms-layer thin-text-white blacktext" data-type="text" data-effect="skewleft(15,long)" data-duration="1800" data-delay="0" data-hide-effect="fade" >
						We Fight For
					</h3>
					<h4 class="ms-layer bold-text-white bigtext" data-type="text" data-effect="skewright(15,long)" data-duration="1800" data-delay="0" data-hide-effect="fade" >
						Your Justice...
					</h4>
					<img src="images/loading-2.gif" data-src="images/slide-1.jpg" alt="lorem ipsum dolor sit">   
				</div>
			</div>
			<!-- end of masterslider -->
		</div>
    </section>     
    <div class="clearfix"></div> 

<!-------------- Qualities -------------->
<div class="qualities" id="qualities">
	<div class="container">
		<div class="qual">
			<i class="fa fa-file" aria-hidden="true"></i>
			<h2>Well Planners</h2>
			<p>By planning our cases very well we are determined to our  & our customers' win.</p>
		</div>
		<div class="qual">
			<i class="fa fa-pencil" aria-hidden="true"></i>
			<h2>Settlement</h2>
			<p>We have also settled many cases of disputes of our cutomers outside the court rooms.</p>
		</div>
		<div class="qual">
			<i class="fa fa-smile-o" aria-hidden="true"></i>
			<h2>Fight for Justice</h2>
			<p>We are working very hard only to provide the Justice to everyone on the Earth .</p>
		</div>
	</div>
</div>

<!-------------- Welcome -------------->
<div class="welcome" id="welcome">
	<div class="container">
		<h1>Welcome to The Legal Way</h1>
		<hr>
		<p> We’re proud that our law firm offers top-notch legal services for a nationwide affordable pricing! We win 98% of all cases. So with us, your chances of winning are as high as they possibly can be! When you place your case in the hands of our lawyers and paralegals, you are placing your case in the hands of professionals who are committed to achieving the best possible outcome.</p>
	</div>
</div>

<!-------------- Achievements -------------->
<div class="achievements" id="achievements" data-aos="fade-up">
	<div class="container">
	<div id="counter">
		<div class="achiev">
			<i class="fa fa-heart-o hvr-grow" aria-hidden="true"></i>
			<h1 class="counter-value" data-count="212">0</h1>
			<p>Solved Cases</p>
		</div>
		<div class="achiev">
			<i class="fa fa-thumbs-o-up hvr-grow" aria-hidden="true"></i>
			<h1 class="counter-value" data-count="200">0</h1>
			<p>Successfull Cases</p>
		</div>
		<div class="achiev">
			<i class="fa fa-bullhorn hvr-grow" aria-hidden="true"></i>
			<h1 class="counter-value" data-count="342">100</h1>
			<p>Trusted Clients</p>
		</div>
		<div class="achiev">
			<i class="fa fa-cloud hvr-grow" aria-hidden="true"></i>
			<h1 class="counter-value" data-count="114">0</h1>
			<p>Recovered Clients</p>
		</div>
	</div>
	</div>
</div>

<!-------------- Practice Area -------------->
<div class="practiceArea" id="practiceArea" data-aos="zoom-in">
		<div class="container">
		<div>
			<h1>Our Practice Areas</h1>
			<hr>
		</div>
		<div class="areaText">
		<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="7000">
		  <div class="carousel-inner">
		    <div class="item active">
		      <div class="area">
		        <div class="hi-icon-effect-1 hi-icon-effect-1a">
		          <i class="fa fa-truck hi-icon" aria-hidden="true"></i>
		        </div>
		        <h3>Auto Accidents</h3>
		      </div>
		      <div class="area">
		        <div class="hi-icon-effect-1 hi-icon-effect-1a">
		          <i class="fa fa-fire hi-icon" aria-hidden="true"></i>
		        </div>
		        <h3>Burn Injuries</h3>
		      </div>
		      <div class="area">
		        <div class="hi-icon-effect-1 hi-icon-effect-1a">
		          <i class="fa fa-money hi-icon" aria-hidden="true"></i>
		        </div>
		        <h3>Tax Disputes</h3>
		      </div>
		      <div class="area">
		        <div class="hi-icon-effect-1 hi-icon-effect-1a">
		          <i class="fa fa-wheelchair hi-icon" aria-hidden="true"></i>
		        </div>
		        <h3>Medical Abuse</h3>
		      </div>
		    </div>

		    <div class="item">
		      <div class="area">
		        <div class="hi-icon-effect-1 hi-icon-effect-1a">
		          <i class="fa fa-building-o hi-icon" aria-hidden="true"></i>
		        </div>
		        <h3>Real Estate</h3>
		      </div>
		      <div class="area">
		        <div class="hi-icon-effect-1 hi-icon-effect-1a">
		          <i class="fa fa-meh-o hi-icon" aria-hidden="true"></i>
		        </div>
		        <h3>Child Abuse</h3>
		      </div>
		      <div class="area">
		        <div class="hi-icon-effect-1 hi-icon-effect-1a">
		          <i class="fa fa-medkit hi-icon" aria-hidden="true"></i>
		        </div>
		        <h3>Health Care</h3>
		      </div>
		      <div class="area">
		        <div class="hi-icon-effect-1 hi-icon-effect-1a">
		          <i class="fa fa-plane hi-icon" aria-hidden="true"></i>
		        </div>
		        <h3>Aviation</h3>
		      </div>
		    </div>

		    <div class="item">
		      <div class="area">
		        <div class="hi-icon-effect-1 hi-icon-effect-1a">
		          <i class="fa fa-female hi-icon" aria-hidden="true"></i>
		        </div>
		        <h3>Domestic Violence</h3>
		      </div>
		      <div class="area">
		        <div class="hi-icon-effect-1 hi-icon-effect-1a">
		          <i class="fa fa-book hi-icon" aria-hidden="true"></i>
		        </div>
		        <h3>Intellectual Property</h3>
		      </div>
		      <div class="area">
		        <div class="hi-icon-effect-1 hi-icon-effect-1a">
		          <i class="fa fa-leaf hi-icon" aria-hidden="true"></i>
		        </div>
		        <h3>Environmental Law</h3>
		      </div>
		      <div class="area">
		        <div class="hi-icon-effect-1 hi-icon-effect-1a">
		          <i class="fa fa-bar-chart-o hi-icon" aria-hidden="true"></i>
		        </div>
		        <h3>Corporate Finance</h3>
		      </div>
		    </div>
		  </div>

		  <!-- Left and right controls -->
		  <a class="left carousel-control" id="leftArrow" href="#myCarousel" data-slide="prev">
		    <span class="fa fa-angle-left" aria-hidden="true" ></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control " id="rightArrow" href="#myCarousel" data-slide="next">
		    <span class="fa fa-angle-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
		</div>
		</div>
</div>

<!-------------- Team -------------->
<div class="team" id="team">
	<div class="container">
	<div data-aos="fade-down">
		<h1>Our Legal Team</h1>
		<hr>
		<div class="teamText">
			<p>We are pleased to present to you, our best experts in various fields. Check out our qualifications</p>
		</div>
	</div>
		<div class="teamArea" data-aos="fade-up">
    	<div class="row">
		<div class="owl-carousel owl-theme">
			<?php
                $get="select * from members";
                $exe=mysqli_query($con,$get);
                while($data=mysqli_fetch_array($exe)){
            ?>
			<div class="member">
				<img class="img-responsive" src="<?php echo $data['image']; ?>" alt="">
				<div class="ImageOverlayH"></div>
				<div class="Buttons StyleTi">
					<span class="WhiteRounded"><a href="<?php echo $data['fbAcc']; ?>" target="_blank"><i class="fa fa-facebook"></i></a></span>
					<span class="WhiteRounded"><a href="<?php echo $data['twAcc']; ?>" target="_blank"><i class="fa fa-twitter"></i></a>
					</span>
					<span class="WhiteRounded"><a href="<?php echo $data['liAcc']; ?>" target="_blank"><i class="fa fa-linkedin"></i></a>
					</span>
				</div>
				<div class="team-member">
								<h4><?php echo $data['name']; ?></h4>
								<p><?php echo $data['designation']; ?></p>
				</div>
			</div>
			<?php } ?>
		</div>
   		</div>
  		</div>
	</div>
</div>

<!-------------- Appointment -------------->
<div class="appointment" id="appointment">
	<div class="container">
		<div>
			<h1>Appointment</h1>
			<hr>
			<h3>Book an appointment for Legal Consultation</h3>
		</div>
		<a href="appointment.php"><button class="appointBtn" >Book an Appointment</button></a>
	</div>
</div>

<!-------------- News -------------->
<div class="news" id="news">
	<div class="container">
	<div data-aos="fade-down">
		<h1>Legal News</h1>
		<hr>
		<div class="newsText">
			<p>Follow our blog read articles and stay up to date with news on the global market</p>
		</div>
	</div>
		<div class="newsArea">
			<?php 
				$get="select * from news order by date desc LIMIT 2";
                $exe=mysqli_query($con,$get);
                while($data=mysqli_fetch_array($exe)){
            ?>
			<div class="news1" data-aos="fade-up">
				<img src="<?php echo $data['image1']; ?>">
				<h4><?php echo $data['title']; ?></h4>
				<h6><?php echo $data['date']; ?></h6>
				<p><?php echo substr($data['description'], 0, 100); ?>...</p>
				<a href="news.php?id=<?php echo $data['id'] ?>"><button>Read More</button></a>
			</div>
			<?php
				}
				$get="select * from news order by date desc LIMIT 2,4";
                $exe=mysqli_query($con,$get);
                while($data=mysqli_fetch_array($exe)){
            ?>
			<div class="news2" data-aos="fade-up">
				<img src="<?php echo $data['image1']; ?>">
				<h4><?php echo $data['title']; ?></h4>
				<h6><?php echo $data['date']; ?></h6>
				<p><?php echo substr($data['description'], 0, 100); ?>...</p>
				<a href="news.php?id=<?php echo $data['id'] ?>"><button>Read More</button></a>
			</div>
			<?php } ?>
			<!-- <a href="news.html"><button id="moreButton">More News</button></a> -->
		</div>
	</div>
</div>

<!-------------- Testimonials -------------->
<div class="testimonials">
	<div class="container">
		<h1>Testimonials</h1>
		<hr>
		<div class="carousel slide" id="quote-carousel" data-ride="carousel" data-interval="4000">
            <!-- Carousel indicators -->
            <ol class="carousel-indicators">
              <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
              <li data-target="#quote-carousel" data-slide-to="1"></li>
              <li data-target="#quote-carousel" data-slide-to="2"></li>
            </ol>
            <!-- Carousel items -->
                      <div class="carousel-inner">
                      	<?php
				        	$get="select * from testimonials order by id desc LIMIT 1";
				            $exe=mysqli_query($con,$get);
				            while($data=mysqli_fetch_array($exe)){
				        ?>
                        <div class="active item">
                            <div class="profile-circle"><img src="<?php echo $data['image']; ?>"></div>
							<div class="row">
								<div class="col-md-8 col-md-push-2 col-sm-12">
									<p>"<?php echo $data['feedback']; ?>"</p>
									<h4><?php echo $data['name']; ?></h4>
								</div>
							</div>	
                        </div>
                        <?php 
                    		} 
                    		$get="select * from testimonials order by id desc LIMIT 1,2";
				            $exe=mysqli_query($con,$get);
				            while($data=mysqli_fetch_array($exe)){
                        ?>
                        <div class="item">
                            <div class="profile-circle"><img src="<?php echo $data['image']; ?>"></div>
							<div class="row">
								<div class="col-md-8 col-md-push-2 col-sm-12">
									<p>"<?php echo $data['feedback']; ?>"</p>
									<h4><?php echo $data['name']; ?></h4>
								</div>
							</div>	
                        </div>
                        <?php } ?>
                        </div>
                       </div>
	</div>
</div>

<!-------------- Contact Us -------------->
<div class="contact" id="contact">
	<div class="container">
	<div data-aos="fade-down">
		<h1>Contact Us</h1>
		<hr>
			<p>If you have any questions please contact us by phone or fill out the form below</p>
	</div>
	<form class="contactForm" id="contactForm" method="POST" data-aos="fade-up">
	<table>
		<tr>
			<td>
			<table>
				<tr><td><input type="text" name="name" id="name" placeholder="Name" required></td></tr>
				<tr><td><input type="email" name="email" id="email" placeholder="Email" required></td></tr>
				<tr><td><input type="subject" name="subject" id="subject" placeholder="Subject"></td></tr>
			</table>
			</td>
			<td><textarea name="message" id="message" placeholder=" Message" required></textarea></td>
		</tr>
	</table>
	<button name="send" id="send" type="submit">Send</button>
	</form>
	<?php 
	if (isset($_POST['send'])) {
		$name=$_POST['name'];
		$email=$_POST['email'];
		$subject=$_POST['subject'];
		$message=$_POST['message'];
		$from="From: $name<$email>\r\nReturn-path: $email";
		mail("contact@thelegalway.com",$subject,$message,$from);
	}
?>
	</div>
</div>

<?php include 'includes/footer.php'; ?>

</body>
</html>