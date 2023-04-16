<h1>Exercise 5</h1>

<p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en précisant le nom des champs associés.<br>
<h4>Exemple :</h4>
<code>$nomsInput = array("Nom","Prénom","Ville"); <br>
afficherInput($nomsInput);</code>

<h2>Résultat</h2>
<style>

/* style de la boite */
div {
    display: block;
    margin: 8px 0;
    border-radius: 5px;
    background-color: lightblue;
    padding: 12px 20px;
    width: fit-content;
}

</style>

<?php


//fonction qui crée le formulaire
function afficherInput($array)
    {
        //debut de le formulaire
        $result = "<div><form>";

        //mot et boite annexe pour chaque element de l'array
        foreach($array as $valeur)
            {
                $result .=  "<label for=".$valeur.">".$valeur.":</label><br>
                            <input type='text'><br>";
            }
        //fin de le formulaire
        $result .= "</form></div>";

        //imprime de le formulaire
        echo $result;
    }

//tableau de les mots à afficher dans le formulaire
$nomsInput = [   "Nom",
                "Prénom",
                "Ville"
            ]; 

//appel de la fonction avec sujet le tableau défini précédemment
afficherInput($nomsInput);

?>