<?php
$moyenne = 14; // changer : -1, 9, 10, 12, 14, 16, 21
?>
<!DOCTYPE html>
<html lang="fr"><head><meta charset="UTF-8"><title>Exercice 5</title></head>
<body>
<p>Moyenne : <?= $moyenne ?></p>
<p><?php
if ($moyenne < 0 || $moyenne > 20) {
 echo "Note invalide";
} elseif ($moyenne < 10) {
 echo "Non valide";
} elseif ($moyenne < 12) {
 echo "Passable";
} elseif ($moyenne < 14) {
 echo "Assez bien"; TP 02 PHP - page 5
} elseif ($moyenne < 16) {
 echo "Bien";
} else {
 echo "Tres bien";
}
?></p>
</body></html>