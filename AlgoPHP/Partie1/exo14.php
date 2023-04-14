<h1>Exercise 14</h1>


Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).


<h2>Résultat</h2>

<?php

//fonction qui donne une date aleatoire entre deux dates definies
function random_date(DateTime $start, DateTime $end) {

    //getTimestamp: donne l'Unix temp qui represent la date donnée
    //mt_rand: genere une valeur aleatoire entre deux valuers
    $randomTimestamp = mt_rand($start->getTimestamp(), $end->getTimestamp());
    
    //definition de la date aleatoire
    $randomDate = new DateTime();

    //setTimestamp: assigne la date et l'heure à l'aide d'un horodatage Unix
    $randomDate->setTimestamp($randomTimestamp);

    //valeur retourné par la fonction
    return $randomDate;
}

//la date d'aujourd'hui
$aujourdhui = new DateTime('now'); 

//date de depart choix arbitrairement 
$depart = new DateTime('1900-01-01');

//date de naissaince de qqn entre la date de depart et aujourd'hui
$naissance = random_date($depart, $aujourdhui);

//calcul de l'age de la personne
$diff = $aujourdhui->diff($naissance);

//format: fonction qui retourne la date dans le format choisi
//imprime de la date d'aujourdhui e de naissance
echo "Aujourd'hui c'est le " .  $aujourdhui->format('d/m/Y') . " et la date de naissance le  " . $naissance->format('d/m/Y') . ": <br>";

//imprime de l'age de la personne en ans, mois et jours.
echo "Age de la personne: " . $diff->y . " ans " . $diff->m . " mois " . $diff->d .".<br>";

?>
