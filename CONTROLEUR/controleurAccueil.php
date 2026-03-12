<?php

require_once 'MODELE/tauxRemplissage.php';
require_once 'VUE/Vue.php';

class controleurAccueil {
    private $accueil;
    /*public function __construct() {
        $this->accueil = new Accueil();
    }*/

    //Affiche le choix des vues a affichés
    public function acceuil() {
        $vue = new Vue('accueil');
        $vue->generer(array('billets' => $billets));
    }
}
