<?php
$page = 'Exercice 4';
include '../header.php';
$magnitude = 9;
$result = " ";
switch ($magnitude)
{
    case 1:
        $result = 'Micro-séisme impossible à ressentir.';
    break;
    case 2:
        $result = 'Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.';
    break;
    case 3:
        $result = 'Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.';
    break;
    case 4:
        $result = 'Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.';
    break;
    case 5:
        $result = 'Séisme capable d\'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.';
    break;
    case 6:
        $result = 'Fort séisme capable d\'engendrer des destructions majeures sur une large distance (180 km) autour de l\'épicentre.';
    break;
    case 7:
        $result = 'Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.';
    break;
    case 8:
        $result = 'Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.';
    break;
    case 9:
        $result = 'Séisme capable de tout détruire sur une très vaste zone.';
    break;
    default;
        $result = 'Désolé, je n\'ai pas message à afficher pour ce cas.';
}
?>
<div class="card-header font-weight-bold bg-info">Echelle de Richter </div>
<p>On a mesuré une magnitude de :<?= $magnetitude ?></p>
<p><?= $result ?></p>
</div>
</div> 
<?php include '../footer.php'; ?>