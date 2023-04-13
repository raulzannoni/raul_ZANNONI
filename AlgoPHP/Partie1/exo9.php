<h1>Exercise 9</h1>


<p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.<br>
Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, « non imposable »).


<h2>Résultat</h2>

<?php
function imposable_check($val1, $val2)
    {
        echo "Age : $val1 <br>";
        echo "Sexe : $val2 <br>";
        if ( ($val1 >= 18 or $val1 <= 35) and $val2 == "F")
            {
                echo "La personne est imposable.<br>";
            }
        elseif ( $val1 >=20  and $val2 == "M")
            {
                echo "La personne est imposable.<br>";
            }
        else
            {
                echo "La personne n'est pas imposable.<br>";
            }
    }

$age = rand(1, 65);
$numero = rand(1,2);

if($numero == 1) 
    {
        $sexe = "M";
    }
else
    {
        $sexe = "F";
    }

imposable_check($age, $sexe);
?>