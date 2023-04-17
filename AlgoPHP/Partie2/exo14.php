<h1>Exercise 14</h1>

<p>Créer une classe Voiture possédant 2 propriétés (marque et modèle) ainsi qu’une classe VoitureElec qui hérite (extends) de la classe Voiture et qui a une propriété supplémentaire (autonomie).<br>

<p>Instancier une voiture « classique » et une voiture « électrique » ayant les caractéristiques suivantes :<br>
<ul>
<li>Peugeot 408 : <code>$v1 = new Voiture("Peugeot","408");</code></li>
<li>BMW i3 150 : <code>$ve1 = new VoitureElec("BMW","I3",100);</code></li>
</ul>
<p>Votre programme de test devra afficher les informations des 2 voitures de la façon suivante :<br><br>

<code>echo $v1->getInfos()."< br/>";</code><br>
<code>echo $ve1->getInfos()."< br/>";</code> 

<h2>Résultat</h2>

<?php

class Voiture
    {
        //attibuts privées marque et model
        private string $_marque;
        private string $_modele; 

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

        //constructor de la classe voiture
        public function __construct(string $marque, string $modele)
            {
                //definition de la liste de le constructor
                $this->_marque = $marque;
                $this->_modele = $modele;
            }
        
        
        //methode sur les infos de la voiture
        public function getInfos()
            {
                $info =  "Nom et modèle du véhicule: ".$this->_marque." ".$this->_modele."<br>";

                return $info;
            }
    }

class VoitureElec extends Voiture
    {
        //attibuts privées marque et model
        private int $_autonomie;

        //getter et setter pour l'autonomie
        public function getAutonomie() {
            return $this->_autonomie;
        }

        public function setAutonomie($autonomie) {
            $this->_marque = $autonomie;
        }

        //constructor de la classe voiture electrique
        public function __construct(string $marque, string $modele, int $autonomie)
            {
                //definition de la liste de le constructor
                $this->_marque = $marque;
                $this->_modele = $modele;
                $this->_autonomie = $autonomie;
            }
        
        //methode sur les infos de la voiture electrique
        public function getInfos()
            {
                $info =  "Nom et modèle du véhicule éléctrique: ".$this->_marque." ".$this->_modele.", autonomie de ".strval($this->_autonomie)." km.<br>";

                return $info;
            }

    }

//les deux voitures construites
$v1 = new Voiture("Peugeot", "408");
$ve1 = new VoitureElec("BMW", "I3", 100);

//appel de le methode getInfo() pour chaque voiture

echo $v1->getInfos()."<br/>";
echo $ve1->getInfos()."<br/>";

?>