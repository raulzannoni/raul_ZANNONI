<h1>Exercise 4</h1>

<p>A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un nouvel onglet et le tableau sera trié par ordre alphabétique <b>de la capitale)</b>.<br>
<p>On admet que l’URL de la page Wikipédia de la capitale adopte la forme :<br>
<a href="https://fr.wikipedia.org/wiki/" target="-blank">https://fr.wikipedia.org/wiki/</a><br><br>
Le tableau passé en argument sera le suivant :<br>
<code>$capitales = array ("France"=>"Paris","Allemagne"=>"Berlin", "USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid");</code>

<h2>Résultat</h2>

<?php

//fonction qui affiche en HTML un tableu de un array associative plus le link Wikipedia de la valeur
function afficherTableHTML($array_ass)
    {
        //array ordonné par ordre alphabetique de la valeur
        asort($array_ass);

        //link de wikipedia
        $link_wiki = "https://fr.wikipedia.org/wiki/";
        //modalite d'ouverture: nouvel onglet
        $link_ext = "_blank";         

        //tableau en HTML: Entrete de tableau
        $result =   "<table border=1>
                        
                        <thead>
                            <tr>
                                <th>Pays</th>
                                <th>Capitales</th>
                                <th>Lien wiki</th>
                            </tr>
                        </thead>
                        <tbody>";

        //Corps du tableau, boucle pour chaque pays (en majuscule), capitale (1er lettre majuscule) et link wikipedia de la capitale ajouté au entrete du tableau              
        foreach($array_ass as $key => $value)
            {
                $result .=  "<tr>
                                <td>". mb_strtoupper($key) ."</td>
                                <td>". ucfirst($value). "</td>
                                <td><a href=".$link_wiki.ucfirst($value)." target=".$link_ext.">Lien</a></td>
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
                "Italie"=>"rome",
                "Espage"=>"madrid"
            ];

//imprime et appel de la fonction
echo afficherTableHTML($capitales);



?>