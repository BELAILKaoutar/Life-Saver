<?php
	require_once("personne.php");
	extract($_POST);
	$p=new personne($patient_id,$cin,$name,$Dateenter,$address,$email,$phone);
    $p->update();
    header("location:patient.php");
?>
