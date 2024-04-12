<?php

function makeTextInputField($array) {

    foreach ($array as $key) {
       $text = ucfirst($key);
           echo"
           <label for='{$key}'>{$text}<br></label>
           <input type='text' name='{$key}' />
           <br>";  
       }
   }

function alimenterListeDeroulante($array) {
    foreach($array as $value) {
    echo '<option value="'.strtolower($value).'">' .$value.'</option>';
    }
}
            
function genererCheckbox($array) {

    foreach($array as $key => $value) {
            echo '<input '.$value.' type = "checkbox" value ="'.strtolower($key).'">' .$key. '</input><br>';
        }  
    }

function afficherRadio($array) {

    foreach($array as $key) {
            echo '<input name= "name" type = "radio" value ="'.strtolower($key).'">' .$key. '</input>';
    }  
}