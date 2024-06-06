<?php
include 'koneksi.php';
class sepeda extends koneksi
{
	function __construct(){
		parent::__construct();
	}

	function tampil_data(){
		$data = mysqli_query($this->koneksi_db,"SELECT * FROM tb_sepeda");
		while($x = mysqli_fetch_array($data)){
			$hasil[] = $x;
		}
		return $hasil;
	}

	function tampil_sewa(){
		$data = mysqli_query($this->koneksi_db,
		"SELECT tb_sewa.id_sewa, tb_user.id_user, tb_user.nama, tb_sepeda.id_sepeda, tb_sewa.tgl_boking, tb_sewa.jml
		 FROM (tb_sewa tb_sewa LEFT JOIN tb_user tb_user ON tb_sewa.id_user= tb_user.id_user)
        LEFT JOIN tb_sepeda tb_sepeda ON tb_sewa.id_sepeda = tb_sepeda.id_sepeda");
		while($x = mysqli_fetch_array($data)){
			$hasil[] = $x;
		}
		return $hasil;
	}

	function tampil_user(){
		$data = mysqli_query($this->koneksi_db,"SELECT * FROM tb_user");
		while($x = mysqli_fetch_array($data)){
			$hasil[] = $x;
		}
		return $hasil;
	}

	function input($id_sepeda,$merk,$jenis,$stok,$f){						
		mysqli_query($this->koneksi_db,"INSERT INTO tb_sepeda (id_sepeda,merk,jenis,stok,f) values('$id_sepeda','$merk','$jenis','$stok','$f')");
	}

	function hapus($id){
		$query=mysqli_query($this->koneksi_db,"SELECT * FROM tb_sepeda WHERE id_sepeda='$id'");
		$data=mysqli_fetch_array($query);
		
		$berhasil = mysqli_query($this->koneksi_db,"DELETE FROM tb_sepeda where id_sepeda='$id'");

		if (file_exists('foto/'.$data['f'])) {
 			 unlink('foto/'.$data['f']);
			}

		if($berhasil){
			echo "<script>alert('Data Berhasil DiHapus');</script>";
			echo "<meta http-equiv='refresh' content='0; url=admin_index.php?menua=tampil_sepeda'>";
		}
		else {
			echo "<script>alert('Data Tidak Bisa Dihapus! Sedang Digunakan!');</script>";
			echo "<meta http-equiv='refresh' content='0; url=admin_index.php?menua=tampil_sepeda'>";
				}
	}

	function edit($id){
		$data = mysqli_query($this->koneksi_db,"SELECT * FROM tb_sepeda where id_sepeda='$id'");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}

		return $hasil;
	}

	function update($id,$merk,$jenis,$stok,$f){

		$query=mysqli_query($this->koneksi_db,"SELECT * FROM tb_sepeda WHERE id_sepeda='$id'");
		$data=mysqli_fetch_array($query);

		// Proses ubah data ke Database
		$berhasil=mysqli_query($this->koneksi_db,"UPDATE tb_sepeda set merk='$merk', jenis='$jenis', stok='$stok', f='$f' where id_sepeda='$id'");

			if(is_file("foto/".$data['f'])) {// Jika gambar ada
					// Hapus file gambar sebelumnya yang ada di folder images
            		unlink("foto/".$data['f']); 
        			}

        if($berhasil){
			echo "<script>alert('Data Berhasil Di UPDATE');</script>";
			echo "<meta http-equiv='refresh' content='0; url=admin_index.php?menua=tampil_sepeda'>";
		}
		else {
			echo "<script>alert('Data GAGAL di UPDATE!');</script>";
			echo "<meta http-equiv='refresh' content='0; url=admin_index.php?menua=tampil_sepeda'>";
				}
		
	}

	function update_nonfoto($id,$merk,$jenis,$stok){
		$berhasil = mysqli_query($this->koneksi_db,"UPDATE tb_sepeda set merk='$merk', jenis='$jenis', stok='$stok' where id_sepeda='$id'");

		if($berhasil){
			echo "<script>alert('Data Berhasil Di UPDATE');</script>";
			echo "<meta http-equiv='refresh' content='0; url=admin_index.php?menua=tampil_sepeda'>";
		}
		else {
			echo "<script>alert('Data GAGAL di UPDATE!');</script>";
			echo "<meta http-equiv='refresh' content='0; url=admin_index.php?menua=tampil_sepeda'>";
				}

	}


	public function check_login($emailusername, $password){

			$sql2="SELECT uid from users WHERE uemail='$emailusername' or uname='$emailusername' and upass='$password'";

        	$result = mysqli_query($this->koneksi_db,$sql2);
        	$count_row = $result->num_rows;

	        if ($count_row > 0) {
	            $user_data = mysqli_fetch_array($result);
	            $_SESSION['login'] = true;
	            $_SESSION['uid'] = $user_data['uid'];
	            return true;
	        }
	        else{
			    return false;
			}
    	}

    	/*** starting the session ***/
	    public function get_session(){
	        return $_SESSION['login'];
	    }
	
	public function logout(){ 

       // Hapus session 
	   session_start();
       session_destroy(); 

       // Hapus user_session 

       unset($_SESSION['login']); 

       return true; 

     } 

}
?>
