<?php 
include 'class_user.php';
$user = new user();
?>
<font size="6" face="display" color=#191970><b>Data Member/User</b></font><br>
<br><br>
<table border="1" width="1100px">
	<tr>
		<th>NO</th>
		<th>ID User</th>
		<th>Nama</th>
		<th>No HP</th>
		<th>Email</th>
		<th>Alamat</th>
		<th> Opsi </th>
	</tr>
	<?php
	$no = 1;
	foreach($user->tampil_data() as $x){
	?>
	<tr>
		<td align="center"><b><?php echo $no++."."; ?></b></td>
		<td><center><?php echo $x['id_user']; ?></center></td>
		<td><?php echo $x['nama']; ?></td>
		<td><?php echo $x['nope']; ?></td>
		<td><?php echo $x['email']; ?></td>
		<td><?php echo $x['alamat']; ?></td>
		<td>
		    <font  face="display" color="	#2F4F4F"><center><b>
		    <a href="admin_index.php?menua=edit_user&id=<?php echo $x['id_user']; ?>&aksi=edit">Edit</a>
		    </b></center>

		    <font  face="display" color="	#2F4F4F"><center><b>
			<a href="admin_index.php?menua=load_user&id=<?php echo $x['id_user']; ?>&aksi=hapus">Hapus</a>
			</b></center>			
		</td>
	</tr>
	<?php 
	}
	?>
</table>
</div>
