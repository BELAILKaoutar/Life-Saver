<?php
	require_once("medicament.php");
	extract($_POST);
	$p=new Medicament($id_med, $nom, $dosage, $code);
    $p->update();
    header("location:Medication.php");
?>