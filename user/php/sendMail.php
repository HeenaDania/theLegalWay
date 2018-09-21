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