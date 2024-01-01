<?php

require_once("medecinDAO.php");

class Medecin {
    private $medecin_id;
    private $CIN;
    private $name;
    private $address;
    private $phone;
    private $specialite;
    private $email;

    public function __construct($medecin_id, $CIN, $name, $address, $phone, $specialite, $email) {
        $this->medecin_id = $medecin_id;
        $this->CIN = $CIN;
        $this->name = $name;
        $this->address = $address;
        $this->phone = $phone;
        $this->specialite = $specialite;
        $this->email = $email;
    }

    public function __get($prop) {
        switch ($prop) {
            case 'medecin_id': return $this->medecin_id;
            case 'CIN': return $this->CIN;
            case 'name': return $this->name;
            case 'address': return $this->address;
            case 'phone': return $this->phone;
            case 'specialite': return $this->specialite;
            case 'email': return $this->email;
        }
    }

    public function save() {
        $dao = new MedecinDAO();
        $dao->enregistrerMedecin($this->medecin_id,$this->CIN, $this->name, $this->address, $this->phone, $this->specialite, $this->email);
    }

    public function update() {
        $dao = new MedecinDAO();
        $dao->updateMedecin($this->medecin_id, $this->CIN, $this->name, $this->address, $this->phone, $this->specialite, $this->email);
    }

    public static function listeMedecins() {
        return MedecinDAO::listeMedecins();
    }

    public static function getMedecin($medecin_id) {
        return MedecinDAO::getMedecin($medecin_id);
    }

    static function delete($medecin_id) {
        MedecinDAO::deleteMedecin($medecin_id);
    }
}
?>
