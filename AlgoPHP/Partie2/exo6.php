<h1>Exercise 6</h1>

<p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau de valeurs.<br>
<h4>Exemple :</h4>
<code>$elements = array("Monsieur","Madame","Mademoiselle");</code><br>
<code>alimenterListeDeroulante($elements);</code>

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
function alimenterListeDeroulante($array)
    {   
        //titre de la liste deroulante
        $result =  "<div><label for='civilité'>Civilité:</label><br>";

        //debut de le formulaire avec selection default
        $result .= "<select name='titre_civilité'> id='civilité-select'>
                            <option value=''>-- --</option>";

        //mot et boite annexe pour chaque element de l'array
        foreach($array as $valeur)
            {
                $result .=  "<option value=".$valeur.">".$valeur."</option><br>";
            }

        //fin de la liste deroulante
        $result .=  "</select></div>";

        //imprime de le formulaire
        echo $result;
    }

//tableau de les mots à afficher dans le formulaire deroulante
$elements = [   "Monsieur",
                "Madame",
                "Mademoiselle"
            ];

//appel de la fonction avec sujet le tableau défini précédemment
alimenterListeDeroulante($elements);

?>