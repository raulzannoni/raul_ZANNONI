<h1>Exercise 12</h1>


A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée (tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue respective (français➔« Salut », anglais➔« Hello », espagnol➔« Hola »)

<h2>Résultat</h2>

<?php

//fonction qui identifie la nationalité et ordonne les noms par ordre alphabetique un tableau associative 
function identification($val)
{   
    //noms ordonné par ordre alphabetique 
    ksort($val);

    //chaque nom reçoit le salut correspondant à sa nationalité
    foreach ($val as $nom => $nat)
        {
            if($nat == "FRA")
                {
                    echo "Salut $nom!<br>";
                }
            elseif($nat == "ITA")
                {
                    echo "Ciao $nom!<br>";
                }
            elseif($nat == "ENG")
                {
                    echo "Hello $nom!<br>";
                }
            elseif($nat == "ESP")
                {
                    echo "Hola $nom!<br>";
                }
            //si la nationalité n'est pas reconnue
            else
                {
                    echo "Je ne sais pas d'où vous venez $nom!<br>";
                }
            
        }


}


//tableau associative (nom et nationalité) des chaines 
$tableau = ["Mickael" => "FRA" , "Virgile" => "ESP" , "Thomas" => "DEN" , "Marie-Claire" => "ENG" , "Antonio" => "ITA"];

//appel de la fonction
identification($tableau);

?>