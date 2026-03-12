<?php
//echo('testTauxRemplissage');
require_once 'MODELE/modele.php';

class tauxRemplissage extends Modele {

    //Renvoi le taux remplissage géneral
    public function tauxRemplissageGeneral() {
        $sql = 'SELECT `TauxRemplissage`() AS `TauxRemplissage`;';
        $result = $this->executerRequete($sql);
        return $result;
    }
}
