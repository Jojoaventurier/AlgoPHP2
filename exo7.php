<h2>Exercice 7</h2>

<p>
    Créer une fonction personnalisée permettant de générer des cases à cocher.<br>
    On pourra préciser dans le tableua associatif si la case est cochée ou non.<br>
    Exemple :<br>
    genererCheckbox($elements);<br>
    //où $elements est un tableau associatif clé => valeur avec 3 entrées.
</p>


<?php

$elements = ["Mademoiselle" => false , "Madame" => true , "Monsieur" => false ];

alimenterListeDeroulante($elements);

function alimenterListeDeroulante($array) {

    foreach($array as $key => $value) {
        
        if ($value == false) {

            echo '<input type = "checkbox" value ="'.strtolower($key).'">' .$key.'</input><br>';

        }  else if ($value == true) {

            echo '<input checked = true type = "checkbox" value ="'.strtolower($key).'">' .$key.'</input><br>';
        }
    }
}
