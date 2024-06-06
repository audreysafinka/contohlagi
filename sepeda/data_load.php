<?php 
include 'class_sewa.php';
$sw = new sewa();

extract($_POST);
$aksi = $_GET['aksi'];

 if($aksi == "tambah"){
 	$sw->input($id_riwayat,$a,$b,$c,$d,$e);
 	echo "<script>alert('Data Berhasil Disimpan');</script>";
 	echo "<meta http-equiv='refresh' content='0; url=admin_index.php?menua=tampil_sewa'>";
 }

 elseif($aksi == "hapus"){ 	
 	$sw->hapus($_GET['id']);
 	echo "<script>alert('Data Berhasil Di HAPUS');</script>";
 	echo "<meta http-equiv='refresh' content='0; url=admin_index.php?menua=tampil_sewa'>";
 }

 elseif($aksi == "update"){
 	$sw->update($a,$b,$c,$d,$e);
 	echo "<script>alert('Data Berhasil Di UPDATE');</script>";
 	echo "<meta http-equiv='refresh' content='0; url=admin_index.php?menua=tampil_sewa'>";
 }
?>
