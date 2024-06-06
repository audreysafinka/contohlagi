<?php
                    $host = "localhost";
	 				$user = "root";
	 				$pass = "";
					$db = "db_sepeda";

					$koneksi_db = mysqli_connect($host, $user, $pass, $db);
					
					
$query = mysqli_query($koneksi_db, "SELECT max(id_user) as kodeTerbesar FROM tb_user");
$data = mysqli_fetch_array($query);
$kodeUS = $data['kodeTerbesar'];

$urutan = (int) substr($kodeUS, 4, 4);
$urutan++;

$huruf = "USR";
$kodeUS = $huruf . sprintf("%04s", $urutan);
?>


<form action="index.php?menu=load_user&aksi=tambah" method="post">
<center><font size="6" face="stencil" color="#008080" >
		<b>+Form Input Data+</b></a></font></center>

<table width="300px" align="center">

	<tr><td><b>ID User</b></td>
		<td>:</td>
		<td><input type="text" name="a" value="<?php echo $kodeUS  ?>" readonly></td>
	</tr>

	<tr><td><b>Nama</b></td>
		<td>:</td>
		<td><input type="text" name="b"></td>
	</tr>

	<tr><td><b>No HP</b></td>
		<td>:</td>
		<td><input type="number" name="c"></td>
	</tr>

	<tr><td><b>Email</b></td>
		<td>:</td>
		<td><input type="text" name="d"></td>
	</tr>

	<tr><td><b>Alamat</b></td>
		<td>:</td>
		<td><input type="text" name="e"></td>
	</tr>

	<tr><td colspan="3">
		<center><input type="submit" value="Simpan"></center>
	</td></tr>

</table></form>