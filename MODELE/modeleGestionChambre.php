<?php
require_once 'MODELE/modele.php';

class modeleGestionChambre extends Modele {

    public function ChambresVidesEnfants() {
       
        $sql = 'SELECT `ChambresVidesEnfants` AS `ChambresVidesEnfants`;';
        $result = $this->executerRequete($sql);
        return $result;
    }

    public function ChambresVidesFemme() {
       
        $sql = 'SELECT `ChambresVidesFemme` AS `ChambresVidesFemme`;';
        $result = $this->executerRequete($sql);
        return $result;
    }

    public function ChambresVidesG() {
       
        $sql = 'SELECT `ChambresVidesG` AS `ChambresVidesG`;';
        $result = $this->executerRequete($sql);
        return $result;
    }

    public function ChambresVidesHomme() {
       
        $sql = 'SELECT `ChambresVidesHomme` AS `ChambresVidesHomme`;';
        $result = $this->executerRequete($sql);
        return $result;
    }

    public function ChambresVidesMixte() {
       
        $sql = 'SELECT `ChambresVidesMixte` AS `ChambresVidesMixte`;';
        $result = $this->executerRequete($sql);
        return $result;
    }

    public function MoitieRempliG() {
       
        $sql = 'SELECT `MoitieRempliG` AS `MoitieRempliG`;';
        $result = $this->executerRequete($sql);
        return $result;
    }

    public function MoitieRemplieEnfants() {
       
        $sql = 'SELECT `MoitieRemplieEnfants` AS `MoitieRemplieEnfants`;';
        $result = $this->executerRequete($sql);
        return $result;
    }

    public function MoitieRemplieFemmes() {
       
        $sql = 'SELECT `MoitieRemplieFemmes` AS `MoitieRemplieFemmes`;';
        $result = $this->executerRequete($sql);
        return $result;
    }

    public function MoitieRemplieMixte() {
       
        $sql = 'SELECT `MoitieRemplieMixte` AS `MoitieRemplieMixte`;';
        $result = $this->executerRequete($sql);
        return $result;
    }

}

?>