<h1>Exercise 2</h1>


<p>Soit la phrase "Notre formation DL commence aujourd'hui". <br>
Ecrire un algorithme permettant de compter le mots contenus dans celle-ci.


<h2>Résultat</h2>

<?php

//phrase à examiner
$phrase = "Notre formation DL commence aujourd'hui"; 

// fonction qui compte les mots dans une stringe
$num_mots = str_word_count($phrase);  


//imprime de les nombres de la stringe
echo "la phrase  \"$phrase\" contient $num_mots mots <br>"; 

//methode alternative pour calculer les mots de la stringe
echo "la phrase  \"$phrase\" contient ". count(explode(" ", $phrase)). " mots <br>"; 

?>