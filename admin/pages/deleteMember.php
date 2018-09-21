<?php 
	include '../../config.php';
	$delete = "delete from members where id = '$_GET[id]'";
	mysqli_query($con,$delete);
	header("location:../main.php?pg=listMembers&d=501");
 ?>