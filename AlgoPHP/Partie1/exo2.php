<h1>Exercise 2</h1>


<p>Soit la phrase "Notre formation DL commence aujourd'hui". <br>
Ecrire un algorithme permettant de compter le mots contenus dans celle-ci.


<h2>Résultat</h2>

<?php

$phrase = "Notre formation DL commence aujourd'hui";
$temp = explode(" ", $phrase);
$num_mots = count($temp);
echo "la phrase  \"$phrase\" contient $num_mots mots <br>";
echo "la phrase  \"$phrase\" contient ". count(explode(" ", $phrase)). " mots <br>";
?>