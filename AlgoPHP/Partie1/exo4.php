<h1>Exercise 4</h1>


<p>Soient les phrases "Engage le jeu que je le gagne" et "C'est la vie!". <br>
Ecrire un algorithme permettant de savoir si une phrase est palindrome.


<h2>Résultat</h2>

<?php

//function qui verifie si une stringe est palindrome ou pas
function palindrome_check($val) 
    {   
        //transformation de tout les caracteres minuscule
        $lower_case = strtolower($val); 

        //effacement de tous les espaces dans la stringe
        $trim = str_replace(' ', '', $lower_case); 

        //creation de la stringe avec les caracteres inversés 
        $trim_rev = strrev($trim); 

        //verification si la phrase est palindrome
        if($trim == $trim_rev) 
        {
            echo "La phrase \"$val\" est palindrome!<br>";
        }
        else
        {
            echo "La phrase \"$val\" n'est pas palindrome!<br>";
        }
    }

//phrases à verifier
$phrase_1 = "Engage le jeu que je le gagne"; 
$phrase_2 = "C'est la vie!"; 

//appel de la fonction avec deux differents sujets
palindrome_check($phrase_1); 
palindrome_check($phrase_2); 

?>