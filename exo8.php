<h2>Exercice 8</h2>

<p>
    Soit l'URL suivante : http://my.mobirise.com/data/userpic/764.jpg<br>
    Créer une fonction personnalisée permettant d'afficher l'image N fois à l'écran.<br>
    Exemple :<br>
    repeterImage($url, 4);
</p>

<?php


$urlImage = 'http://my.mobirise.com/data/userpic/764.jpg';

// FAIRE AVEC FOR -FAIRE AVEC FOR -FAIRE AVEC FOR -FAIRE AVEC FOR -FAIRE AVEC FOR -FAIRE AVEC FOR -FAIRE AVEC FOR -

function repeterImage(string $url,int $nbRepet) {
    $i = 0;
    $imageData = base64_encode(file_get_contents($url));
    while ($i < $nbRepet) {
        echo '<img src="data:image/jpeg;base64,'.$imageData.'">';
        $i++;
    }
}

repeterImage($urlImage, 2);

// FAIRE AVEC FOR -FAIRE AVEC FOR -FAIRE AVEC FOR -FAIRE AVEC FOR -FAIRE AVEC FOR -FAIRE AVEC FOR -FAIRE AVEC FOR -