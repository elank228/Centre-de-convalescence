<?php
$y = array(
    1=>'001', 2=>'002', 3=>'003', 4=>'004',5=>'005',6=>'006', 7=>'007', 8=>'008', 9=>'009',10=>'010', 11=>'011', 12=>'012', 13=>'013',14=>'014', 15=>'015',
    101=>'101', 102=>'102', 103=>'103', 104=>'104', 105=>'105', 106=>'106', 107=>'107', 108=>'108', 109=>'109', 110=>'110', 111=>'111', 112=>'112', 113=>'113', 114=>'114', 115=>'115', 
    201=>'201', 202=>'202', 203=>'203', 204=>'204', 205=>'205', 206=>'206', 207=>'207', 208=>'208', 209=>'209', 210=>'210', 211=>'211', 212=>'212', 213=>'213', 214=>'214', 215=>'215',      
);?>
<div class="gestionChambres">
    <h2>Gestion des chambres</h2>
    <div class="tableau">
        --! ajouté tableau <br>
        
        <?php
        echo('<table>');
        echo('<tbody>');
            $z = 1;
            echo('<tr class="2iemeEtage">');
                for($i= 0; $i< 15; $i++) {
                    echo('<td>'.$y[$z].'</td>');
                    $z++;
                }
            $z = 101;
            echo('</tr>');
            echo('<tr class="1erEtage">');
                for($i= 0; $i< 15; $i++) {
                    echo('<td>'.$y[$z].'</td>');
                    $z++;
                }
            $z = 201;
            echo('</tr>');
            echo('<tr class="RDC">');
                for($i= 0; $i< 15; $i++) {
                    echo('<td>'.$y[$z].'</td>');
                    $z++;
                }
            echo('</tr>');
        echo('</tbody>');
        echo('</table>');
        ?>
    </div>
    <div class="procedure">
        --! ajouté bouton pour ajouté/enlevé un patient <br>
        <a href="">Ajouté un patient</a>
        <a href="">Retiré un patient</a>
    </div>
</div>