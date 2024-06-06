<?php
                    $host = "localhost";
	 				$user = "root";
	 				$pass = "";
					$db = "db_sepeda";

					$koneksi_db = mysqli_connect($host, $user, $pass, $db);
					
$query = mysqli_query($koneksi_db, "SELECT max(id_sepeda) as kodeTerbesar FROM tb_sepeda");
$data = mysqli_fetch_array($query);
$kodeSPD = $data['kodeTerbesar'];

$urutan = (int) substr($kodeSPD, 4, 4);
$urutan++;

$huruf = "SPD";
$kodeSPD = $huruf . sprintf("%04s", $urutan);
 
?>

<form action="admin_index.php?menua=load_sepeda&aksi=tambah" method="post" enctype=multipart/form-data>
<center><font size="6" face="stencil" color="#008080" >
		<b>+Form Input Data+</b></a></font></center>

<table width="300px" align="center">

	<tr><td><b>ID Sepeda</b></td>
		<td>:</td>
		<td><input  type="text" name="a" value="<?php echo $kodeSPD  ?>" readonly  ></td>
	</tr>

	<tr><td><b>Merk</b></td>
		<td>:</td>
		<td><input type="text" name="b"></td>
	</tr>

	<tr><td><b>Jenis</b></td>
		<td>:</td>
		<td><input type="text" name="c"></td>
	</tr>

	<tr><td><b>Stok</b></td>
		<td>:</td>
		<td><input type="number" name="d"></td>
	</tr>

	<tr><td><b>Foto</b></td>
		<td>:</td>
		<td><input type="file" name="f"></td>
	</tr>

	<tr><td colspan="3">
		<center><input type="submit" value="Simpan"></center>
	</td></tr>

</table></form>
 