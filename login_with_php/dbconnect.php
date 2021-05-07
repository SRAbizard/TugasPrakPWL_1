<?php

$koneksi = mysqli_connect("localhost", "root", "", "user_login");
	if ($koneksi){
		// echo "Terkoneksi dengan data base.";
	} else {
		echo "<script>alert('koneksi ke database gagal');</script>";
	}

?>