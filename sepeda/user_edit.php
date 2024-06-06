<?php 
include 'class_user.php';
$user = new user();
?>

<center><font size="6" face="stencil" color="#008080" >
		<b>+Form Update Data+</b></a></font></center>

<form action="admin_index.php?menua=load_user&aksi=update" method="post">
<?php
foreach($user->edit($_GET['id']) as $y){   ?>
<table  width="300px" align="center">
	<tr>
		<td><b>Nama</b></td>
		<td>:</td>
		<td>
			<input type="hidden" name="a" value="<?php echo $y['id_user'] ?>">
			<input type="text" name="b" value="<?php echo $y['nama'] ?>">
		</td>
	</tr>
	<tr>
		<td><b>No HP</b></td>
		<td>:</td>
		<td><input type="number" name="c" value="<?php echo $y['nope'] ?>"></td>
	</tr>
	<tr>
		<td><b>Email</b></td>
		<td>:</td>
		<td><input type="text" name="d" value="<?php echo $y['email'] ?>"></td>
	</tr>
	<tr>
		<td><b>Alamat</b></td>
		<td>:</td>
		<td><input type="text" name="e" value="<?php echo $y['alamat'] ?>"></td>
	</tr>
	<tr><td></td></tr>
	<tr><td colspan="3"><center><input type="submit" value="Update Data"></center></td></tr>

</table>
<?php } ?>
</form>
