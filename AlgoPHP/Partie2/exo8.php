<h1>Exercise 8</h1>

<p>Soit l’URL suivante : <a href="http://my.mobirise.com/data/userpic/764.jpg" target="_blank">http://my.mobirise.com/data/userpic/764.jpg</a><br>
Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran.
<h4>Exemple :</h4>
<code>repeterImage($url,4);</code>

<h2>Résultat</h2>

<?php

//fonction qui crée les cases à cocher
function repeterImage($url, $int)
    {  
        //debut de l'image à afficher copiée $int fois
        for($i = 0; $i < $int; $i++)
            {
                $result .= "<img src=".$url." alt='dog'>";
            }

        //imprime de les images;
        echo $result;
    }

//URL de l'image à afficher 
$dog_url = "http://my.mobirise.com/data/userpic/764.jpg";

//numero aleatoire représentant les fois où l’image est copiée
$num = rand(1,6);

//appel de la fonction avec sujet le tableau associative défini précédemment
repeterImage($dog_url, $num);

?>    