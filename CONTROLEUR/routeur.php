<?php

require_once 'CONTROLEUR/controleurTauxRemplissage.php';
require_once 'CONTROLEUR/controleurGestionChambre.php';
require_once 'CONTROLEUR/controleurRepas.php';
require_once 'VUE/Vue.php';

class Routeur
{
    private $ctrlTauxRemplissage;
    private $ctrlGestionChambre;
    private $ctrlRepas;

    public function __construct()
    {
        $this->ctrlTauxRemplissage = new controleurTauxRemplissage();
        $this->ctrlGestionChambre  = new controleurGestionChambre();
        $this->ctrlRepas           = new controleurRepas();
    }

    public function routerRequete()
    {
        try {
            if (isset($_GET['action'])) {
                switch ($_GET['action']) {

                    // --- Gestion des chambres ---
                    case 'gestionChambre':
                        $this->ctrlGestionChambre->afficherChambres();
                        break;

                    case 'admissionForm':
                        $this->ctrlGestionChambre->afficherFormulaireAdmission();
                        break;

                    case 'admettrePatient':
                        $numeroLit   = $this->getParametre($_POST, 'numeroLit');
                        $numeroClasse = $this->getParametre($_POST, 'numeroClasse');
                        $this->ctrlGestionChambre->admettrePatient($numeroLit, $numeroClasse);
                        break;

                    case 'sortieForm':
                        $this->ctrlGestionChambre->afficherFormulaireSortie();
                        break;

                    case 'sortirPatient':
                        $numeroLit = $this->getParametre($_POST, 'numeroLit');
                        $this->ctrlGestionChambre->sortirPatient($numeroLit);
                        break;

                    // --- Service des repas ---
                    case 'repas':
                        $this->ctrlRepas->afficherMenu();
                        break;

                    case 'repasRDC':
                        $this->ctrlRepas->afficherRDC();
                        break;

                    case 'repasPremier':
                        $this->ctrlRepas->afficherPremierEtage();
                        break;

                    case 'repasDeuxieme':
                        $this->ctrlRepas->afficherDeuxiemeEtage();
                        break;

                    default:
                        throw new Exception('Action non valide');
                }
            } else {
                $this->ctrlTauxRemplissage->tauxRemplissage();
            }
        } catch (Exception $e) {
            $this->erreur($e->getMessage());
        }
    }

    private function erreur($msgErreur)
    {
        $vue = new Vue('Erreur');
        $vue->generer(['msgErreur' => $msgErreur]);
    }

    private function getParametre($tableau, $nom)
    {
        if (isset($tableau[$nom])) {
            return $tableau[$nom];
        } else {
            throw new Exception('Paramètre ' . $nom . ' absent');
        }
    }
}
