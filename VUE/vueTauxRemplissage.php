<?php 
require('MODELE/tauxRemplissage.php');
$titre = 'Dashboard'; 
//déclaration temporaire des variables 
$tauxRemplissageGeneral = 100;
$tauxRemplissageRDC = 25;
$tauxRemplissage1erEtage = 50;
$tauxRemplissage2iemeEtage = 0;
$tauxRemplissageClasseEnfant = 100;
$tauxRemplissageClasseFemme = 80;
$tauxRemplissageClasseHomme = 60;
$tauxRemplissageClasseVide = 40;
$tauxRemplissageClasseMixte = 20;
?>

<div class="tauxRemplissage">
    <h2>Taux de remplissage des chambres</h2>
    <div class="container">
        <div class="row">
            <div class="col">
                <h3>Taux de remplissage général</h3>
                <p style="color: green; font-weight:bolder"><?php echo($tauxRemplissageGeneral);?>%</p>
            </div>
        </div> <br>
        <div class="row">
            <h3>Taux de remplissage par étage</h3>
            <div class="col-12 col-lg-4">
                <h4>RDC</h4>
                <p><?php echo($tauxRemplissageRDC);?>%</p>
            </div>
            <div class="col-12 col-lg-4">
                <h4>1er étage</h4>
                <p><?php echo($tauxRemplissage1erEtage);?>%</p>
            </div>
            <div class="col-12 col-lg-4">
                <h4>2ieme étage</h4>
                <p><?php echo($tauxRemplissage2iemeEtage);?>%</p>
            </div>
        </div> <br>
        <div class="row">
            <h3>Taux de remplissage par classe</h3>
            <div class="col-12 col-lg-4">
                <h4>Classe Enfant</h4>
                <p><?php echo($tauxRemplissageClasseEnfant);?>%</p>
            </div>
            <div class="col-12 col-lg-4">
                <h4>Classe Femme</h4>
                <p><?php echo($tauxRemplissageClasseFemme);?>%</p>
            </div>
            <div class="col-12 col-lg-4">
                <h4>Classe Homme</h4>
                <p><?php echo($tauxRemplissageClasseHomme);?>%</p>
            </div>
            <div class="col-12 col-lg-4">
                <h4>Classe Vide</h4>
                <p><?php echo($tauxRemplissageClasseVide);?>%</p>
            </div>
            <div class="col-12 col-lg-4">
                <h4>Classe Mixte</h4>
                <p><?php echo($tauxRemplissageClasseMixte);?>%</p>
            </div>
        </div>
    </div>
</div>
