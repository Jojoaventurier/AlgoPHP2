<h2>Exercice 4</h2>

<p>
    A partir de l'exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui 
    contiendra le lien hypertexte de la page Wikipedia de la capitale (le lien hypertexte devra
    s'ouvrir dans un nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).<br>
    On admet que le l'URL de la page Wikipedia de la capitale adopte la forme :<br>
    https://fr.wikipedia.org/wiki/<br>
    Le tableau passé en argument sera le suivant :<br>
    $capitales = array("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington",<br>
    "Italie"=>"Rome","Espagne"=>"Madrid");</p>

<?php

$capitales = array("France" => "Paris", "Allemagne" => "Berlin", "USA" => "Washington", "Italie" => "Rome");

ksort($capitales);
afficherTableHTML($capitales);

function afficherTableHTML($array) {
    echo "<table border=1><th>Capitale </th><th>Pays </th><th>Wiki </th>";
    foreach ($array as $key => $value) {
        echo "<tr><td>". $value ."</td><td>". mb_strtoupper($key)."</td><td>". '<a href="https://fr.wikipedia.org/wiki/'. $value .'." target="_blank">Lien</a>'."</td></tr>";
    }
    echo "</table>";
}
