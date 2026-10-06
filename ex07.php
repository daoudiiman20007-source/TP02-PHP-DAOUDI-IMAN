<?php $nombre = 7; ?>
<!DOCTYPE html>
<html lang="fr"><head><meta charset="UTF-8"><title>Exercice 7</title></head>
<body>
<section>
 <h2>Table de multiplication de <?= $nombre ?></h2>
 <pre><?php
 for ($i = 1; $i <= 10; $i++) {
 echo "$nombre x $i = " . ($nombre * $i) . "\n";
 }
 ?></pre>
</section>
<section>
 <h2>Pyramide (6 lignes)</h2>
 <pre><?php
 for ($ligne = 1; $ligne <= 6; $ligne++) {
 for ($e = 1; $e <= 6 - $ligne; $e++) { echo " "; }
 for ($etoile = 1; $etoile <= 2 * $ligne - 1; $etoile++) { echo "*"; }
 echo "\n";
 }
 ?></pre>
</section>
</body></html>