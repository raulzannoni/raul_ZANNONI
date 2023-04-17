<h1>Exercise 15</h1>


<p>Créer une classe Personne (nom, prénom et date de naissance). Instancier 2 personnes et afficher leurs informations : nom, prénom et âge. <br>



<h2>Résultat</h2>

<?php

//objet personne
class Personne
    {
        //proprietés privées
        private $_nom;
        private $_prenom;
        private $_sexe;
        private $_date_naissance;

        //getter et setter pour chaque proprieté
        public function getNom() {
            return $this->_nom;
        }

        public function setNom($nom) {
            $this->_nom = $nom;
        }

        public function getPrenom() {
            return $this->_prenom;
        }

        public function setPrenom($prenom) {
            $this->_prenom = $prenom;
        }

        public function getSexe() {
            return $this->_sexe;
        }

        public function setSexe($sexe) {
            $this->_sexe = $sexe;
        }

        public function getDate() {
            return $this->_date_naissance;
        }

        public function setDate($date_naissance) {
            $this->_date_naissance = $date_naissance;
        }

        //constructor de la classe personne
        public function __construct($nom, $prenom, $sexe, $date_naissance)
            {
                //definition de la liste de le constructor
                $this->_nom = $nom;
                $this->_prenom = $prenom;
                $this->_sexe = $sexe;
                $this->_date_naissance = $date_naissance;

                //date de naissance selon DateTime
                $birth = new DateTime($date_naissance);
                //aujourd'hui selon DateTime
                $now = new DateTime('now');

                //calcul de l'age de la personne construite
                $intervall = $now->diff($birth);
                
                //imprime de prenom, nom et age (en ans) de la personne construite
                echo "$prenom $nom, $sexe,   a  $intervall->y ans <br>";
                
            }

    }

//les deux personnes construites
$p1 = new Personne("DUPONT", "Michel", "homme", "1980-02-19") ;
$p2 = new Personne("DUCHEMIN", "Alice", "femme", "1985-01-17") ;



?>