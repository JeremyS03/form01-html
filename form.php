
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>My test page</title>
  </head>
  <body>
    <p>This is my page</p> 


    <form action="Thanks.php" method="post">
        <div>
            <label for="name">Nom :</label>
            <input type="text" id="name" name="user_name">
        </div>
        <div>
            <label for="firstname">Prenom :</label>
            <input type="text" id="firstname" name="user_firstname">
        </div>
        <div>
            <label for="mail">e-mail&nbsp;:</label>
            <input type="email" id="mail" name="user_mail">
        </div>
        <div>
            <label for="phoneNumber">Téléphone&nbsp;:</label>
            <input type="tel" id="phoneNumber" name="user_phone">
        </div>
        <div>
            <label for="list">Sujet :</label>
            <select id="subject" name="user_subject">
                <option value="partenariat">Partenariat</option>
                <option value="candidature">Candidature</option>
                <option value="Autre">Autre</option>
            </select>
        <div>
            <label for="msg">Message :</label>
            <textarea id="msg" name="user_message"></textarea>
        </div>
        <div  class="button">
            <button  type="submit">Envoyer votre message</button>
        </div>
    </form>

  </body>
</html>



