<h1>Exercise 11</h1>


Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce tableau et d’en afficher le contenu (une marque de voiture par ligne). Il est également demandé d’afficher le nombre de marques de voitures présentes dans le tableau.


<h2>Résultat</h2>

<?php

$tableau = "'Peugeot' , 'Renault' , 'BMW' , 'Mercedes'";
$temp = explode(" , ", $tableau);
$count = count(explode(" , ", $tableau));

echo "$tableau<br><br>";
if($count == 1)
    {
        $temp[0] = trim($temp[0], "'");
        echo "Il y a $count seul marque de voitures dans le tableau:<br>";
        echo "  #   $temp[0]";
    }   
else
    {
        echo "Il y a $count marques de voitures dans le tableau:<br>";
        for($i = 0; $i < $count; $i++)
            {
                $temp[$i] = trim($temp[$i], "'");
                echo "  #   $temp[$i]<br>";
            }
    }


?>