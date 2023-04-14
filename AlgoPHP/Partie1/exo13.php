<h1>Exercise 13</h1>


Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de coefficient). Elle devra être affichée avec 2 décimales.


<h2>Résultat</h2>

<?php

//dimensione aleatoire de l'array
$num_notes = rand(5, 15);

//premier imprime
echo "Les notes obtenues par l'élève sont : ";

//allocation de un nombre aleatoire à chaque element de l'array
for ($i = 0; $i < $num_notes; $i++ )
    {
        //valuer aleatoire de les notes entre 1 e 20 associé à l'element i de l'array
        $notes[$i] = rand(1, 20);
    }

//imprime de l'array obtenu    
echo implode(" ", $notes);

//calcul de la moyenne: (sum de tous les numeros)/(quantité de tous les numeros), arrondié vers l'haut par 2 chiffres apres la virgule
$moyenne = round(array_sum($notes) / $num_notes, 2, PHP_ROUND_HALF_UP);

//imprime de la moyenne
echo "<br>Sa moyenne générale est donc de : $moyenne";





?>