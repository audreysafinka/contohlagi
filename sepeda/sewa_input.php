<?php
                    $host = "localhost";
	 				$user = "root";
	 				$pass = "";
					$db = "db_sepeda";

					$koneksi_db = mysqli_connect($host, $user, $pass, $db);
					
$query = mysqli_query($koneksi_db, "SELECT max(id_sewa) as kodeTerbesar FROM tb_sewa");
$data = mysqli_fetch_array($query);
$kodeSW= $data['kodeTerbesar'];

$urutan = (int) substr($kodeSW, 4, 4);
$urutan++;

$huruf = "SW";
$kodeSW = $huruf . sprintf("%04s", $urutan);

$query_rw = mysqli_query($koneksi_db, "SELECT max(id_riwayat) as kodeRWT FROM tb_riwayat");
		$data_rw = mysqli_fetch_array($query_rw);
		$kodeRW= $data_rw['kodeRWT'];

		$urutan_rw = (int) substr($kodeRW, 4, 4);
		$urutan_rw++;

		$huruf_rw = "RW";
		$kodeRW = $huruf_rw . sprintf("%04s", $urutan_rw);
?>
					

<form action="index.php?menu=load_sewa&aksi=tambah" method="post">
<center><font size="6" face="stencil" color="#008080" >
		<b>+Form Input Data+</b></a></font></center>

<table width="300px" align="center">
	<tr><td><input type="hidden" name="id_riwayat" value="<?php echo $kodeRW ?>"></td></tr>

	<tr><td><b>ID Sewa</b></td>
		<td>:</td>
		<td><input type="text" name="a" value="<?php echo $kodeSW ?>" readonly></td>
	</tr>

	<tr><td><b>ID User</b></td>
		<td>:</td>
		<td><select name=b>
			<option value=0>- Pilih User -</option>
			<?php
				$data	= mysqli_query($koneksi_db,"SELECT * FROM tb_user");
						while($row = mysqli_fetch_array($data))
							{ echo "<option value=$row[id_user]>$row[id_user] - $row[nama]</option>";}
			?>
		</select></td>
	</tr>

	<tr><td><b>ID Sepeda</b></td>
		<td>:</td>
		<td><select name=c>
			<option value=0>- Pilih Sepeda -</option>
			<?php
				$data	= mysqli_query($koneksi_db,"SELECT * FROM tb_sepeda");
						while($row = mysqli_fetch_array($data))
							{ echo "<option value=$row[id_sepeda]>$row[id_sepeda] - $row[jenis] - (stok : $row[stok])</option>";}
			?></td>
	</tr>

	<tr><td><b>TGL BOOKING</b></td>
		<td>:</td>
		<td><input type="text" name="d"></td>

	<tr><td></td>
		<td></td>
		<td>Format : YYYY-MM-DD</td>
	</tr>

	<tr></tr>
	
	<tr><td><b>Jumlah</b></td>
		<td>:</td>
		<td><input type="text" name="e"></td>
	</tr>

	<tr><td colspan="3">
		<center><input type="submit" value="Simpan"></center>
	</td></tr>

</table></form>