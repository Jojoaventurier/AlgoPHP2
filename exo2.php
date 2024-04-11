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

$capitales = array("France" => "Paris", "Allemange" => "Berlin", "USA" => "Washington", "Italie" => "Rome");
$capitals = array("" => "");
$tab = array("Globulle", "Globulex", "Globulax");


$capitales = ksort($capitales);
var_dump($capitals);


foreach ($capitales as $pays => $capitale) {
   echo $pays = mb_strtoupper($pays);
 }

function afficherTableHTML($capitals) {
    
 
    echo "<pre>";
    print_r($capitals);
    echo "</pre>";
}

afficherTableHTML($capitales);




/*
$capitales = array("France" => "Paris", "Allemange" => "Berlin", "USA" => "Washington", "Italie" => "Rome");
$capitals = array("" => "");
function afficherTableHTML($capitals) {
    $capitals = ksort($capitals);
    

    echo "<pre>";
    print_r($capitals);
    echo "</pre>";
}

afficherTableHTML($capitales);
*/