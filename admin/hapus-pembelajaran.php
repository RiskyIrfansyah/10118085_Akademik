<?php
	include '../config.php';

	$nis = $_GET['nis'];

	mysqli_query($conn, "delete from pembelajaran where nis='$nis'");

	header("location: form-pembelajaran.php")
?>