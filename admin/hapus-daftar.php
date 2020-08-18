<?php
	include '../config.php';

	$nis = $_GET['nis'];

	mysqli_query($conn, "delete from siswa where nis='$nis'");

	header("location: form-daftar.php")
?>