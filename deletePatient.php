<?php
	require_once("personne.php");
	$patient_id=$_GET['patient_id'];
	Personne::supprimer($patient_id);
	header("location:patient.php");

?>