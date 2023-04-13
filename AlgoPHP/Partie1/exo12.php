<h1>Exercise 12</h1>


A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée (tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue respective (français➔« Salut », anglais➔« Hello », espagnol➔« Hola »)

<h2>Résultat</h2>

<?php

function identification($val)
{
    $temp = explode(" , ", $val);
    $count = count(explode(" , ", $val));
    echo "$val<br><br>";


    for ($i = 0; $i < $count ; $i++)
        {
            $code = $temp[$i];
   
            //echo "$count<br>";
            echo "$code<br>";
            $div = explode(" -> ", $code);
            $name[$i] = $div[0];
            $nat[$i] = $div[1];
            $name = $name[$i];
            $nat = $nat[$i];
            
            echo "$name, $nat<br>";
            /*
            if($nat == "FRA")
                {
                    echo "Salut $name!<br>";
                }
            elseif($nat[$i] == "ITA")
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
                    echo "Je ne sais pas d'où vous venez $name<br>";
                }
            */
        }


}
$tableau = "Mickael -> FRA , Virgile -> ESP , Marie-Claire -> ENG , Antonio -> ITA";


identification($tableau);

?>