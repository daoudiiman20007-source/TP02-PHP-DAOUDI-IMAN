<?php
$a = 42; $b = "42"; $c = 15.8; $d = true; $e = false; $f = null;
?>
<!DOCTYPE html>
<html lang="fr"><head><meta charset="UTF-8"><title>Exercice 4</title></head>
<body>
<h2>1) Types d'origine (var_dump)</h2>
<pre><?php var_dump($a, $b, $c, $d, $e, $f); ?></pre>
<h2>2) Conversions</h2>
<pre><?php
echo '(int)"42" : '; var_dump((int)$b);
echo '(int)15.8 : '; var_dump((int)$c); // int(15)
echo '(string)42 : '; var_dump((string)$a);
?></pre>
<h2>3) true et false : echo puis var_dump</h2>
<pre><?php
echo "echo true : [" . $d . "]\n"; // [1]
echo "echo false : [" . $e . "]\n"; // []
echo "var_dump : "; var_dump($d, $e);
?></pre>
<h2>4) Conversion en booleen</h2>
<pre><?php
echo "(bool)0 : "; var_dump((bool)0); // false
echo '(bool)"0" : '; var_dump((bool)"0"); // false
echo '(bool)"PHP" : '; var_dump((bool)"PHP"); // true
echo "(bool)[] : "; var_dump((bool)[]); // false
?></pre>
</body></html>