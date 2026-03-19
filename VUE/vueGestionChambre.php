<?php
$y = array(
    1 => '001', 2 => '002', 3 => '003', 4 => '004', 5 => '005', 6 => '006', 7 => '007', 8 => '008', 9 => '009', 10 => '010', 11 => '011', 12 => '012', 13 => '013', 14 => '014', 15 => '015',
    101 => '101', 102 => '102', 103 => '103', 104 => '104', 105 => '105', 106 => '106', 107 => '107', 108 => '108', 109 => '109', 110 => '110', 111 => '111', 112 => '112', 113 => '113', 114 => '114', 115 => '115',
    201 => '201',202 => '202', 203 => '203', 204 => '204', 205 => '205', 206 => '206', 207 => '207', 208 => '208', 209 => '209', 210 => '210', 211 => '211', 212 => '212', 213 => '213', 214 => '214', 215 => '215',
); 
$couleur = 'green';
//à adapter selon l'occupation de la chambre
?>
<div class="gestionChambres">
    <h2>Gestion des chambres</h2>
    <div class="container" id="tableau">
        <div class="row">
            <div class="col">
                <h2>Tableau d'occupation</h2>

                <?php
                echo ('<table style="caption-side: bottom; border-collapse: collapse; text-align: center;">');
               
                $z = 201;
                echo ('<tr>');
                for ($i = 0; $i < 15; $i++) {
                    //if (TauxRemplissage_Chambre($i) = 0) {$color='green'} elseif (TauxRemplissage_Chambre($i) = 0.5) {$color='orange'} elseif (TauxRemplissage_Chambre($i) = 1) {$color=red} endif
                    echo ('<td style="border: 1px solid black; color: black; background-color: '.$couleur.';">' . $y[$z] . '</td>');
                    $z++;
                }
                $z = 101;
                echo ('</tr>');
                echo ('<tr>');
                for ($i = 0; $i < 15; $i++) {
                    echo ('<td style="border: 1px solid black; color: black; background-color: '.$couleur.';">' . $y[$z] . '</td>');
                    $z++;
                }
                $z = 1;
                echo ('</tr>');
                echo ('<tr>');
                for ($i = 0; $i < 15; $i++) {
                    echo ('<td style="border: 1px solid black; color: black; background-color: '.$couleur.';">' . $y[$z] . '</td>');
                    $z++;
                }
                echo ('</tr>');
               
                echo ('</table>');
                ?>
            </div>
        </div>
    </div>
    <div class="container" id="procedure">
        <div class="row">
            <div class="col">
                <br><h2>Procedure de gestion</h2>
                <a href="">Ajouté un patient</a>
                <a href="">Retiré un patient</a>
            </div>
        </div>
    </div>
</div>
