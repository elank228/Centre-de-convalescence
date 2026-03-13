<?php

require_once 'MODELE/tauxRemplissage.php';
require_once 'VUE/Vue.php';

class controleurTauxRemplissage {
    private $taux;
    public function __construct() {
        $this->taux = new tauxRemplissage();
    }
    
    //Affiche la liste de tous les billets du blog
    public function tauxRemplissage() {
        $taux = $this->taux->tauxRemplissageGeneral();
        $vue = new Vue('tauxRemplissage');
        $vue->generer(array('taux' => $taux));
    }
}
