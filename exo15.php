<h2>Exercice 15</h2>

<p>
    En utilisant les ressources de la page http://php.net/manual/fr/book.filter.php, vérifier si une<br>
    adresse e-mail a le bon format.<br>
    Affichage :<br>
    L'adresse elan@elan-formation.fr est une adresse e-mail valide.<br>
    L'adresse contact@]elan est une adresse mail invalide.

</p>

<?php

$email1 = "john.doe@example.com";


if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo("$email is a valid email address");
} else {
  echo("$email is not a valid email address");
}