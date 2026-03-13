<?php

require_once 'CONTROLEUR/controleurTauxRemplissage.php';
require_once 'CONTROLEUR/controleurAccueil.php';
//ajouter require_once pour chaque controleur
require_once 'VUE/Vue.php';

class Routeur
{
    private $ctrlTauxRemplissage;
    private $ctrlAccueil;
    //ajouter private $ pour chaque controleur

    public function __construct()
    {
        $this->ctrlTauxRemplissage = new controleurTauxRemplissage();
        $this->ctrlAccueil = new controleurAccueil();
        //ajouter pour chaque controleur
    }

    //Traite une requête entrante
    public function routerRequete()
    {
        try {
            if (isset($_GET['action'])) {
                if ($_GET['action'] == 'x') {
                    
                } else if ($_GET['action'] == 'commenter') {
                    $auteur = $this->getParametre($_POST, 'auteur');
                    $contenu = $this->getParametre($_POST, 'contenu');
                    $idBillet = $this->getParametre($_POST, 'id');
                    $this->ctrlBillet->commenter($auteur, $contenu, $idBillet);
                } else {
                    throw new Exception('Action non valide');
                }
            } else { //aucune action définie : affichage des taux de remplissage
                $this->ctrlTauxRemplissage->tauxRemplissage();
            }
        } catch (Exception $e) {
            $this->erreur($e->getMessage());
        }
    }

    //Affiche une erreur
    private function erreur($msgErreur)
    {
        $vue = new Vue('Erreur');
        $vue->generer(array('msgErreur' => $msgErreur));
    }

    //Recherche un paramètre dans un tableau
    private function getParametre($tableau, $nom)
    {
        if (isset($tableau[$nom])) {
            return $tableau[$nom];
        } else {
            throw new Exception('Paramètre ' . $nom . ' absent');
        }
    }
}
