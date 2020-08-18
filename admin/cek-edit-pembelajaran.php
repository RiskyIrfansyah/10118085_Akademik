<?php
	include '../config.php';

	$nis = $_POST['nis'];
	$nip = $_POST['nip'];
	$kelas = $_POST['kelas'];

	mysqli_query($conn, "update pembelajaran set kelas='$kelas' where nis='$nis'");

	header("location: form-pembelajaran.php");
?>