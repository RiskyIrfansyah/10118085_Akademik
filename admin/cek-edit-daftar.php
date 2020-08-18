<?php
	include '../config.php';

	$nis = $_POST['nis'];
	$nama_siswa = $_POST['nama_siswa'];
	$ttl = $_POST['ttl'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$alamat = $_POST['alamat'];

	mysqli_query($conn, "update siswa set nama_siswa='$nama_siswa', ttl='$ttl', jenis_kelamin='$jenis_kelamin', alamat='$alamat' where nis='$nis'");

	header("location: form-daftar.php");
?>