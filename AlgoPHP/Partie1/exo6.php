<h1>Exercise 6</h1>

Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)

<h2>Résultat</h2>

<?php

function facture_a_regler($val1, $val2, $val3)
{
    $montant = round(($val1 * $val2) + (($val1 * $val2)*$val3) , 2 , PHP_ROUND_HALF_UP);
    return $montant;
    
}

function facture_imprime($val1, $val2, $val3, $val4)
{
    echo "Prix unitaire de l'article : $val1 €<br>";
    echo "Quantité : $val2 <br>";
    echo "Taux de TVA: $val3 <br>";
    echo "Le montant de la facture à régler est de : $val4 €<br>";
}

$prix = rand(1, 10000)/100;
$quantite = rand(1, 10);
$TVA = rand(5, 30)/100;

$facture = facture_a_regler($prix, $quantite, $TVA);

facture_imprime($prix, $quantite, $TVA, $facture)

?>