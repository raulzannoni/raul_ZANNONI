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

        //attribut float statique de la vitesse, instancié par 0
        private static float $_vitesseActuelle = 0;

        //attribut bool statique qui qui vérifie si la machine fonctionne (par defaut no)
        private static bool $_active = FALSE;

        //attribut statique de numero de voiture, instancié par 0
        private static float $_numVoiture = 0;  

        //getter et setter pour chaque attribut

        public function setMarque($marque) {
            $this->_marque = $marque;
        }
        public function getMarque() {
            return $this->_marque;
        }

        public function setModele($modele) {
            $this->_marque = $modele;
        }

        public function getModele() {
            return $this->_modele;
        }

        public function setNBPortes($nBPortes) {
            $this->_modele = $nBPortes;
        }

        public function getNBPortes() {
            return $this->_nBPortes;
        }

    

        //constructor de la classe voiture
        public function __construct(string $marque, string $modele, int $nBPortes)
            {
                //definition de la liste de le constructor
                $this->_marque = $marque;
                $this->_modele = $modele;
                $this->_nBPortes = $nBPortes;
                //compteur de voiture
                self::$_numVoiture++;
            }
        
        // methode pour demarrer la voiture
        public function demarrer()
            {
                //demaragge de la voiture
                self::$_active = TRUE;
                echo "Le véhicule ".$this->_marque." ".$this->_modele." démarre!<br>";
            }
        
        //methode pour accelerer la voiture
        public function accelerer(float $vitesse)
            {
                //controle si la voiture est demarré
                if(self::$_active)
                    {
                        self::$_vitesseActuelle += $vitesse;
                        echo "Le véhicule ".$this->_marque." ".$this->_modele." accélère de ".strval(self::$_vitesseActuelle)." km/h !<br>";
                    }
                else
                    {
                        echo "Le véhicule ".$this->_marque." ".$this->_modele." veut accélerer de ".strval($vitesse)." km/h !<br>";
                        echo "Pour accélerer, il faut démarrer le véhicule ".$this->_marque." ".$this->_modele."!<br>";
                    }
            }

        //methode pour stopper la voiture
        public function stopper()
            {
                //controle si la voiture est demarré
                if(self::$_active)
                    {
                        self::$_vitesseActuelle = 0;
                        echo "Le véhicule ".$this->_marque." ".$this->_modele." est stoppé!<br>";
                        self::$_active = FALSE;
                    }

                    else
                    {
                        echo "Pour stopper, il faut démarrer le véhicule ".$this->_marque." ".$this->_modele."!<br>";
                    }
               

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
                echo "****************************************<br>";
                echo "Nom et modèle du véhicule: ".$this->_marque." ".$this->_modele."<br>";
                echo "Nombre de portes: ".$this->_nBPortes."<br>";
                if(self::$_active)
                    {
                        echo "Le véhicule ".$this->_marque." est démarré<br>";
                    }
                else
                    {
                        echo "Le véhicule ".$this->_marque." est à l'arret<br>";
                    }
                echo "Sa vitesse actuelle est de: ".strval(self::$_vitesseActuelle)." km/h<br>";
                echo "****************************************<br><br>";

            }

    }


//les deux voitures construites
$voiture_1 = new Voiture("Peugeot", "408", 5);
$voiture_2 = new Voiture("Citroën", "C4", 3);

//----------------------------------

$voiture_1->demarrer();
$voiture_1->accelerer(50);

//----------------------------------

$voiture_2->demarrer();
$voiture_2->stopper();
$voiture_2->accelerer(30);

//----------------------------------


$voiture_1->vitesse();
$voiture_2->vitesse();

//----------------------------------

$voiture_1->infos();
$voiture_2->infos();



?>