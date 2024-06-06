<?php 
include 'class_user.php';
$user = new user();

extract($_POST);
$aksi = $_GET['aksi'];

 if($aksi == "tambah"){
 	$user->input($a,$b,$c,$d,$e);
 	echo "<script>alert('Data Berhasil Disimpan');</script>";
 	echo "<meta http-equiv='refresh' content='0; url=index.php?menu=tampil_user'>";
 }

 elseif($aksi == "hapus"){ 	
 	$user->hapus($_GET['id']);
 	echo "<script>alert('Data Berhasil Di HAPUS');</script>";
 	echo "<meta http-equiv='refresh' content='0; url=admin_index.php?menua=tampil_user'>";
 }

 elseif($aksi == "update"){
 	$user->update($a,$b,$c,$d,$e);
 	echo "<script>alert('Data Berhasil Di UPDATE');</script>";
 	echo "<meta http-equiv='refresh' content='0; url=admin_index.php?menua=tampil_user'>";
 }
?>
