<h2>Exercice 11</h2>

<p>
    Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres)<br>
    à partir d'une chaîne de caractère représentant une date.<br>
    Exemple :<br>
    formaterDateFr("2018-02-23");<br>
    Affichage<br>
    vendredi 23 février 2018
</p>

<?php

echo date("d-m-Y");
echo "<br>";

$dateString = "2018-02-23";
$date = strtotime($dateString);
echo date("d-m-Y", $date);
echo "<br>";
echo date('l jS \of F Y', $date);
echo "<br>";

$fmt = datefmt_create( "fr-FR",
   IntlDateFormatter::FULL, 
   IntlDateFormatter::FULL,
   'Europe/Paris',
   IntlDateFormatter::GREGORIAN,
   "EEEE, 'le' d LLLL Y");

 echo "Aujourd'hui, nous sommes " . datefmt_format( $fmt ,time());

