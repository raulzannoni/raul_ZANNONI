<h1>Exercise 12</h1>


A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée (tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue respective (français➔« Salut », anglais➔« Hello », espagnol➔« Hola »)

<h2>Résultat</h2>

<?php

function identification($val)
{
    $temp = explode(" , ", $val);
    $count = count(explode(" , ", $val));
    echo "$val<br><br>";
    
    sort($temp); 

    for ($i = 0; $i < $count ; $i++)
        {
            $code = $temp[$i];
            $div = explode(" -> ", $code);
            $name = $div[0];
            $nat = $div[1];
            
            
            if($nat == "FRA")
                {
                    echo "Salut $name!<br>";
                }
            elseif($nat == "ITA")
                {
                    echo "Ciao $name!<br>";
                }
            elseif($nat == "ENG")
                {
                    echo "Hello $name!<br>";
                }
            elseif($nat == "ESP")
                {
                    echo "Hola $name!<br>";
                }
            else
                {
                    echo "Je ne sais pas d'où vous venez $name!<br>";
                }
            
        }


}

$tableau = "Mickael -> FRA , Virgile -> ESP , Thomas -> DEN , Marie-Claire -> ENG , Antonio -> ITA";


identification($tableau);

?>