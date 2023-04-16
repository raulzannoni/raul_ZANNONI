<h1>Exercise 3</h1>

<p> Afficher un lien hypertexte permettant d’accéder au site d’Elan Formation. Le lien devra s’ouvrir dans un nouvel onglet (_blank). <br>

<h2>Résultat</h2>


<?php

//link à ouvrir
$link = "https://elan-formation.eu/accueil";

//modalite d'ouverture: nouvel onglet
$link_ext = "_blank";

//imprime de la phrase "Visit ELAN Formation" avec link hypertexte 
echo "<a href=".$link." target=".$link_ext.">Visite ELAN Formation</a>";

?>