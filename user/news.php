<!DOCTYPE html>
<html>
<head>
	<title>The Legal Way | News</title>

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

	<!-------------- Sweet Alerts Script -------------->
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

	<!-------------- Additional Stylesheets -------------->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/hover.css">
</head>
<body>
<?php 	include '../config.php';
		include 'includes/topHeader.php';
		include 'includes/mainHeader.php'; ?>
<div class="lowerHeaderNews">
	<h1>News</h1>
</div>
<div class="newsPageArea">
	<div class="container">
		<?php
	     	$select = "select * from news where id = '$_GET[id]'";
	        $res = mysqli_query($con, $select);
	        $data = mysqli_fetch_assoc($res);  
	    ?>
		<div class="news1">
			<div data-aos="fade-down">
				<h1><?php echo $data['title']; ?></h1>
				<h4><?php echo $data['date']; ?></h4>
			</div>
			<p data-aos="fade-up"><?php echo $data['description']; ?></p>
			<div class="images" data-aos="fade-up">
				<img id="mainImg" src="<?php echo $data['image1']; ?>" data-aos="fade-up">
			</div>
			<a href="index.php#news"><button>Back</button></a>

		</div>
	</div>
</div>

<?php include 'includes/footer.php'; ?>

</body>
</html>