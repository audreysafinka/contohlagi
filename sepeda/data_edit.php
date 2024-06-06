<?php 
include 'class_sewa.php';
$sw = new sewa();
?>

<?php
                    $host = "localhost";
	 				$user = "root";
	 				$pass = "";
					$db = "db_sepeda";

					$koneksi_db = mysqli_connect($host, $user, $pass, $db);
					?>

<center><font size="6" face="stencil" color="#008080" >
		<b>+Form Update Data+</b></a></font></center>

<form action="admin_index.php?menua=load_sewa&aksi=update" method="post">
<?php
foreach($sw->edit($_GET['id']) as $y){   ?>
<table  width="300px" align="center">

		<tr><td>
			<input type="hidden" name="a" value="<?php echo $y['id_sewa'] ?>">
		</td></tr>

		<tr><td><b>ID User</b></td>
			<td>:</td>
			<td><select name=b>
			<option value=0>- Pilih User -</option>
			<?php
				$data	= mysqli_query($koneksi_db,"SELECT * FROM tb_user");
						while($row = mysqli_fetch_array($data))
							{ echo "<option value=$row[id_user] selected >$row[id_user] - $row[nama]</option>";}
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
							{ echo "
							<option value=$row[id_sepeda] selected >$row[id_sepeda] - $row[jenis] - (stok : $row[stok])</option>";}
			?></td>
	</tr>

	<tr><td><b>TGL BOOKING</b></td>
		<td>:</td>
		<td><input type="text" name="d" value="<?php echo $y['tgl_boking']; ?>"></td>

	<tr><td></td>
		<td></td>
		<td>Format : YYYY-MM-DD</td>
	</tr>

	<tr></tr>
	
	<tr><td><b>Jumlah</b></td>
		<td>:</td>
		<td><input type="text" name="e" value="<?php echo $y['jml']; ?>"></td>
	</tr>
		
	<tr><td></td></tr>
	<tr><td colspan="3"><center><input type="submit" value="Update Data"></center></td></tr>

</table>
<?php } ?>
</form>
