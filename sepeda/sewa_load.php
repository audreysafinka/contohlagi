<?php 
include 'class_sewa.php';
$sw = new sewa();

extract($_POST);
$aksi = $_GET['aksi'];

 if($aksi == "tambah"){
 	$sw->input($id_riwayat,$a,$b,$c,$d,$e);
 	echo "<script>alert('Data Berhasil Disimpan');</script>";
 	echo "<meta http-equiv='refresh' content='0; url=index.php?menu=tampil_sewa'>";
 }
 else { header("location:index.php?menu=input_sewa"); }
 ?>