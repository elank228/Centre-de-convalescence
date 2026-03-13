<?php
//echo('testTauxRemplissage');
require_once 'MODELE/modele.php';

/*class tauxRemplissage extends Modele {
    //Renvoi le taux de remplissage géneral du centre
    public function tauxRemplissageGeneral() {
        $sql = 'SELECT `TauxRemplissage`() AS `TauxRemplissage`;';
        $result = $this->executerRequete($sql);
        return $result;
    }
    //Renvoi le taux de remplissage du RDC
    public function tauxRemplissageRDC() {
        $etg = 0;
        $sql = 'SELECT `TauxRemplissage_Etage`('+$etg+') AS `TauxRemplissage_Etage`;';
        $result = $this->executerRequete($sql);
        return $result;
    }
    //Renvoi le taux de remplissage du 1er étage
    public function tauxRemplissage1erEtage() {
        $etg = 1;
        $sql = 'SELECT `TauxRemplissage_Etage`('+$etg+') AS `TauxRemplissage_Etage`;';
        $result = $this->executerRequete($sql);
        return $result;
    }
    //Renvoi le taux de remplissage du 2ieme étage
    public function tauxRemplissage2iemeEtage() {
        $etg = 2;
        $sql = 'SELECT `TauxRemplissage_Etage`('+$etg+') AS `TauxRemplissage_Etage`;';
        $result = $this->executerRequete($sql);
        return $result;
    }
    //Renvoi le taux de remplissage de la classe Vide
    public function tauxRemplissageVide() {
        $cla = 4;
        $sql = 'SELECT `TauxRemplissage_Classe`('+$cla+') AS `TauxRemplissage_Classe`;';
        $result = $this->executerRequete($sql);
        return $result;
    }
    //Renvoi le taux de remplissage de la classe Mixte
    public function tauxRemplissageMixte() {
        $cla = 5;
        $sql = 'SELECT `TauxRemplissage_Classe`('+$cla+') AS `TauxRemplissage_Classe`;';
        $result = $this->executerRequete($sql);
        return $result;
    }
    //Renvoi le taux de remplissage de la classe Enfant
    public function tauxRemplissageEnfant() {
        $cla = 1;
        $sql = 'SELECT `TauxRemplissage_Classe`('+$cla+') AS `TauxRemplissage_Classe`;';
        $result = $this->executerRequete($sql);
        return $result;
    }
    //Renvoi le taux de remplissage de la classe Homme
    public function tauxRemplissageHomme() {
        $cla = 3;
        $sql = 'SELECT `TauxRemplissage_Classe`('+$cla+') AS `TauxRemplissage_Classe`;';
        $result = $this->executerRequete($sql);
        return $result;
    }
    //Renvoi le taux de remplissage de la classe Femme
    public function tauxRemplissageFemme() {
        $cla = 2;
        $sql = 'SELECT `TauxRemplissage_Classe`('+$cla+') AS `TauxRemplissage_Classe`;';
        $result = $this->executerRequete($sql);
        return $result;
    }
}*/
