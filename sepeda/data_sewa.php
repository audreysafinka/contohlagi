<?php 
include 'class_sewa.php';
$sw = new sewa();
?>
<a href="admin_index.php?menua=input_sewa"><font size="5" face="display"><b>+ Input Data</b></a></font>
<br><br>
<table border="1" width="1100px" align="center">
	<tr>
		<th>NO</th>
		<th>ID Sewa</th>
		<th>ID User</th>
		<th>ID Sepeda</th>
		<th>TGL Booking</th>
		<th>ALAMAT</th>
		<th>Aksi</th>
	</tr>
	<?php
	$no = 1;
	foreach($sw->tampil_data() as $x){
	?>
	<tr align="center">
		<td><b><?php echo $no++."."; ?></b></td>
		<td ><center><?php echo $x['id_sewa']; ?></center></td>
		<td><?php echo $x['id_user']; ?> - <?php echo $x['nama']; ?></td>
		<td><?php echo $x['id_sepeda']; ?></td>
		<td><?php echo $x['tgl_boking']; ?></td>
		<td><?php echo $x['jml']; ?></td>
		<td>
			<font  face="display" color="	#2F4F4F"><center><b>
		    <a href="admin_index.php?menua=edit_sewa&id=<?php echo $x['id_sewa']; ?>&aksi=edit">Edit</a>
		    </b></center>

		    <font  face="display" color="	#2F4F4F"><center><b>
			<a href="admin_index.php?menua=load_sewa&id=<?php echo $x['id_sewa']; ?>&aksi=hapus">Hapus</a>
			</b></center>			
		</td>
	</tr>
	<?php 
	}
	?>
</table>
</div>
