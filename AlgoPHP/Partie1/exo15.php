<h1>Exercise 15</h1>


<p>Créer une classe Personne (nom, prénom et date de naissance). Instancier 2 personnes et afficher leurs informations : nom, prénom et âge. <br>



<h2>Résultat</h2>

<?php

class Personne
    {
        private $_nom;
        private $_prenom;
        private $_date_naissance;


        public function __construct($nom, $prenom, $date_naissance)
            {
                $this->_nom = $nom;
                $this->_prenom = $prenom;
                $this->_date_naissance = $date_naissance;

                $birth = new DateTime($date_naissance);
                $now = new DateTime('now');

                $intervall = $now->diff($birth);

                $ans = $intervall->y;
            
                echo "$prenom $nom a  $ans ans <br>";
                
            }

    }

$p1 = new Personne("DUPONT", "Michel", "1980-02-19") ;
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ;



?>