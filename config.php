<?php
	$conn = mysqli_connect("localhost","root","","10118085_akademik");

	if (mysqli_connect_errno()) {
		die("Database tidak berfungsi".mysqli_connect_error());
	}
?>