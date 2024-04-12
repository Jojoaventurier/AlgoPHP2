<h2>Exercice 12</h2>

<p>
    La fonction var_dump($variable) permet d'afficher les informations d'une variable.<br>
    Soit le tableau suivant :<br>
    $tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2"));<br>
    A l'aide d'une boucle, afficher les informations des variables contenues dans le tableau.
</p>

<?php

$tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2"));

function renderVarDump($array) {
    for ($i = 0; $i < count($array); $i++) {
        var_dump($array[$i]);
        echo "<br>";
    }
}

renderVarDump($tableauValeurs);