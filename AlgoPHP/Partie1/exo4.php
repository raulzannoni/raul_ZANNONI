<h1>Exercise 4</h1>


<p>Soient les phrases "Engage le jeu que je le gagne" et "C'est la vie!". <br>
Ecrire un algorithme permettant de savoir si une phrase est palindrome.


<h2>Résultat</h2>

<?php
function palindrome_check($val)
    {
        $lower_case = strtolower($val);
        $trim = str_replace(' ', '', $lower_case);
        $trim_rev = strrev($trim);
        if($trim == $trim_rev)
        {
            echo "La phrase \"$val\" est palindrome!<br>";
        }
        else
        {
            echo "La phrase \"$val\" n'est pas palindrome!<br>";
        }
    }
$phrase_1 = "Engage le jeu que je le gagne";
$phrase_2 = "C'est la vie!";

palindrome_check($phrase_1);
palindrome_check($phrase_2);


?>