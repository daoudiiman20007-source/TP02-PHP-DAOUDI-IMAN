<?php
?>
<!DOCTYPE html>
<html lang="fr"><head><meta charset="UTF-8"><title>Resultat GET</title></head>
<body>
<?php
if (!isset($_GET["nom"], $_GET["prenom"], $_GET["groupe"])) {
 echo "<p>Aucune donnee recue. Veuillez remplir le <a href=\"ex10_get.html\">formulaire</a>.</p>";
} else {
 $nom = trim($_GET["nom"]);
 $prenom = trim($_GET["prenom"]);
 $groupe = trim($_GET["groupe"]);
 if ($nom === "" || $prenom === "" || $groupe === "") {
 echo "<p>Erreur : tous les champs sont obligatoires.</p>";
 echo "<p><a href=\"ex10_get.html\">Retour au formulaire</a></p>";
 } else {
 echo "<p>Bienvenue " . htmlspecialchars($prenom) . " " . htmlspecialchars($nom)
 . " du groupe " . htmlspecialchars($groupe) . " !</p>";
 }
}
?>
</body></html>