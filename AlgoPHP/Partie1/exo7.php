<h1>Exercise 7</h1>

Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :

<h2>Résultat</h2>

<?php

function enfant_gere($val)
{
    if($val == 6 or $val == 7)
    {
        echo "L’enfant qui a $val ans appartient à la catégorie « Poussin »<br>";
    }

    if($val == 8 or $val == 9)
    {
        echo "L’enfant qui a $val ans appartient à la catégorie « Pupille »<br>";
    }

    if($val == 10 or $val == 11)
    {
        echo "L’enfant qui a $val ans appartient à la catégorie « Minime »<br>";
    }

    if($val >= 12)
    {
        echo "L’enfant qui a $val ans appartient à la catégorie « Cadet »<br>";
    }

    if($val <= 5)
    {
        echo "L’enfant qui a $val ans est encore trop petit pour être gérer<br>";
    }

}

$age = rand (1, 15);

enfant_gere($age)
?>