<h1>Exercise 5</h1>


<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros.<br>
Attention, la valeur générée devra être arrondie à 2 décimales.


<h2>Résultat</h2>

<?php

//montant d'argent entre 1 et 100 francs
$val_francs = rand(100, 10000) / 100; 

//imprime de le montant d'argent
echo "Montant en francs : " . $val_francs ."<br>"; 

//facteur de conversion
$conversion = 0.15244937; 

//conversion en euro arrondie vers l'haut par 2 chiffres apres la virgule
$val_euro = round($val_francs * $conversion, 2, PHP_ROUND_HALF_UP); 

// imprime de le resultat dela conversion
echo "$val_francs franc = $val_euro €<br>"; 

?>