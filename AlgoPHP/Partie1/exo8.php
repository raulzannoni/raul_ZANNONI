<h1>Exercise 8</h1>


Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre.


<h2>Résultat</h2>

<?php

function table_for($val)
{
    echo "Table de $val : <br>";
    for ($iter=1; $iter<= 10 ; $iter++) 
    { 
        $ris = $iter * $val;
        echo "$iter x $val = $ris<br>";
    }
}

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


$num = rand(1, 10);

table_for($num);
echo "<br>";
table_while($num);
?>
