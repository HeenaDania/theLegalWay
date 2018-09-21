<?php 
	include '../../config.php';
	$delete = "delete from news where id = '$_GET[id]'";
	mysqli_query($con,$delete);
	header("location:../main.php?pg=listNews&d=501");
 ?>