<h1>Exercise 14</h1>


Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).


<h2>Résultat</h2>

<?php

function random_date(DateTime $start, DateTime $end) {
    $randomTimestamp = mt_rand($start->getTimestamp(), $end->getTimestamp());
    $randomDate = new DateTime();
    $randomDate->setTimestamp($randomTimestamp);
    return $randomDate;
}

$aujourdhui = new DateTime('now'); 
$depart = new DateTime('1900-01-01');

$naissance = random_date($depart, $aujourdhui);

$diff = $aujourdhui->diff($naissance);


$date1 = new DateTime('2019-9-10');
$date2 = new DateTime('2018-9-15');

echo "Aujourd'hui c'est le " .  $aujourdhui->format('d/m/Y') . " et la date de naissance le  " . $naissance->format('d/m/Y') . ": <br>";


echo "Age de la personne: " . $diff->y . " ans " . $diff->m . " mois " . $diff->d .".<br>";

?>
