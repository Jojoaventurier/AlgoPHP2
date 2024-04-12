<h2>Exercice 5</h2>

<p>
    Créer une fonction personnalisée permettant de créer un formulaire de champs de texte
    en précisant le nom des champs associés.<br>
    Exemple :<br>
    $nompsInput = array("Nom","Prénom","Ville");<br>
    afficherInput($nomsInput);
</p>

<?php

$tabForm = array("Nom", "Prénom", "Ville");

function makeTextInputField($array) {

 foreach ($array as $key) {
    $text = ucfirst($key);
        echo"
        <label for='{$key}'>{$text}<br></label>
        <input type='text' name='{$key}' />
        <br>";  
    }
}

makeTextInputField($tabForm);

