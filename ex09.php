<?php
$notes = ["Amine" => 12, "Sara" => 16, "Youssef" => 8, "Lina" => 14, "Adam" => 10];
$somme = 0; $nbValides = 0;
$meilleureNote = -1; $meilleurNom = "";
foreach ($notes as $nom => $note) {
 $somme += $note;
 if ($note >= 10) { $nbValides++; }
 if ($note > $meilleureNote) { $meilleureNote = $note; $meilleurNom = $nom; }
}
$moyenne = $somme / count($notes);
?>
<!DOCTYPE html>
<html lang="fr"><head><meta charset="UTF-8"><title>Exercice 9</title></head>
<body>
<table border="1" cellpadding="6">
 <tr><th>Etudiant</th><th>Note</th><th>Valide</th></tr>
 <?php foreach ($notes as $nom => $note): ?>
 <tr>
 <td><?= htmlspecialchars($nom) ?></td>
 <td><?= $note ?></td>
 <td><?= $note >= 10 ? "Valide" : "Non valide" ?></td>
 </tr>
 <?php endforeach; ?>
</table>
<p>Somme des notes : <?= $somme ?></p>
<p>Moyenne de la classe : <?= $moyenne ?></p>
<p>Etudiants ayant valide : <?= $nbValides ?></p>
<p>Meilleure note : <?= $meilleureNote ?> (<?= $meilleurNom ?>)</p>
</body></html>
Resultats attendus : somme = 60, moyenne = 12, 4 valides, meilleure note = Sara (16).