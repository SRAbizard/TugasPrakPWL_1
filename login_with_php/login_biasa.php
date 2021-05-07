<?php 

include 'dbconnect.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($koneksi, "select * from login where username='$username' and password='$password'")or die(mysqli_error());
$r = mysqli_num_rows($query);

if($r > 0) {
	header("location:https://localhost/prak%20pwl/Prak%201/login_with_php/?code=AQB_ksNnMAxFkdwWp6q1C3BTnHIs3d_J8XLdEnd1v2yNU82CCQptRHRdRyqN0iXVvmZ-pItB3r757MotvxeF3Suqdjd6ej4gFTnuAj7ZPtcbsgVf6zfv2tsuqbCgoZRY_KmLHD0gmssSDatlwZzi2QsErBBGUWAJ8Kl53z_E1zCShI2JjdSnPEGnzp667K4KUIdlKKzPAaSCml2QgnfHavZ3N1VwID2JwrlOpFMMfAW6Lpo0jTsGo3NdiMSXaRVVSwcjTAcuOxgAOKoMz02wcxz67IgvcXSK75EUpEoR5q2c-VPgRpJMN_b2sgUW_6viTSz6H674NV4EKP8KIg0ZMiZd&state=6897ab88a993a18c2266f36db3f0444d#_=_");
} else {
	echo "<script>alert('Username atau Password Salah!');window.location='index.php'</script>";
	// header("location:index.php")or die(mysqli_error());
}
 
?>