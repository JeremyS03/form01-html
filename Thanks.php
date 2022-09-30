<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Thanks</title>
    </head>
    <body>
        <p>Merci <?= $_POST["user_firstname"]; $_POST["user_name"]; ?> de nous avoir contacté à propos de <?= $_POST["user_subject"]; ?>. <br> Un de nos conseiller vous contactera soit à l’adresse <?php echo $_POST["user_mail"]; ?> ou par téléphone au <?php echo $_POST["user_phone"]; ?> dans les plus brefs délais pour traiter votre demande : <br><br> <?= $_POST["user_message"]; ?></p>
    </body>
</html>

