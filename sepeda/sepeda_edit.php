<?php 
include 'class_sepeda.php';
$spd = new sepeda();
?>

<center><font size="6" face="stencil" color="#008080" >
		<b>+Form Update Data+</b></a></font></center>

<form action="admin_index.php?menua=load_sepeda&aksi=update" method="post" enctype=multipart/form-data>
<?php
foreach($spd->edit($_GET['id']) as $y){   ?>
<table  width="300px" align="center">
	<tr>
		<td><b>Merk</b></td>
		<td>:</td>
		<td>
			<input type="hidden" name="a" value="<?php echo $y['id_sepeda'] ?>">
			<input type="text" name="b" value="<?php echo $y['merk'] ?>">
		</td>
	</tr>
	<tr>
		<td><b>Jenis</b></td>
		<td>:</td>
		<td><input type="text" name="c" value="<?php echo $y['jenis'] ?>"></td>
	</tr>
	<tr>
		<td><b>Stok</b></td>
		<td>:</td>
		<td><input type="number" name="d" value="<?php echo $y['stok'] ?>"></td>
	</tr>

	<tr><td><b>Foto</b></td>
		<td>:</td>
		<td><input type="file" name="f" value="<?php echo $y['f'] ?>"></td>
	</tr>
	
	<tr><td></td></tr>
	<tr><td colspan="3"><center><input type="submit" value="Update Data"></center></td></tr>

</table>
<?php } ?>
</form>
