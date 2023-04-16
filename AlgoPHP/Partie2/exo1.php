<h1>Exercise 1</h1>

<p>Créer une fonction permettant de transformer une chaîne de caractère passée en argument en majuscules et en rouge. <br>

<h2>Résultat</h2>

<style>
    .red
        {
            color: red;
        }
</style>

<?php

//fonction qui change la couleur en rouge et transforme les caracteres en majuscules
function convertirMajRouge($texte)
    {
        //toutes les caracteres devient majuscule et de couleur rouge
        return "<p class='red'>". mb_strtoupper($texte)."</p>";
    }

//fonction qui change la couleur dans n’importe quelle couleur choisie et transforme les caracteres en majuscules
function convertirMajCouleur($texte, $color)
    {
        //toutes les caracteres devient majuscule et de couleur choisie
        return "<p style='color:$color'>". mb_strtoupper($texte)."</p>";

    }
//phrase à examiner
$phrase = "Mon texte en paramètre"; 

//imprime de la phrase passée par la fonction rouge
echo convertirMajRouge($phrase);

//imprime de la phrase passée par la fonction couleur (dans ce cas blue)
echo convertirMajCouleur($phrase, "blue");

?>