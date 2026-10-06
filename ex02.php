<?php
$nom = "Alaoui"; $prenom = "Salma"; $age = 20;
$formation = "Informatique Appliquee";
$phrase = "Je m'appelle " . $prenom . " " . $nom . ", j'ai " . $age
 . " ans et je suis en " . $formation . ". ";
$phrase .= "J'apprends PHP";
$note = 12;
$Note = 16;
?>
<!DOCTYPE html>
<html lang="fr"><head><meta charset="UTF-8"><title>Exercice 2</title></head>
<body>
<p><?php echo $phrase; ?></p>
<p>$note = <?php echo $note; ?></p>
<p>$Note = <?php echo $Note; ?></p>
</body></html>