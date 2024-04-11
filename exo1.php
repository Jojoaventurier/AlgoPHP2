<h2>Exercice 1</h2>

<p>
    Créer une fonction personnalisée "convertirMajRouge()" permettant de transformer 
    une chaîne de caractère passée en argument en majuscules et en rouge.<br>
    Vous devrez appeler la fonction comme suit : convertirMajRouge($texte);
</p>

<?php

echo $texte = "Mon texte en paramètre<br>";

$text = "";

function convertirMajRouge(string $text): string {
     $text = mb_strtoupper($text);
     $text = str_ireplace($text , '<font color="red">'.$text.'</font>', $text);
     return $text;
}

echo convertirMajRouge($texte);

