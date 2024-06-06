<?php 
include 'class_sewa.php';
$sw = new sewa();
?>

<font size="5" face="display" color="#191970"><b> Riwayat Penyewaan Sepeda</b></a></font>
<br><br>
<table border="1" width="1100px">
	<tr>
		<th>NO</th>
		<th>ID RIWAYAT</th>
		<th>ID Sewa</th>
		<th>ID Sepeda</th>
	</tr>
<?php
	$no = 1;
	foreach($sw->tampil_riwayat() as $x){
	?>
	<tr align=center>
		<td><b><?php echo $no++."."; ?></b></td>
		<td><center><?php echo $x['id_riwayat']; ?></center></td>
		<td><?php echo $x['id_sewa']; ?></td>
		<td><?php echo $x['id_sepeda']; ?></td>
	</tr>
	<?php 
	}
	?>
</table>