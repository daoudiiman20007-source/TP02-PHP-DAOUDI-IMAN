<?php
$liens = [
  "ex01.php" => "Exercice 1 : affichage", "ex02.php" => "Exercice 2 : variables",
  "ex03.php" => "Exercice 3 : constantes", "ex04.php" => "Exercice 4 : types",
  "ex05.php" => "Exercice 5 : if / else", "ex06.php" => "Exercice 6 : switch",
  "ex07.php" => "Exercice 7 : for", "ex08.php" => "Exercice 8 : while / do-while",
  "ex09.php" => "Exercice 9 : tableaux", "ex10_get.html" => "Exercice 10 : GET",
  "ex10_post.html" => "Exercice 10 : POST"
];
?>
<!DOCTYPE html>
<html lang="fr"><head><meta charset="UTF-8"><title>TP02 PHP</title></head>
<body>
<h1>TP 02 PHP - Programmation Web 2</h1>
<ul>
<?php foreach ($liens as $url => $titre) {
    echo "<li><a href=\"$url\">$titre</a></li>";
} ?>
</ul>
</body></html>