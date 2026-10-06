<?php
$numeroMois = 3; // tester 1, 3, 12, 15
// Etape 5 : $numeroMois = (int) date("m");
switch ($numeroMois) {
 case 1: $mois = "Janvier"; break;
 case 2: $mois = "Fevrier"; break;
 case 3: $mois = "Mars"; break;
 case 4: $mois = "Avril"; break;
 case 5: $mois = "Mai"; break;
 case 6: $mois = "Juin"; break;
 case 7: $mois = "Juillet"; break;
 case 8: $mois = "Aout"; break;
 case 9: $mois = "Septembre"; break;
 case 10: $mois = "Octobre"; break;
 case 11: $mois = "Novembre"; break;
 case 12: $mois = "Decembre"; break;
 default: $mois = "Numero de mois invalide";
}
?>
<!DOCTYPE html>
<html lang="fr"><head><meta charset="UTF-8"><title>Exercice 6</title></head>
<body><p>Mois <?= $numeroMois ?> : <?= $mois ?></p></body></html>