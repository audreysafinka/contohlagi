<?php 

class koneksi{

    var $host = "localhost";
    var $user = "root";
    var $pass = "";
    var $db = "db_sepeda";
    var $koneksi_db;

    function __construct(){
        $this->koneksi_db = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
        if (!$this->koneksi_db){
            echo "Koneksi database gagal : " . mysqli_connect_error();
        } else {
            echo "Koneksi database berhasil.";
        }
    }
}

?>
