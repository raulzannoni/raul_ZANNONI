<h1>Exercise 5</h1>


<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros.<br>
Attention, la valeur générée devra être arrondie à 2 décimales.


<h2>Résultat</h2>

<?php

$val_francs = 100;
$phrase = "Montant en francs : ";
echo "$phrase $val_francs<br>";
$conversion = 0.15244937;
$val_euro = round($val_francs * $conversion, 2, PHP_ROUND_HALF_UP);
echo "$val_francs franc = $val_euro €<br>";
?>