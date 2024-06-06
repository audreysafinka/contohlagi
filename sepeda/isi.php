<?php
extract($_GET);
if(isset($menu))
{
	if($menu=="tampil_user") include "data_user.php";
	else if($menu=="load_user") include "user_load.php";
	else if($menu=="input_user") include "user_input.php";

	else if($menu=="tampil_sewa") include "sewa_tampil.php";
	else if($menu=="load_sewa") include "sewa_load.php";
	else if($menu=="input_sewa") include "sewa_input.php";
	
}
?>
