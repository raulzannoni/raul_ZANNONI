<h1>Exercise 15</h1>

<p>En utilisant les ressources de la page <a href="http://php.net/manual/fr/book.filter.php" target="_blank">http://php.net/manual/fr/book.filter.php</a>, vérifier si une adresse e-mail a le bon format.<br>

<h2>Résultat</h2>

<?php

//fonction qui controle si un email est un correcte ou pas
function check_mail(string $mail)
    {
        //filter_var(string, FILTER_VALIDATE_EMAIL) return "TRUE" si string est un email correcte, sinon "FALSE"
        if(filter_var($mail, FILTER_VALIDATE_EMAIL))
            {
                echo "L'addresse <b>".$mail."</b> est une addresse e-mail valide!<br>";
            }
        else
            {
                echo "L'addresse <b>".$mail."</b> est une addresse e-mail invalide!<br>";
            }
    }

//appelle de la fonction pour deux different "mail"
check_mail("elan@elan-formation.fr");
check_mail("contact@elan");


?>