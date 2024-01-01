<?php 
require_once("personne.php");
class patientDAO{
	private $statement;
        private $handler;
	static function getPDO(){
		return new PDO("mysql:host=localhost;dbname=lifesaver","root","");
	}
	 function enregistrerPersonne($patient_id,$cin,$name,$Dateenter,$address,$email,$phone){
		$pdo=$this->getPDO();
		$res=$pdo->prepare("INSERT INTO patient(patient_id,cin,name,Dateenter,address,email,phone) values (?,?,?,?,?,?,?);");
		$res->execute(array($patient_id,$cin,$name,$Dateenter,$address,$email,$phone));
	}
	static function listePersonnes(){
		$pdo=patientDAO::getPDO();
		$res=$pdo->prepare("SELECT * FROM patient;");
		$res->execute();
		$lst=[];
		while($ligne=$res->fetch()){
			$lst[]=new Personne($ligne["patient_id"],$ligne["cin"],$ligne["name"],$ligne["Dateenter"],$ligne["address"],$ligne["email"],$ligne["phone"]);
		}
		return $lst;
	}
	static function getPersonne($patient_id){
		$pdo=patientDAO::getPDO();
		$res=$pdo->prepare("SELECT * FROM patient where patient_id=?;");
		$res->execute(array($patient_id));
		if($ligne=$res->fetch()){
			return new Personne($ligne["patient_id"],$ligne["cin"],$ligne["name"],$ligne["Dateenter"],$ligne["address"],$ligne["email"],$ligne["phone"]);
		}
		return null;
	}
	static function updatePersonne($patient_id,$cin,$name,$Dateenter,$address,$email,$phone){
		$pdo=patientDAO::getPDO();
		$res=$pdo->prepare("update patient SET cin=?,name=?,Dateenter=?,address=?,email=?,phone=? where patient_id=?; ");
		$res->execute(array($cin,$name,$Dateenter,$address,$email,$phone,$patient_id));
	}
	static function  supprimerPersonne($patient_id){
		$pdo=patientDAO::getPDO();
		$res=$pdo->prepare("delete from patient where patient_id=?;");
		$res->execute(array($patient_id));
	}	
}
?>