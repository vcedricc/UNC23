<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Envoi d'un message par formulaire</title>
</head>

<body>
    <?php
    $retour = mail('casper.cv@hotmail.fr', 'Envoi depuis la page Contact', $_POST['user_name, user_mail, phone, user_message'], 'From:');
    if ($retour)
        echo '<p>Votre message a bien été envoyé.</p>';
    ?>
</body>

</html>