<?php
	require_once("medicament.php");
	$id_med=$_GET['id_med'];
	Medicament::delete($id_med);
	header("location:medication.php");

?>