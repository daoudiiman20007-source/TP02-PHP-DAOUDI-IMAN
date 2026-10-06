<?php
define("TAUX_TVA", 20);
define("DEVISE", "MAD"); TP 02 PHP - page 4
$prixHT = 60;
$quantite = 3;
$totalHT = $prixHT * $quantite; // 180
$tva = $totalHT * TAUX_TVA / 100; // 36
$totalTTC = $totalHT + $tva; // 216
$montantFinal = $totalTTC;
$montantFinal += 15; // frais de livraison -> 231
?>
<!DOCTYPE html>
<html lang="fr"><head><meta charset="UTF-8"><title>Exercice 3</title></head>
<body>
<h2>Recapitulatif</h2>
<ul>
 <li>Prix unitaire HT : <?= $prixHT . " " . DEVISE ?></li>
 <li>Quantite : <?= $quantite ?></li>
 <li>Total HT : <?= $totalHT . " " . DEVISE ?></li>
 <li>TVA (<?= TAUX_TVA ?>%) : <?= $tva . " " . DEVISE ?></li>
 <li>Total TTC : <?= $totalTTC . " " . DEVISE ?></li>
 <li>Montant final (livraison 15 MAD incluse) : <?= $montantFinal . " " . DEVISE ?></li>
</ul>
<p>TAUX_TVA existe ? <?= defined("TAUX_TVA") ? "Oui" : "Non" ?></p>
</body></html>