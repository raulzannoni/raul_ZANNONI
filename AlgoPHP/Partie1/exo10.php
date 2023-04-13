<h1>Exercise 10</h1>


A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 1 €.


<h2>Résultat</h2>

<?php

function caisse_auto($val1, $val2)
    {
        $reste = $val2 - $val1;
        
        $mod_10 = $reste % 10;
        $numero_billet_10 = ($reste - $mod_10) / 10;
        $mod_5 = $mod_10 % 5;
        $numero_billet_5 = ($mod_10 - $mod_5) / 5;
        $mod_2 = $mod_5 % 2;
        $numero_monnaie_2 = ($mod_5 - $mod_2) / 2;
        $mod_1 = $mod_2 % 1;
        $numero_monnaie_1 = ($mod_2 - $mod_1) / 1;

        echo "Montant à payer : $val1 €<br>";
        echo "Montant à payer : $val2 €<br>";
        echo "Reste à payer : $reste €<br>";
        echo "*********************************************<br>";
        echo "Rendue de monnaie : <br>";

        $phrase1 = " billets de ";
        $phrase2 = " monnaie de ";

        if ($reste == 0)
            {
                echo "Aucune reste<br>";
            }
        else
            {
                echo "$numero_billet_10 $phrase1 10 € - $numero_billet_5 $phrase1 5 € - $numero_monnaie_2 $phrase2 2 € - $numero_monnaie_1 $phrase2 1 €<br>";
            }
        
    }

$prix = rand(1, 500);
$verse = rand($prix, 500);

caisse_auto($prix, $verse);

?>