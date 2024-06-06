<?php
include 'koneksi.php';
class user extends koneksi
{
	function __construct(){
		parent::__construct();
	}

	function tampil_data(){
		$data = mysqli_query($this->koneksi_db,"SELECT * FROM tb_user");
		while($x = mysqli_fetch_array($data)){
			$hasil[] = $x;
		}
		return $hasil;
	}

	function input($id_user,$nama,$nope,$email,$alamat){
		mysqli_query($this->koneksi_db,"INSERT INTO tb_user values('$id_user','$nama','$nope','$email','$alamat')");
	}

	function hapus($id){
		mysqli_query($this->koneksi_db,"DELETE FROM tb_user where id_user='$id'");
	}

	function edit($id){
		$data = mysqli_query($this->koneksi_db,"SELECT * FROM tb_user where id_user='$id'");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}

		return $hasil;
	}

	function update($id,$nama,$nope,$email,$alamat){
		mysqli_query($this->koneksi_db,"UPDATE tb_user set nama='$nama', nope='$nope', email='$email', alamat='$alamat' where id_user='$id'");
	}
}
?>
