<h1>Exercise 9</h1>

<p>Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de valeurs en paramètre ("Monsieur","Madame","Mademoiselle").<br>

<h4>Exemple :</h4>
<code>afficherRadio($nomsRadio);</code>

<h2>Résultat</h2>

<?php

//fonction qui crée le formulaire
function afficherRadio($array)
    {   
        //debut et titre de les boutons radio
        $result =   "<form>
                    <p>Choisissez votre civilité:</p>";

        //boutons radio pour chaque element de l'array
        foreach($array as $valeur)
            {
                $result .=  "<input type='radio' id=".$valeur." name='civilité' value=".$valeur.">
                            <label for=".$valeur.">".$valeur."</label><br>";
            }

        //fin de les boutons
        $result .=  "</form>";

        //imprime de le formulaire
        echo $result;
    }

//tableau de les mots à afficher dans les boutons radio
$nomsRadio = [  "Monsieur",
                "Madame",
                "Mademoiselle"
            ];

//appel de la fonction avec sujet le tableau défini précédemment
afficherRadio($nomsRadio);

?>