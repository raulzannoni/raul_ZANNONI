<h1>Exercise 5</h1>


<p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en précisant le nom des champs associés.<br>
<h4>Exemple :</h4>
<code>$nomsInput = array("Nom","Prénom","Ville"); afficherInput($nomsInput);</code>


<h2>Résultat</h2>

<?php

//fonction qui crée le formulaire
function afficherInput($array)
    {
        //debut de le formulaire
        $result = "<form";

        //mot et boite annexe pour chaque element de l'array
        foreach($array as $valeur)
            {
                $result .=  "<label for=".$valeur.">".$valeur.":</label><br>
                            <input type='text'><br>";
            }
        //fin de le formulaire
        $result .= "</form>";

        //imprime de le formulaire
        echo $result;
    }

//array de les mots à afficher dans le formulaire
$nomsInput = [   "Nom",
                "Prénom",
                "Ville"
            ]; 

//appel de la fonction avec sujet le tableau défini précédemment
afficherInput($nomsInput);

?>