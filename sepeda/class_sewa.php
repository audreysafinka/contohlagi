<?php
include 'koneksi.php';
class sewa extends koneksi
{
	function __construct(){
		parent::__construct();
	}
	
	function tampil_data(){
		$data = mysqli_query($this->koneksi_db,
		"SELECT tb_sewa.id_sewa, tb_user.id_user, tb_user.nama, tb_sepeda.id_sepeda, tb_sewa.tgl_boking, tb_sewa.jml
		 FROM (tb_sewa tb_sewa LEFT JOIN tb_user tb_user ON tb_sewa.id_user= tb_user.id_user)
        LEFT JOIN tb_sepeda tb_sepeda ON tb_sewa.id_sepeda = tb_sepeda.id_sepeda");
		while($x = mysqli_fetch_array($data)){
			$hasil[] = $x;
		}
		return $hasil;
	}
	
	function tampil_data_spd(){
		$data = mysqli_query($this->koneksi_db,"SELECT * FROM tb_sepeda");
		while($x = mysqli_fetch_array($data)){
			$hasil[] = $x;
		}
		return $hasil;
	}

	function tampil_riwayat(){
		$data = mysqli_query($this->koneksi_db,"SELECT * FROM tb_riwayat");
		while($x = mysqli_fetch_array($data)){
			$hasil[] = $x;
		}
		return $hasil;
	}

	function input($id_riwayat,$id_sewa,$id_user,$id_sepeda,$tgl_boking,$jml){
		$p2= mysqli_query($this->koneksi_db,"INSERT INTO tb_sewa values('$id_sewa','$id_user','$id_sepeda','$tgl_boking','$jml')");

		$p3= mysqli_query($this->koneksi_db,"INSERT INTO tb_riwayat values('$id_riwayat' ,'$id_sewa','$id_sepeda')");
	}

	function hapus($id){
		mysqli_query($this->koneksi_db,"DELETE FROM tb_sewa where id_sewa='$id'");
	}

	function edit($id){
		$data = mysqli_query($this->koneksi_db,"SELECT * FROM tb_sewa where id_sewa='$id'");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}

		return $hasil;
	}

	function update($id,$id_user,$id_sepeda,$tgl_boking,$jml){
		mysqli_query($this->koneksi_db,"UPDATE tb_sewa set id_user='$id_user', id_sepeda='$id_sepeda', tgl_boking='$tgl_boking', jml='$jml' where id_sewa='$id'");
	}

}
?>
