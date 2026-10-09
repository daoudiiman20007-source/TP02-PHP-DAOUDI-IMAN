<?php
$nom = "Daoudi"; $prenom = "Iman"; $age = 19;
$formation = "Informatique Appliquee";
$phrase = "Je m'appelle " . $prenom . " " . $nom . ", j'ai " . $age
 . " ans et je suis en " . $formation . ". ";
$phrase .= "J'apprends PHP";
$note = 19;
$Note = 18;
?>
<!DOCTYPE html>
<html lang="fr"><head><meta charset="UTF-8"><title>Exercice 2</title></head>
<body>
<p><?php echo $phrase; ?></p>
<p>$note = <?php echo $note; ?></p>
<p>$Note = <?php echo $Note; ?></p>
</body></html>