<?php

require_once("ordonnanceDAO.php");
class ordonnance {
    private $id;
    private $patient_id;
    private $id_med;

    public function __construct($id,$patient_id,$id_med) {
        $this->id = $id;
        $this->patient_id = $patient_id;
        $this->id_med = $id_med;
    }

    public function __get($prop) {
        switch ($prop) {
            case 'id': return $this->id;
            case 'patient_id': return $this->patient_id;
            case 'id_med': return $this->id_med;
        }
    }

    public function save() {
        $dao = new ordonnanceDAO();
        $dao->enregistrerOrdonnance($this->id,$this->patient_id,$this->id_med);
    }
    public static function listeOrdonnances() {
        return ordonnanceDAO::listeOrdonnances();
    }

    public static function getOrdonnance($id) {
        return ordonnanceDAO::getOrdonnance($id);
    }

}
?>
