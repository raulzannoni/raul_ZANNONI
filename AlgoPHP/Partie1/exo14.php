<h1>Exercise 14</h1>


Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).


<h2>Résultat</h2>

<?php

$today = array(13, 4, 2023); //gg, mm, aa
$jj_today = $today[0];
$mm_today = $today[1];
$aa_today = $today[2];
$an_naissance = rand(1923, 2022); //raissonable
$mois_naissance = rand(1, 12);

if($mois_naissance == 2)
    {
        $jour_naissance = rand(1,28);
    }
elseif($mois_naissance == 4 or $mois_naissance == 6 or $mois_naissance == 9 or $mois_naissance == 10 )
    {
        $jour_naissance = rand(1,30);
    }
else   
    {
        $jour_naissance = rand(1,31);
    }

$naissance = array($jour_naissance, $mois_naissance, $an_naissance);

if($today[1] > $naissance[1])
    {
        $an_age = $today[2] - $naissance[2];
    }
elseif($today[1] = $naissance[1] and $today[0] >= $naissance[0])
    {
        $an_age = $today[2] - $naissance[2];
    }
else
    {
        $an_age = $today[2] - $naissance[2] - 1;
    }

if($today[1] >= $naissance[1] and $today[0] >= $naissance[0])
    {
        $mois_age =  $today[1] - $naissance[1];
        $jour_age =  $today[1] - $naissance[1];
    }

elseif($today[1] >= $naissance[1] and $today[0] < $naissance[0])
    {
        $mois_age = $today[1] - $naissance[1];
        $jour_age = 30 - ($naissance[0] - $today[0]);
    }

elseif($today[1] < $naissance[1] and $today[0] >= $naissance[0])
    {
        $mois_age = 12 - ($naissance[1] - $today[1]);
        $jour_age = $today[0] - $naissance[0];
    }
else
    {
        $mois_age = 12 - ($naissance[1] - $today[1]);
        $jour_age = 30 - ($naissance[0] - $today[0]);
    }  
    
echo "Aujourd'hui c'est le $jj_today/$mm_today/$aa_today et la date de naissance le $jour_naissance/$mois_naissance/$an_naissance :<br>";
echo "Age de la personne: $an_age ans $mois_age mois $jour_age jours.<br>"
?>
