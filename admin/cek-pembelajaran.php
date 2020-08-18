<?php
	include '../config.php';

	$nis= $_POST['nis'];
	$nip = $_POST['nip'];
	$kelas = $_POST['kelas'];

	mysqli_query($conn, "insert into pembelajaran values('$nis','$nip','$kelas')");

	header("location: form-pembelajaran.php")
?>