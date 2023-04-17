<h1>Exercise 13</h1>

<p>Créer une classe Voiture possédant les propriétés suivantes : <code> marque</code>, <code>modèle</code>, <code>nbPortes</code> et <code>vitesseActuelle</code> ainsi que les méthodes <code>demarrer( )</code>, <code>accelerer( )</code> et <code>stopper( )</code> en plus des accesseurs (<code>get</code>) et mutateurs (<code>set</code>) traditionnels. La vitesse initiale de chaque véhicule instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d’un véhicule.<br>

<p>v1 ➔ <code>"Peugeot"</code>,<code>"408"</code>,<code>5</code> <br>
v2 ➔ <code>"Citroën"</code>,<code>"C4"</code>,<code>3</code><br>
<p>Coder l’ensemble des méthodes, accesseurs et mutateurs de la classe tout en réalisant des jeux de tests pour vérifier la cohérence de la classe Voiture.<br>

<p><b>Bonus</b> : ajouter une méthode <code>ralentir(vitesse)</code> dans la classe Voiture.

<h2>Résultat</h2>

<?php

class Voiture
    {
        //attibuts privées marque, model et nombres desportes
        private string $_marque;
        private string $_modele;
        private int $_nBPortes;

        //attribut statique de la vitesse, instancié par 0
        private static float $_vitesseActuelle = 0;

        //attribut statique de numero de voiture, instancié par 0
        private static float $_numVoiture = 0;  

        //getter et setter pour chaque attribut
        public function getMarque() {
            return $this->_marque;
        }

        public function setNom($marque) {
            $this->_marque = $marque;
        }

        public function getModele() {
            return $this->_modele;
        }

        public function setModele($modele) {
            $this->_modele = $modele;
        }

        public function getNBPortes() {
            return $this->_nBPortes;
        }

        public function setSexe($nBPortes) {
            $this->_nBPortes = $nBPortes;
        }

        //constructor de la classe voiture
        public function __construct($data)
            {
                //definition de la liste de le constructor
                $this->_marque = $data[0];
                $this->_modele = $data[1];
                $this->_nBPortes = $data[2];
                //compteur de voiture
                self::$_numVoiture++;
            }
        
        // methode pour demarrer la voiture
        public function demarrer()
            {
                echo "Le véhicule ".$this->_marque." ".$this->_modele." démarre!<br>";
            }
        
        //methode pour accelerer la voiture
        public function accelerer(float $vitesse)
            {
                self::$_vitesseActuelle += $vitesse;
                echo "Le véhicule ".$this->_marque." ".$this->_modele." accélère de ".strval(self::$_vitesseActuelle)." km/h !<br>";
            }

        //methode pour stopper la voiture
        public function stopper(float $vitesse)
            {
                self::$_vitesseActuelle = 0;
                echo "Le véhicule ".$this->_marque." ".$this->_modele." est stoppé!<br>";
                echo "Le véhicule ".$this->_marque." ".$this->_modele." veut accélerer de ".strval($vitesse)." km/h !<br>";
                echo "Pour accélerer, il faut démarrer le véhicule ".$this->_marque." ".$this->_modele."!<br>";

            }
        
        //methode pour afficher la vitesse de la voiture
        public function vitesse()
            {
                echo "La vitesse du véhicule ".$this->_marque." ".$this->_modele." est de ".strval(self::$_vitesseActuelle)." km/h !<br>";
            }
        
        //methode sur les infos de la voiture
        public function infos()
            {
                echo "<br>Info véhicule ".strval(self::$_numVoiture).":<br>";
                echo "************************<br>";
                echo "Nom et modèle du véhicule: ".$this->_marque." ".$this->_modele."<br>";
                echo "Nombre de portes: ".$this->_nBPortes."<br>";
                if(self::$_vitesseActuelle != 0)
                    {
                        echo "Le véhicule ".$this->_marque." est démarré<br>";
                    }
                else
                    {
                        echo "Le véhicule ".$this->_marque." est à l'arret<br>";
                    }
                echo "Sa vitesse actuelle est de: ".strval(self::$_vitesseActuelle)." km/h<br>";

            }









    }

//chaines identifiant les voitures à construire
$v1 =   [   "Peugeot",
            "408",
            5
        ];    
$v2 =   [   "Citroën",
            "C4",
            3
        ];

//les deux voitures construites
$voiture_1 = new Voiture($v1);
$voiture_2 = new Voiture($v2);

$voiture_1->demarrer();
$voiture_1->accelerer(50);



$voiture_2->demarrer();
$voiture_2->stopper(20);

$voiture_1->vitesse();
$voiture_2->vitesse();

$voiture_1->infos();
$voiture_2->infos();

?>