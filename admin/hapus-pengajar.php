<?php
	include '../config.php';

	$nip = $_GET['nip'];

	mysqli_query($conn, "delete from pengajar where nip='$nip'");

	header("location: form-pengajar.php")
?>