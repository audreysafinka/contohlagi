<?php 
include 'class_sepeda.php';
$spd= new sepeda();
?>
<a href="index.php?menu=input_user"><font size="5" face="display"><b>+ Input Data</b></a></font>
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
	foreach($spd->tampil_user() as $x){
	?>
	<tr>
		<td align="center"><b><?php echo $no++."."; ?></b></td>
		<td align="center"><?php echo $x['id_user']; ?></td>
		<td><?php echo $x['nama']; ?></td>
		<td><?php echo $x['nope']; ?></td>
		<td><?php echo $x['email']; ?></td>
		<td><?php echo $x['alamat']; ?></td>
	</tr>
	<?php 
	}
	?>
</table>
</div>