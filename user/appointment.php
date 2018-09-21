<?php ob_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>The Legal Way | Appointment</title>

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
<?php 	include '../config.php';
		include 'includes/topHeader.php';
		include 'includes/mainHeader.php'; ?>

<div class="lowerHeaderAppoint">
	<h1>Appointment</h1>
</div>
<div class="appointPageArea">
	<div class="container">
		<h1 data-aos="fade-down">Make an Appointment</h1>
		<form class="appointForm" id="appointForm" method="POST" data-aos="fade-up">
			<table>
				<tr>
					<td><input type="text" id="name" name="name" placeholder="Name" required></td>
					<td><input type="email" id="email" name="email" placeholder="Email" required></td>
				</tr>
				<tr>
					<td><input type="date" id="date" name="date" value='<?php echo date("Y-m-d");?>' required></td>
					<td><input type="time" id="time" name="time" value="now" required></td>
				</tr>
				<tr>
					<td>
						<select name="lawyer" id="lawyer">
							<option disabled selected>Select Lawyer</option>
							<?php
			                  $get="select * from members";
			                  $exe=mysqli_query($con,$get);
			                  while($data=mysqli_fetch_array($exe)){
			                 ?>
							<option value="<?php echo $data['name']; ?>"><?php echo $data['name']; ?> (<?php echo $data['designation']; ?>)</option>
							<?php } ?>
						</select>
					</td>
				</tr>
					<tr><td><textarea id="message" name="message" placeholder="Message..." required style="overflow:hidden;"></textarea></td></tr>
			</table>
			<table>
				<tr>
					<td><input name="send" type="submit"></td>
					<td><input type="reset"></td>
				</tr>
			</table>
			</form>
			<?php 
				if (isset($_POST['send'])) {
				  	$name=mysql_real_escape_string($_POST['name']);
				  	$email=mysql_real_escape_string($_POST['email']);
				  	$date=mysql_real_escape_string($_POST['date']);
				  	$time=mysql_real_escape_string($_POST['time']);
				  	$lawyer=mysql_real_escape_string($_POST['lawyer']);
				  	$message=mysql_real_escape_string($_POST['message']);
				  	$timePrev = strtotime($time)- 60*60;
				  	$timeP = date('H:i', $timePrev);
				  	$timeExt = strtotime($time)+ 60*60;
				  	$timeE = date('H:i', $timeExt);
				  	$select1 = "select * from appointments where date = '$date' AND lawyer = '$lawyer' AND time BETWEEN '$timeP' AND '$timeE'";
					$res1 = mysqli_query($con, $select1);
					$data1 = mysqli_fetch_assoc($res1);  
					if ($data1) {
						$message = "Sorry!! You cannot make Appointment at the selcted time and date. Please change your Appointment time or date.";
							echo "<script type='text/javascript'>alert('$message');</script>";
					}
					else {
					  	$query="insert into appointments(name,email, date, time, lawyer, message) VALUES ('$name','$email','$date','$time','$lawyer','$message')";
					  	mysqli_query($con,$query) or die(mysqli_error($con));
					  	header("location:index.php#appointment");
				  	}
				}
			?>
	</div>
</div>

<?php include 'includes/footer.php'; ?>

<script type="text/javascript">
// getting current time
	$(function(){  
	  $('input[type="time"][value="now"]').each(function(){    
	    var d = new Date(),        
	        h = d.getHours(),
	        m = d.getMinutes();
	    if(h < 10) h = '0' + h; 
	    if(m < 10) m = '0' + m; 
	    $(this).attr({
	      'value': h + ':' + m
	    });
	  });
	});
</script>
</body>
</html>