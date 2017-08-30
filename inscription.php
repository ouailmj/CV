<!DOCTYPE html>
<html>
    <head>
        <title>Page d'inscription</title>
        <meta = charset="UTF8" />
    </head>
 
    <body>
        <h1>Formulaire d'inscription</h1>
 
        <form method="post" action="inscription_post.php">
            <p><label for="pseudo">Pseudo :</label><input type="text" name="pseudo" id="pseudo" required="required" autofocus placeholder="ex:julien" /></p>
            <p><label for="pass">Mot de passe :</label><input type="password" name="pass" id="pass" /></p>
            <p><label for="passverifie">Mot de passe :</label><input type="password" name="passverifie" id="passverifie" /></p>
            <p><label for="mail">Adresse e-mail :</label><input type="email" name="mail" id="mail" placeholder="exemple@mail.fr" /></p>
            <p><input type="submit" value="envoyer"></p>
        </form>
    </body>
</html>