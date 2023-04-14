<h1>Exercise 8</h1>


Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre.


<h2>Résultat</h2>

<?php

//fonction qui calcul la table de un numero et l'imprime
function table_for($val)
{
    echo "Table de $val : <br>";
    for ($iter=1; $iter<= 10 ; $iter++) 
    { 
        $ris = $iter * $val;
        echo "$iter x $val = $ris<br>";
    }
}

//fonction alternative qui calcul la table de un numero et l'imprime
function table_while($val)
{
    echo "Table de $val : <br>";
    $iter = 1;
    while ($iter<=10) 
    { 
        $ris = $iter * $val;
        echo "$iter x $val = $ris<br>";
        $iter++;
    }
}

//numero aleatoire entre 1 et 10
$num = rand(1, 10);

//appel de les  deux fonctions avec le meme numero aleatoire
table_for($num);
echo "<br>";
table_while($num);

?>
