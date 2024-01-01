<?php
require_once("medicament.php");

class medicamentDAO {
	private $statement;
        private $handler;
	static function getPDO(){
		return new PDO("mysql:host=localhost;dbname=lifesaver","root","");
	}
    public static function listeMedicaments() {
		$pdo=medicamentDAO::getPDO();
		$res=$pdo->prepare("SELECT * FROM medicament;");
		$res->execute();
		$lst=[];
		while($ligne=$res->fetch()){
			$lst[]=new Medicament($ligne["id_med"], $ligne["nom"], $ligne["dosage"], $ligne["code"]);
		}
		return $lst;    }

     static function getMedicament($id_med) {
		$pdo=medicamentDAO::getPDO();
		$res=$pdo->prepare("SELECT * FROM medicament where id_med=?;");
		$res->execute(array($id_med));
		if($ligne=$res->fetch()){
			return new Medicament($ligne["id_med"], $ligne["nom"], $ligne["dosage"], $ligne["code"]);
		}
		return null;    }
    function enregistrerMedicament($id_med, $nom, $dosage, $code) {
            $pdo=$this->getPDO();
            $res=$pdo->prepare("INSERT INTO medicament(id_med,nom,dosage,code) values (?,?,?,?);");
            $res->execute(array($id_med, $nom, $dosage, $code));
    }  
    static function updateMedicament($id_med, $nom, $dosage, $code) {
        $pdo=medicamentDAO::getPDO();
		$res=$pdo->prepare("UPDATE medicament SET nom=?,dosage=?,code=? where id_med=?; ");
		$res->execute(array(  $nom, $dosage, $code,$id_med));
		
    }
    static function deleteMedicament($id_med) {
        $pdo=medicamentDAO::getPDO();
		$res=$pdo->prepare("delete from medicament where id_med=?;");
		$res->execute(array($id_med));
	}
}
?>
