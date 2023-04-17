<h1>Exercise 11</h1>

<p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une chaîne de caractère représentant une date.<br>
<h4>Exemple :</h4>
<code>formaterDateFr("2018-02-23");</code>

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

//fonction qui imprime la date "jour-semaine jour mois an" en partant d'une chaine "an-mois-jour"
function formaterDateFr($chaine)
    {
        //tableau associative de les jour de la semaine
        $jour_semaine = [   "Lundi" => "1",
                            "Mardi" => "2",
                            "Mercredi" => "3",
                            "Jeudi" => "4",
                            "Vendredi" => "5",
                            "Samedi" => "6",
                            "Dimanche" => "7"
                        ];
        
        //tableau associative de les mois de l'an (fr->an)
        $mois_an = [    "Janvier" => "January",
                        "Février" => "February",
                        "Mars" => "Mars",
                        "Avril" => "April",
                        "Mai" => "May",
                        "Juin" => "June",
                        "Juillet" => "July",
                        "Aout" => "August",
                        "Septembre" => "September",
                        "Octobre" => "October",
                        "Novembre" => "November",
                        "Décembre" => "Dicember"
                    ];
        
        //chaine au datetime format
        $date = new DateTime($chaine);
        
        //datetime transfomé en chaine "numero-jour-semaine jour mois an"
        $result = $date->format("N j F Y");

        //chaine qui represente le numero de jour de la semaine
        $num_jour = explode(' ', $result)[0];
        
        //chaine qui represent le mois de l'an en anglais
        $mois = explode(' ', $result)[2];
    
        
        //remplacement de le numero de jour de la semaine avec le jour de la semaine correspondant
        foreach($jour_semaine as $jour => $numero)
            {
                if($num_jour == $numero)
                    {
                        $result = preg_replace("/".$num_jour."/i", $jour , $result, 1);
                    }
            }
        
        //remplacement de le mois de l'anglais en francais correspondant
        foreach($mois_an as $mois_francais => $mois_anglais)
            {
                if($mois == $mois_anglais)
                    {
                        $result = str_replace($mois_anglais, $mois_francais, $result);
                    }
            }
        
        //imprime de la date
        echo $result."<br>";
    }

//la date d'aujourd'hui
$aujourdhui = new DateTime('now'); 

//date de depart choix arbitrairement 
$depart = new DateTime('1900-01-01');

//date de naissaince de qqn entre la date de depart et aujourd'hui
$date_random = random_date($depart, $aujourdhui);

//appel de la fonction avec sujet la date demande
formaterDateFr("2018-02-23");

//appel de la fonction avec sujet une date aleaotire en format an-mois-jour
formaterDateFr($date_random->format('Y-m-j'));


?>