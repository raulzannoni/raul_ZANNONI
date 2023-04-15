<h1>Exercise 6</h1>


<p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau de valeurs.<br>
<h4>Exemple :</h4>
<code>$elements = array("Monsieur","Madame","Mademoiselle");</code><br>
<code>alimenterListeDeroulante($elements);</code>


<h2>Résultat</h2>

<?php
/*
<label for="pet-select">Choose a pet:</label>

<select name="pets" id="pet-select">
    <option value="">--Please choose an option--</option>
    <option value="dog">Dog</option>
    <option value="cat">Cat</option>
    <option value="hamster">Hamster</option>
    <option value="parrot">Parrot</option>
    <option value="spider">Spider</option>
    <option value="goldfish">Goldfish</option>
</select>

*/

//fonction qui crée le formulaire
function alimenterListeDeroulante($array)
    {   
        //titre de la liste deroulante
        $result =  "<label for='civilité'>Civilité:</label><br>";
        //debut de le formulaire avec selection default
        $result .= "<select name='titre_civilité'> id='civilité-select'>
                            <option value=''>-- --</option>";

        //mot et boite annexe pour chaque element de l'array
        foreach($array as $valeur)
            {
                $result .=  "<option value=".$valeur.">".$valeur."</option><br>";
            }
        //fin de la liste deroulante
        $result .=  "</select>";

        //imprime de le formulaire
        echo $result;
    }

//array de les mots à afficher dans le formulaire deroulante
$elements = [   "Monsieur",
                "Madame",
                "Mademoiselle"
            ];

//appel de la fonction avec sujet le tableau défini précédemment
alimenterListeDeroulante($elements);

?>