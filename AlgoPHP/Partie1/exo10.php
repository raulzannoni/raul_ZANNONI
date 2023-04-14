<h1>Exercise 10</h1>


A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 1 €.


<h2>Résultat</h2>

<?php

//function qui calcule et imprime le reste à donner automatiquement à partir de deus valeurs numerique
function caisse_auto($val1, $val2)
    {
        //reste à donner
        $reste = $val2 - $val1;
        
        //calculs
        $mod_10 = $reste % 10;
        $numero_billet_10 = intdiv($reste, 10);
        $mod_5 = $mod_10 % 5;
        $numero_billet_5 = intdiv($mod_10, 5);
        $mod_2 = $mod_5 % 2;
        $numero_monnaie_2 = intdiv($mod_5, 2);
        $mod_1 = $mod_2 % 1;
        $numero_monnaie_1 = intdiv($mod_2, 1);

        //imprime de les données
        echo "Montant à payer : $val1 €<br>";
        echo "Montant versé : $val2 €<br>";
        echo "Reste à payer : $reste €<br>";
        echo "*********************************************<br>";
        echo "Rendue de monnaie : <br>";

        $phrase1 = " billets de ";
        $phrase2 = " monnaie de ";

        //imprime de le reste specifié
        if ($reste == 0)
            {
                echo "Aucune reste<br>";
            }
        else
            {
                echo "$numero_billet_10 $phrase1 10 € - $numero_billet_5 $phrase1 5 € - $numero_monnaie_2 $phrase2 2 € - $numero_monnaie_1 $phrase2 1 €<br>";
            }
        
    }

//prix et paiement aleatoires
$prix = rand(1, 500);
$verse = rand($prix, 500);

//appela de la fonction caisse
caisse_auto($prix, $verse);

?>