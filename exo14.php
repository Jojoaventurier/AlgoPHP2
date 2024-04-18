<h2>Exercice 14</h2>

<p>
    Créer une classe Voiture possédant 2 propriétés (marque et modèle) ainsi qu'une classe VoitureElec<br>
    qui hérite (extends) de la classe Voiture et qui a une copriété supplémentaire (autonomoie).<br>
    Instancier une voiture "classique" et une voiture "electrique" ayant les caractéristiques suivantes :<br>
    - Peugeot 408:$v1 = new Voiture("Peugeot","408");<br>
    - BMW i3 150:$ve1 = new VoitureElec("BMW","I3",100);<br>
    Votre programme de test devra afficher les informations des 2 voitures de la façon suivante :<br>
    echo $v1->getInfos()."<br/>";<br>
    echo $ve1->getInfos()."<br/>";<br>
</p>

<?php

class Voiture {

    private string $marque;
    private string $modele;

    public function __construct(string $marque, string $modele) {
        $this->marque = $marque;
        $this->modele = $modele;
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
}

class VoitureElec extends Voiture {

    private int $autonomie;

    public function __construct($data, int $autonomie) {

        parent::__construct($data);
        $this->autonomie = $autonomie;

    }
}