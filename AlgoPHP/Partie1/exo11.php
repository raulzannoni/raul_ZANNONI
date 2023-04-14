<h1>Exercise 11</h1>


Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce tableau et d’en afficher le contenu (une marque de voiture par ligne). Il est également demandé d’afficher le nombre de marques de voitures présentes dans le tableau.


<h2>Résultat</h2>

<?php

//tableau des chaines
$tableau = ['Peugeot' , 'Renault' , 'BMW' , 'Mercedes'];

//nombres des elements dans la tableau
$count = count($tableau);

//imprime horizontal de les elements de le tableau
echo implode(" ", $tableau);

//espace vertical
echo "<br><br>";

//s'il y a une seule element dans le tableau
if($count == 1)
    {
        echo "Il y a $count seul marque de voitures dans le tableau:<br>";
        //imprime vertical
        echo "  #   $tableau[0]";
    }

//sinon s'il y a plusiers des elementes dans le tableau   
else
    {
        echo "Il y a $count marques de voitures dans le tableau:<br>";
        for($i = 0; $i < $count; $i++)
            {
                //imprime vertical
                echo "  #   $tableau[$i]<br>";
            }
    }


?>