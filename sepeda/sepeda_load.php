<?php 
include 'class_sepeda.php';
$spd = new sepeda();

extract($_POST);
$aksi = $_GET['aksi'];

 if($aksi == "tambah"){
 	$lokasi_file = $_FILES['f']['tmp_name'];
						$nama_file   = $_FILES['f']['name'];
						$tipe_file = pathinfo($nama_file, PATHINFO_EXTENSION);
						$f = $a.".".$tipe_file;

						// Tentukan folder untuk menyimpan file
						$folder = "foto/$f";
						$coverfile=$f;
						// Apabila file berhasil di upload
						move_uploaded_file($lokasi_file,"$folder");
 	$spd->input($a,$b,$c,$d,$f);
 	echo "<script>alert('Data Berhasil Disimpan');</script>";
	echo "<meta http-equiv='refresh' content='0; url=admin_index.php?menua=tampil_sepeda'>";
 }

 elseif($aksi == "hapus"){ 	
 	$berhasil=$spd->hapus($_GET['id']);
 }

 elseif($aksi == "update"){
 	$lokasi_file = $_FILES['f']['tmp_name'];
						$nama_file   = $_FILES['f']['name'];
						$tipe_file = pathinfo($nama_file, PATHINFO_EXTENSION);
						$f = $a.".".$tipe_file;

						// Tentukan folder untuk menyimpan file
						$folder = "foto/$f";
						$coverfile=$f;
						// Apabila file berhasil di upload
						

 	if(!empty($nama_file))
 		{	
 			move_uploaded_file($lokasi_file,"$folder");
 			$spd->update($a,$b,$c,$d,$f);
 		}

 		else
 			if(empty($nama_file))  { $spd->update_nonfoto($a,$b,$c,$d); }
 }

?>
