<h1>Exercise 2</h1>

<p>Soit le tableau suivant :
<code>$capitales = array ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");</code><br>
<p>Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à une fonction personnalisée.<br>
Vous devrez appeler la fonction comme suit : <code>afficherTableHTML($capitales);</code>

<h2>Résultat</h2>

<?php

//fonction qui affiche en HTML un tableu de un array associative
function afficherTableHTML($array_ass)
    {
        //array ordonné par ordre alphabetique de la clé
        ksort($array_ass);

        //tableau en HTML: Entrete de tableau
        $result =   "<table border=1>
                        
                        <thead>
                            <tr>
                                <th>Pays</th>
                                <th>Capitales</th>
                            </tr>
                        </thead>
                        <tbody>";

        //Corps du tableau, boucle pour chaque pays (en majuscule) et capitale (1er lettre majuscule), ajouté au entrete du tableau              
        foreach($array_ass as $key => $value)
            {
                $result .=  "<tr>
                                <td>". mb_strtoupper($key) ."</td>
                                <td>". ucfirst($value). "</td>
                            </tr>";
            }

        //cloture de tableau html ajouté au resul precedent
        $result .=      "</tbody>
                    </table>";


        return $result;

    }

//tableau associative des chaines à afficher
$capitales = [
                "France"=>"paris",
                "Allemagne"=>"berlin",
                "USA"=>"washington",                        
                "Italie"=>"rome"
            ];




//imprime et appel de la fonction
echo afficherTableHTML($capitales);



?>