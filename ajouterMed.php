<?php
	require_once("med.php");
	extract($_POST);
	$c=new Medecin($medecin_id, $CIN, $name, $address, $phone, $specialite, $email);
    $c->save();
    header("location:medecin.php");
?> 