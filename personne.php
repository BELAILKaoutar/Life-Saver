<?php 
require_once("patientDAO.php");
class Personne{
	private $patient_id;
	private $cin;
    private $name;
    private $Dateenter;
    private $address;
	private $email;
	private $phone;
	function __construct($patient_id,$cin,$name,$Dateenter,$address,$email,$phone){
		$this->patient_id=$patient_id;
		$this->cin=$cin;
        $this->name=$name;
		$this->Dateenter=$Dateenter;
		$this->address=$address;
		$this->email=$email;
		$this->phone=$phone;

	}
	function __get($prop){
		switch ($prop) {
			case 'patient_id':  return $this->patient_id;
			case 'cin':  return $this->cin;  
            case 'name':  return $this->name;
			case 'Dateenter':  return $this->Dateenter;
			case 'address':  return $this->address;
			case 'email':  return $this->email; 
			case 'phone':  return $this->phone;

		}

	}
	 function save(){
		$dao=new patientDAO();
		$dao->enregistrerPersonne($this->patient_id,$this->cin,$this->name,$this->Dateenter,$this->address,$this->email,$this->phone);
	}
	static function listePersonnes(){
		return patientDAO::listePersonnes();
	}
	static function  getPatient($patient_id){
		return patientDAO::getPersonne($patient_id);
	}
	function update(){
		patientDAO::updatePersonne($this->patient_id,$this->cin,$this->name,$this->Dateenter,$this->address,$this->email,$this->phone);
	}
	static function  supprimer($patient_id){
		patientDAO::supprimerPersonne($patient_id);
	}

}

?>