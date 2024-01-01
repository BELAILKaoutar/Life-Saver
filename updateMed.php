<?php
	require_once("med.php");
	extract($_POST);
	$p=new Medecin($medecin_id,$CIN,$name,$address,$phone,$specialite,$email);
    $p->update();
    header("location:medecin.php");
?>
