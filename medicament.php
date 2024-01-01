<?php

require_once("medicamentDAO.php");
class Medicament {
    private $id_med;
    private $nom;
    private $dosage;
    private $code;

    public function __construct($id_med, $nom, $dosage, $code) {
        $this->id_med = $id_med;
        $this->nom = $nom;
        $this->dosage = $dosage;
        $this->code = $code;
    }

    public function __get($prop) {
        switch ($prop) {
            case 'id_med': return $this->id_med;
            case 'nom': return $this->nom;
            case 'dosage': return $this->dosage;
            case 'code': return $this->code;
        }
    }

    public function save() {
        $dao = new medicamentDAO();
        $dao->enregistrerMedicament($this->id_med,$this->nom, $this->dosage, $this->code);
    }

    public function update() {
        $dao = new medicamentDAO();
        $dao->updateMedicament($this->id_med,$this->nom, $this->dosage, $this->code);
    }
    public static function listeMedicaments() {
        return medicamentDAO::listeMedicaments();
    }

    public static function getMedicament($id_med) {
        return medicamentDAO::getMedicament($id_med);
    }

    static function delete($id_med) {
        medicamentDAO::deleteMedicament($id_med);
    }
}
?>
