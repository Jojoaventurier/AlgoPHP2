<h2>Exercice 9</h2>

<p>
    Créer une fonction personnalisée permettant d'afficher des boutons radio avec<br>
    un tableau de valeurs en paramètre ("Monsieur", "Madame","Mademoiselle").<br>
    Exemple :<br>
    afficherRadio($nomsRadio);
</p>

<?php

$items = ["Mademoiselle", "Madame", "Monsieur"];
afficherRadio($items);

function afficherRadio($array) {
    
    foreach($array as $key) {
            echo '<input name = "name" type = "radio" value ="'.strtolower($key).'">' .$key. '</input><br>';
        }  
    }