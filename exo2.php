<h2>Exercice 2</h2>

<p>
    Soit le tableau suivant :<br>
    $capitales = array<br>
    ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");<br>
    Réaliser un algorithme permettant de les afficher sous forme de tableau HTML 
    avec le nom du pays affiché en majuscules et triés par ordre alphabétique grâce 
    à une fonction personnalisée.<br>
</p>

<?php

$capitales = array("France" => "Paris", "Allemagne" => "Berlin", "USA" => "Washington", "Italie" => "Rome");

ksort($capitales);
afficherTableHTML($capitales);

function afficherTableHTML($array) {
    echo "<table border=1><th>Pays </th><th>Capitale </th>";
    foreach ($array as $key => $value) {
        echo "<tr><td>". strtoupper($key) ."</td><td>". $value."</td></tr>";
    }
    echo "</table>";
}


/*
$capitals = array("" => "", "" => "");
function afficherTableHTML($capitals) {
   
    ksort($capitals);
    echo "<pre>";
    print_r(array_change_key_case($capitals, CASE_UPPER));
    echo "</pre>";
}

afficherTableHTML($capitales);

foreach ($this->chambres as $chambre) {
        $result .= "Chambre ". $chambre->getnumChambre(). "
         ". $chambre->getPrixNuit(). "€ ". $chambre->getWifi(). " ".$chambre->getDisponible() ."<br>";
    } return $result;
*/