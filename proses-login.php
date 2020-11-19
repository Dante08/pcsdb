<?php
include 'login-konek.php';
$username = $_POST['username'];
$password = $_POST['password'];

if (!empty($username) && !empty($password)) {
	$sql = mysqli_query($connect, "SELECT * FROM login WHERE username = '$username' AND password = '$password'");
	$result = mysqli_num_rows($sql);
	if ($result){
		echo "SUKSESS";
		echo "klik <a href='home.php'>disini</a> untuk melanjutkan";
	} else {
		echo "Username dan Password salah";
	}
	} else {
		echo "email dan password kosong, silahkan di isi";	
}