<h1>Exercise 1</h1>


<p>Soit la phrase "Notre formation DL commence aujourd'hui". <br>
Ecrire un algorithme permettant de compter le nombre de caractères contenus dans cette phrase


<h2>Résultat</h2>

<?php

$phrase = "Notre formation DL commence aujourd'hui";
$longeur = strlen($phrase);
echo "la phrase \"$phrase\" contient $longeur caractères <br>";
echo "la phrase \"$phrase\" contient ". strlen($phrase). " caractères <br>";
?>