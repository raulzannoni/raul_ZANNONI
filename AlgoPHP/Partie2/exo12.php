<h1>Exercise 12</h1>

<p>La fonction <code>var_dump($variable)</code> permet d’afficher les informations d’une variable.<br> 

<p>Soit le tableau suivant :<br>
<code> $tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2"));</code>
A l’aide d’une boucle, afficher les informations des variables contenues dans le tableau.

<h2>Résultat</h2>

<?php

//tableau à afficher
$tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2"));

//imprime de chaque element de le tableau grace à la fonction var_dump()
foreach($tableauValeurs as $valeur)
    {
                echo var_dump($valeur)."<br>";
    }

?>