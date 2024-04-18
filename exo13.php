<h2>Exercice 13</h2>

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

    private string $marque;
    private string $modele;
    private int $nbPortes;
    private float $vitesseActuelle;
    private bool $isOn;
    private int $idVoiture;


    public function __construct(string $marque, string $modele, string $nbPortes) {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->nbPortes = $nbPortes;
        $this->isOn = $isOn = false;
        $this->idVoiture = $idVoiture;

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
        return "La vitesse du véhicule ". $this. " est de ". $this->vitesseActuelle." km/h<br>";
    }

    public function setVitesseActuelle($vitesseActuelle)
    {
        $this->vitesseActuelle = $vitesseActuelle;

        return $this;
    }

    public function getIsOn()
    {   if ($this->isOn == true) {
        return "Le véhicule ". $this->marque. " est démarré<br>";
    } else if ($this->isOn == false) {
        return "Le véhicule ". $this->marque. " est à l'arrêt<br>";
    }
}

    public function setIsOn($isOn)
    {
        $this->isOn = $isOn;

        return $this;
    }

    public function demarrer() {
        $this->setIsOn(true);
        $this->setVitesseActuelle(0);
        return "Le véhicule ". $this. " démarre<br>";
    }

    public function accelerer(float $augVit) {
        if ($this->isOn == true) {
            $this->vitesseActuelle .= $augVit;
            return "Le véhicule ". $this. " accélère de " .$augVit. "km/h <br>";
        } else if ($this->isOn == false) {
            return "Le véhicule ". $this. " veut accélérer de " .$augVit." km/h<br>Le véhicule ".$this." doit être démarré !<br>";
        }
    }

    public function stopper() {
        $this->setIsOn(false);
        $this->setVitesseActuelle(0);
        return "Le véhicule  ". $this. " est stoppé<br>";
    }

    public function ralentir($vitesse) {

    }

    public function getInfos() {
       return "<h2>Infos véhicule __</h2>
                **********************************<br>
                <p>Nom et modèle du véhicule : ". $this ."<br>
                Nombre de portes : ". $this->nbPortes. "<br>"
                . $this->getIsOn() . 
                "Sa vitesse actuelle est de : ".$this->vitesseActuelle." km/h<br>";
                
    }

    public function __toString() {
        return $this->marque." ". $this->modele;
    }

}

$v1 = new Voiture ("Peugeot", "408", 5);
$v2 = new Voiture ("Citroën", "C4", 3);

echo $v1->demarrer();
echo $v1->accelerer(50);
echo $v2->demarrer();
echo $v2->stopper();
echo $v2->accelerer(20);
echo $v1->getVitesseActuelle();
echo $v2->getVitesseActuelle();

echo $v1->getInfos();
echo $v2->getInfos();


