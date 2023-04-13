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

$aujourdhui = new DateTime(); //gg, mm, aa
$depart = new DateTime('01-01-1900');

$naissance = random_date($depart, $aujourdhui);

//$diff = $today->diff($naissance);

echo "Aujourd'hui c'est le " .  $aujourdhui->format('d/m/Y') . " et la date de naissance le  " . $naissance->format('d/m/Y') . ": <br>";


//echo sprintf('Age de la personne: %d ans %d mois %d jours.', $diff->y, $diff->m, $diff->d);

?>
