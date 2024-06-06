<?php 
include 'class_sepeda.php';
$spd = new sepeda();

$spd->logout();

			echo "<script>alert('Data Berhasil LOGOUT');</script>";
			echo "<meta http-equiv='refresh' content='0; url=admin_login.php'>";
?>