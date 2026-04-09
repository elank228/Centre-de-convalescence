<?php
require_once 'MODELE/tauxRemplissage.php';
require_once 'VUE/Vue.php';

class controleurTauxRemplissage {
    private $modele;

    public function __construct() {
        $this->modele = new tauxRemplissage();
    }

    public function tauxRemplissage() {
        $vue = new Vue('TauxRemplissage');
        $vue->generer([
            'tauxGeneral' => $this->fetchValeur($this->modele->tauxRemplissageGeneral()),
            'tauxRDC'     => $this->fetchValeur($this->modele->tauxRemplissageRDC()),
            'taux1er'     => $this->fetchValeur($this->modele->tauxRemplissage1erEtage()),
            'taux2ieme'   => $this->fetchValeur($this->modele->tauxRemplissage2iemeEtage()),
            'tauxEnfant'  => $this->fetchValeur($this->modele->tauxRemplissageEnfant()),
            'tauxFemme'   => $this->fetchValeur($this->modele->tauxRemplissageFemme()),
            'tauxHomme'   => $this->fetchValeur($this->modele->tauxRemplissageHomme()),
            'tauxVide'    => $this->fetchValeur($this->modele->tauxRemplissageVide()),
            'tauxMixte'   => $this->fetchValeur($this->modele->tauxRemplissageMixte()),
        ]);
    }

    // Extrait la première valeur d'un résultat PDO
    private function fetchValeur($result) {
        if ($result) {
            $row = $result->fetch(PDO::FETCH_NUM);
            return $row ? $row[0] : '-';
        }
        return '-';
    }
}
