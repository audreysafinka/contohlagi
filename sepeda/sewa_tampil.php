<?php 
include 'class_sewa.php';
$sw = new sewa();
?>
<a href="index.php?menu=input_sewa"><font size="5" face="display"><b>+ Booking / Sewa Sepeda </b></a></font>
<br><br>
<table border="1" width="1100px">
	<tr>
		<th>NO</th>
		<th>ID Sewa</th>
		<th>ID User</th>
		<th>ID Sepeda</th>
		<th>TGL Booking</th>
		<th>Jumlah</th>
	</tr>
	<?php
	$no = 1;
	foreach($sw->tampil_data() as $x){
	?>
	<tr align=center>
		<td><b><?php echo $no++."."; ?></b></td>
		<td><center><?php echo $x['id_sewa']; ?></center></td>
		<td><?php echo $x['id_user']; ?> - <?php echo $x['nama']; ?></td>
		<td><?php echo $x['id_sepeda']; ?></td>
		<td><?php echo $x['tgl_boking']; ?></td>
		<td><?php echo $x['jml']; ?></td>
	</tr>
	<?php 
	}
	?>
</table>

<br><br><br>
<center><font size="7" face="display" color=#191970><b>Daftar Sepeda</b></font></center><br>
<table border=1 width="1100px">
	<tr>
		<th>NO</th>
		<th>ID Sepeda</th>
		<th>Merk</th>
		<th>Jenis</th>
		<th>Stok</th>
		<th>Foto</th>
	</tr>
	<?php
	$no = 1;
	foreach($sw->tampil_data_spd() as $x){
	?>
	<tr>
		<td align="center"><b><?php echo $no++; ?>.</b></td>
		<td><?php echo $x['id_sepeda']; ?></td>
		<td><?php echo $x['merk']; ?></td>
		<td><?php echo $x['jenis']; ?></td>
		<td align="center"><?php echo $x['stok']; ?></td>
		<?php echo"
			<td width=100  align=center>
				<img src=foto/$x[f] width=200 height=200>
			</td>";
	    ?> 
	</tr>
		<?php } ?>
</table>
</div>
