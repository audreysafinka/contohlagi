<?php
extract($_GET);
if(isset($menua))
{
if($menua=="tampil_sepeda") include "sepeda_tampil.php";
	else if($menua=="load_sepeda") include "sepeda_load.php";
	else if($menua=="input_sepeda") include "sepeda_input.php";
	else if($menua=="edit_sepeda") include "sepeda_edit.php";

	else if($menua=="tampil_user") include "user_tampil.php";
	else if($menua=="load_user") include "user_load.php";
	else if($menua=="edit_user") include "user_edit.php";

	else if($menua=="tampil_sewa") include "data_sewa.php";
	else if($menua=="load_sewa") include "data_load.php";
	else if($menua=="input_sewa") include "data_input.php";
	else if($menua=="edit_sewa") include "data_edit.php";

	else if($menua=="riwayat_sewa") include "riwayat_sewa.php";
}
?>