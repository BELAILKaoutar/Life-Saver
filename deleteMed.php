<?php
	require_once("med.php");
	$medecin_id=$_GET['medecin_id'];
	Medecin::delete($medecin_id);
	header("location:medecin.php");

?>