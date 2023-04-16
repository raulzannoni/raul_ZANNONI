<h1>Exercise 7</h1>

<p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser dans le tableau associatif si la case est cochée ou non.<br>
<h4>Exemple :</h4>
<code>genererCheckbox($elements);</code><br>
<code>//où $elements est un tableau associatif clé => valeur avec 3 entrées.</code>

<h2>Résultat</h2>

<style>

/* style de la boite */
div {
    display: block;
    margin: 0;
    border-radius: 5px;
    background-color: lightblue;
    padding: 12px 20px;
    width: fit-content;
}

</style>

<?php

//fonction qui crée les cases à cocher
function genererCheckbox($array)
    {   
        //debut de les cases à cocher 
        $result =       "<div><form>";

        //input de les elementes de l'array
        foreach($array as $cle => $valeur)
            {
            
                $result .=  "<input type='checkbox' id=".$cle." name=".$cle."value=".$valeur.">
                            <label for=".$cle.">".$valeur."</label><br>";
                    
            }

        //fin de les cases à cocher 
        $result .=      "</form></div>";

        //imprime de les cases à cocher;
        echo $result;
    }

//tableau associative de les mots à afficher dans les cases à cocher
$elements = [   "1" => "Choix 1",
                "2" => "Choix 2",
                "3" => "Choix 3"
            ];

//appel de la fonction avec sujet le tableau associative défini précédemment
genererCheckbox($elements);

?>