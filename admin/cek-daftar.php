<?php
	include '../config.php';

	$nis = $_POST['nis'];
	$nama_siswa = $_POST['nama_siswa'];
	$ttl = $_POST['ttl'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$alamat = $_POST['alamat'];

	mysqli_query($conn, "insert into siswa values('$nis','$nama_siswa','$ttl','$jenis_kelamin','$alamat')");

	header("location: form-daftar.php")
?>