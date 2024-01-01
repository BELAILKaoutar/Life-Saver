<?php
require_once("ordonnance.php");

class ordonnanceDAO {
	private $statement;
    private $handler;
	static function getPDO(){
		return new PDO("mysql:host=localhost;dbname=lifesaver","root","");
	}
    public static function listeOrdonnances() {
		$pdo=ordonnanceDAO::getPDO();
		$res=$pdo->prepare("SELECT * FROM ordonnance;");
		$res->execute();
		$lst=[];
		while($ligne=$res->fetch()){
			$lst[]=new ordonnance($ligne["id"], $ligne["patient_id"], $ligne["id_med"]);
		}
		return $lst;    }

     static function getOrdonnance($id) {
		$pdo=ordonnanceDAO::getPDO();
		$res=$pdo->prepare("SELECT * FROM ordonnance where id=?;");
		$res->execute(array($id));
		if($ligne=$res->fetch()){
			return new ordonnance($ligne["id"], $ligne["patient_id"], $ligne["id_med"]);
		}
		return null;   
	 }
    function enregistrerOrdonnance($id, $patient_id, $id_med) {
        $pdo=$this->getPDO();
        $res=$pdo->prepare("INSERT INTO ordonnance(id, patient_id, id_med) values (?,?,?);");
        $res->execute(array($id,$patient_id,$id_med));
    }  
}
?>
