<?php
	include '../config.php';

	$nip = $_POST['nip'];
	$nama_guru = $_POST['nama_guru'];
	$pelajaran = $_POST['pelajaran'];

	mysqli_query($conn, "insert into pengajar values('$nip','$nama_guru','$pelajaran')");

	header("location: form-pengajar.php")
?>