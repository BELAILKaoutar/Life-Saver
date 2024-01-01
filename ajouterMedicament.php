<?php
	require_once("medicament.php");
	extract($_POST);
	$c=new Medicament($id_med,$nom,$dosage,$code);
    $c->save();
    header("location:medication.php");
?> 