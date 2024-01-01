<?php
	require_once("personne.php");
	extract($_POST);
	$c=new personne($patient_id,$cin,$name,$Dateenter,$address,$email,$phone);
    $c->save();
    header("location:patient.php");
?> 