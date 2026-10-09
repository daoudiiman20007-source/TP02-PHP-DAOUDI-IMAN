<!DOCTYPE html>
<html lang="fr"><head><meta charset="UTF-8"><title>Resultat POST</title></head>
<body>
<?php
if (!isset($_POST["nom"], $_POST["prenom"], $_POST["groupe"])) {
    echo "<p>Aucune donnee recue. Veuillez remplir le <a href=\"ex10_post.html\">formulaire</a>.</p>";
} else {
    $nom = trim($_POST["nom"]);
    $prenom = trim($_POST["prenom"]);
    $groupe = trim($_POST["groupe"]);
    if ($nom === "" || $prenom === "" || $groupe === "") {
        echo "<p>Erreur : tous les champs sont obligatoires.</p>";
        echo "<p><a href=\"ex10_post.html\">Retour au formulaire</a></p>";
    } else {
        echo "<p>Bienvenue " . htmlspecialchars($prenom) . " " . htmlspecialchars($nom)
           . " du groupe " . htmlspecialchars($groupe) . " !</p>";
    }
}
?>
</body></html>