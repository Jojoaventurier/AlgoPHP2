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


function afficherTableHTML($capitals) {
   
    ksort($capitals);
    echo "<pre>";
    print_r(array_change_key_case($capitals, CASE_UPPER));
    echo "</pre>";
}

afficherTableHTML($capitales);

