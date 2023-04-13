<h1>Exercise 13</h1>


Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de coefficient). Elle devra être affichée avec 2 décimales.


<h2>Résultat</h2>

<?php

$num_notes = rand(5, 15);
echo "Les notes obtenues par l'élève sont : ";

for ($i = 0; $i < $num_notes; $i++ )
    {
        $notes[$i] = rand(1, 20);
        $note = $notes[$i];
        echo "$note ";

        $sum += $note;
    }


$moyenne = round($sum / $num_notes, 2, PHP_ROUND_HALF_UP);

echo "<br>Sa moyenne générale est donc de : $moyenne";





?>