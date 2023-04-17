<h1>Exercise 15</h1>


<p>Créer une classe Personne (nom, prénom et date de naissance). Instancier 2 personnes et afficher leurs informations : nom, prénom et âge. <br>



<h2>Résultat</h2>

<?php

//objet personne
class Personne
    {
        //proprietés privées
        private string $_nom;
        private string $_prenom;
        private string $_sexe;
        private DateTime $_dateNaissance;

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
            return $this->_dateNaissance;
        }

        public function setDate($dateNaissance) {
            $this->_dateNaissance = $dateNaissance;
        }

        //constructor de la classe personne
        public function __construct(string $nom, string $prenom, string $sexe, string $dateNaissance)
            {
                //definition de la liste de le constructor
                $this->_nom = $nom;
                $this->_prenom = $prenom;
                $this->_sexe = $sexe;
                $this->_dateNaissance = new DateTime ($dateNaissance);
            }
        
        //methode qui affiche prenom nom sexe et age de la personne
        public function calcAge()
            {
                //aujourd'hui selon DateTime
                $now = new DateTime('now');

                //calcul de l'age de la personne construite
                $intervall = $now->diff($this->_dateNaissance);
                
                //imprime de prenom, nom et age (en ans) de la personne construite
                echo $this->_prenom." ".$this->_nom.", ".$this->_sexe.",   a  ".$intervall->y." ans <br>";

            }

    }

//les deux personnes construites
$p1 = new Personne("DUPONT", "Michel", "homme", "1980-02-19") ;
$p2 = new Personne("DUCHEMIN", "Alice", "femme", "1985-01-17") ;

//appel de le methode calcAge() pour les deus personne construites
$p1->calcAge();
$p2->calcAge();



?>