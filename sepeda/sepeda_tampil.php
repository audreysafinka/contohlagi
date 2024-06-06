<?php 
include 'class_sepeda.php';
$spd = new sepeda();
?>
<a href="admin_index.php?menua=input_sepeda"><font size="5" face="display"><b>+ Input Data</b></a></font>
<br><br>
<table border="1" width="1100px">
	<tr>
		<th>NO</th>
		<th>ID Sepeda</th>
		<th>Merk</th>
		<th>Jenis</th>
		<th>Stok</th>
		<th>Foto</th>
		<th>Opsi</th>
	</tr>
	<?php
	$no = 1;
	foreach($spd->tampil_data() as $x){
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
		<td>
		    <font  face="display" color="	#2F4F4F"><center><b>
		    <a href="admin_index.php?menua=edit_sepeda&id=<?php echo $x['id_sepeda']; ?>&aksi=edit">Edit</a>
		    </b></center>

		    <font  face="display" color="	#2F4F4F"><center><b>
			<a href="admin_index.php?menua=load_sepeda&id=<?php echo $x['id_sepeda']; ?>&aksi=hapus">Hapus</a>
			</b></center>			
		</td>
	</tr>
	<?php 
	}
	?>
</table>

</div>