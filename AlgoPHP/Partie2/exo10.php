<h1>Exercise 10</h1>

<p>En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse e- mail, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation : « Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».<br>
<p>Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement de validation (submit).

<h2>Résultat</h2>

<style>

input[type=text], select {
  width: 100%;
  padding: 2px 5px;
  margin: 2px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}


input[type=submit] {
  width: fit-content;
  background-color: blue;
  color: white;
  padding: 10px 5px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  transition: 0.5s;
  
}

input[type=submit]:hover {
  background-color: darkblue;
}


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

//fonction qui crée le formulaire complet
function formulaire()
    {
        //tableau de les mots à afficher dans le formulaire
        $nomsInput = [  "Nom",
                        "Prénom",
                        "Adresse e-mail",
                        "Ville",
                        "Sexe",
                        "Formation"
                    ]; 
        
        //tableau de le genre à choissiser            
        $genre = [  "Masculine",
                    "Féminin",
                    "Autre"
                ];

        //tableau de le titre à choissiser
        $titre =    [   "Développeur Logiciel",
                        "Designer web",
                        "Intégrateur",
                        "Chef de projet"
                    ];

        $result = "<h3>Formulaire</h3>";

        //debut de le formulaire - appuyer le bouton entraîne la redirection vers la page ELAN
        $result .= "<div><form action='https://elan-formation.eu/accueil'>";

        //mot et boite annexe pour chaque element de l'array
        foreach($nomsInput as $valeur)
            {
                //boutons radio concernant  le genre de la personne
                if($valeur == "Sexe")
                    {
                        $result .=  "<label for=".$valeur.">".$valeur.":</label><br>";

                            //genre à afficher
                            foreach($genre as $valeur)
                                {
                                    $result .="<input type='radio' id=".$valeur." name='civilité' value=".$valeur.">
                                    <label for=".$valeur.">".$valeur."</label><br>";
                                }
                        $result .= "<br>";
                    }

                //liste deroulante concernant le titre de la personne    
                elseif($valeur == "Formation")
                    {
                        $result .=  "<label for=".$valeur.">".$valeur.":</label><br>
                                     <select name=".$valeur."> id=".$valeur.">
                                     <option value=''>-- --</option>";

                            //titre de la liste deroulante
                            foreach($titre as $valeur)
                                {
                                    $result .= "<option value=".$valeur.">".$valeur."</option><br>";
                                }

                        //fin de la liste deroulante
                        $result .=  "</select><br><br>";

                    }

                //les autres éléments sont affichés dans un formulaire à remplir
                else
                    {    
                        $result .=  "<label for=".$valeur.">".$valeur.":</label><br>
                                    <input type='text' placeholder=".$valeur."...><br><br>";
                    }
            }
        
            
        
        //bouton à envoie
        $result .= "<input type='submit' value='Envoye'>";

        //fin de le formulaire
        $result .= "</form></div>";

        //imprime de le formulaire
        echo $result;
    }

//appel de la fonction 
formulaire();

?>
