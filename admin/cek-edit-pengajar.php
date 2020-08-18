<?php
	include '../config.php';

	$nip = $_POST['nip'];
	$nama_guru = $_POST['nama_guru'];
	$pelajaran = $_POST['pelajaran'];

	mysqli_query($conn, "update pengajar set nama_guru='$nama_guru', pelajaran='$pelajaran' where nip='$nip'");

	header("location: form-pengajar.php");
?>