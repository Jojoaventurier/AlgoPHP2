<h2>Exercice 13 - AVOIR VU OBJETS AVANT DE FAIRE</h2>

<p>
    Créer une classe Voiture possédant les propriétés suivantes : marque, modèle, nbPortes et<br>
    vitesseActuelle ainsi que les méthodes démarrer(), accélerer(), et stopper() en plus des<br>
    accesseurs (get) et mutateurs (set) traditionnels. La vitesse initiale de chaque véhicule<br>
    instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations<br>
    d'un véhicule.<br>
    v1->"Peugeot","408",5<br>
    v2->"Citroën","C4",3<br>
    Coder l'ensemble des méthodes, accesseurs et mutateurs de la classe tout en réalisant des jeux<br>
    de tests pour vérifier la cohérence de la classe Voiture. Vous devez afficher les tests et<br>
    les éléments suivants :(voirPDF)<br>
    (Bonus : ajouter une méthode ralentir(vitesse) dans la classe Voiture.) 
</p>

<?php

class Voiture {

    public string $marque;
    public string $modele;
    public int $nbPortes;
    public float $vitesseActuelle;

    public function __construct(string $marque, string $modele, string $nbPortes) {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->nbPortes = $nbPortes;

    }

    public function getMarque()
    {
        return $this->marque;
    }

    public function setMarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }

    public function getModele()
    {
        return $this->modele;
    }

    public function setModele($modele)
    {
        $this->modele = $modele;

        return $this;
    }

    public function getNbPortes()
    {
        return $this->nbPortes;
    }

    public function setNbPortes($nbPortes)
    {
        $this->nbPortes = $nbPortes;

        return $this;
    }


    public function getVitesseActuelle()
    {
        return $this->vitesseActuelle;
    }

    public function setVitesseActuelle($vitesseActuelle)
    {
        $this->vitesseActuelle = $vitesseActuelle;

        return $this;
    }

    public function demarrer() {

    }

    public function accelerer() {

    }

    public function stopper() {

    }

    public function ralentir(vitesse) {

    }
}