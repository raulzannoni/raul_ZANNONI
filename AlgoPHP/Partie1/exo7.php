<h1>Exercise 7</h1>

Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :

<h2>Résultat</h2>

<?php

//function qui gere la categorie de un enfants depandant l'age
function enfant_gere($val) 
{
    //categorie pour enfant avec l'age majeur ou egal à 12 ans
    if($val >= 12) 
    {
        echo "L’enfant qui a $val ans appartient à la catégorie « Cadet »<br>";
    }

    //categorie pour enfant avec l'age entre 10 et 11 ans
    elseif($val >= 10) 
    {
        echo "L’enfant qui a $val ans appartient à la catégorie « Minime »<br>";
    }

    //categorie pour enfant avec l'age entre 8 et 9 ans
    elseif($val >= 8) 
    {
        echo "L’enfant qui a $val ans appartient à la catégorie « Pupille »<br>";
    }
    
    //categorie pour enfant avec l'age entre 6 et 7 ans
    elseif($val >= 6) 
    {
        echo "L’enfant qui a $val ans appartient à la catégorie « Poussin »<br>";
    }

    //enfant avec moins que 5 ans inclus
    else 
    {
        echo "L’enfant qui a $val ans est encore trop petit pour être gérer<br>";
    }

}

//age aleatoire de l'enfant
$age = rand (1, 15); 

//appel de la fonction avec sujets l'age de l'enfant
enfant_gere($age); 


?>