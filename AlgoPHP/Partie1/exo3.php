<h1>Exercise 3</h1>


<p>Soit la phrase "Notre formation DL commence aujourd'hui". <br>
Ecrire l’instruction permettant de remplacer le mot « aujourd’hui » par le mot « demain ». Afficher l’ancienne et la nouvelle phrase.


<h2>Résultat</h2>

<?php

//phrase à examiner
$phrase = "Notre formation DL commence aujourd'hui";

//imprime de la phrase
echo "$phrase<br>"; 

//remplacement de la mot "aujourd'hui" avec "demain"
$phrase = str_replace("aujourd'hui", "demain", $phrase);

//imprime de la phrase changée
echo "$phrase<br>"; 
?>