<?php
require_once("med.php");

class MedecinDAO {
	private $statement;
        private $handler;
	static function getPDO(){
		return new PDO("mysql:host=localhost;dbname=lifesaver","root","");
	}
    public static function listeMedecins() {
		$pdo=medecinDAO::getPDO();
		$res=$pdo->prepare("SELECT * FROM medecin;");
		$res->execute();
		$lst=[];
		while($ligne=$res->fetch()){
			$lst[]=new Medecin($ligne["medecin_id"], $ligne["CIN"], $ligne["name"], $ligne["address"], $ligne["phone"], $ligne["specialite"], $ligne["email"]);
		}
		return $lst;    }

     static function getMedecin($medecin_id) {
		$pdo=medecinDAO::getPDO();
		$res=$pdo->prepare("SELECT * FROM medecin where medecin_id=?;");
		$res->execute(array($medecin_id));
		if($ligne=$res->fetch()){
			return new Medecin($ligne["medecin_id"], $ligne["CIN"], $ligne["name"], $ligne["address"], $ligne["phone"], $ligne["specialite"], $ligne["email"]);
		}
		return null;    }
    function enregistrerMedecin($medecin_id, $CIN, $name, $address, $phone, $specialite, $email) {
            $pdo=$this->getPDO();
            $res=$pdo->prepare("INSERT INTO medecin(medecin_id, CIN,name,address,phone,specialite, email) values (?,?,?,?,?,?,?);");
            $res->execute(array($medecin_id,$CIN, $name, $address, $phone, $specialite, $email));
    }  
    static function updateMedecin($medecin_id, $CIN, $name, $address, $phone, $specialite, $email) {
        $pdo=medecinDAO::getPDO();
		$res=$pdo->prepare("UPDATE medecin SET CIN=?,name=?,address=?,phone=?,specialite=?,email=? where medecin_id=?; ");
		$res->execute(array( $CIN, $name, $address, $phone, $specialite, $email,$medecin_id));
		
    }


    static function deleteMedecin($medecin_id) {
        $pdo=medecinDAO::getPDO();
		$res=$pdo->prepare("delete from medecin where medecin_id=?;");
		$res->execute(array($medecin_id));
	}
}
?>
