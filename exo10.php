<?php 

require 'fonctionsexos.php';

?>

<h2>Exercice 10</h2>

<p>
   En utilisant l'ensemble des fonctions personnalisées précédemment, créer un formulaire<br>
   complet qui contient les informations suivantes : champs de texte avec nom,; prénom,<br>
   adresse e-mail, ville, sexe et une liste de choix parmis lesquels on pourra sélectionner<br>
   un intitulé de formation : "Développeur Logiciel", "Designer web", "Intégrateur" ou "chef de projet".<br>
   Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement<br>
   de validation (submit).
</p>


<?php
$champsDeTextes = ["Nom", "Prénom", "adresse-email", "ville"];
$sexes = ["Mademoiselle", "Madame", "Monsieur"];
$formations = ["Développeur Logiciel", "Designer Web", "Intégrateur", "Chef de Projet"];



afficherRadio($sexes);
echo "<br>";
makeTextInputField($champsDeTextes); 
alimenterListeDeroulante($formations);
?>

<select>
   <?php
         alimenterListeDeroulante($formations);
   ?>
</select>


