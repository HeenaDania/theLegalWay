<!-------------- Main NavBar -------------->
<div class="mainNav ">
	<div class="container">
		<div class="logo">
			<a href="index.php"><img src="images/logo.png"></a>
		</div>
		<ul class="links">
			<li><a href="index.php">Home</a></li>
			<li><a href="index.php#welcome"> About Us</a></li>
			<li><a href="index.php#practiceArea"> Practice Areas</a></li>
			<li><a href="index.php#team"> Team</a></li>
			<li><a <?php if(basename($_SERVER['PHP_SELF']) == "appointment.php") { ?> class="active" <?php } ?> href="index.php#appointment"> Appointment</a></li>
			<li><a <?php if(basename($_SERVER['PHP_SELF']) == "news.php") { ?> class="active" <?php } ?> href="index.php#news"> News</a></li>
			<li><a href="index.php#contact"> Contact</a></li>
		</ul>
	</div>
</div>