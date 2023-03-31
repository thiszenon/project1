<!DOCTYPE html>
<html>
  <head>
    <title>inscription</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="login">
        <form action="server.php" method="post">
            <h1>Inscription</h1>
            <label for="firstName">Nom :</label>
            <input type="text" id="firstName" name="firstName"><br><br>
            <label for="lastName">Prénom:</label>
            <input type="text" id="lastName" name="lastName"><br><br>
            <label for="email">Adresse email:</label>
            <input type="text" id="email" name="email"><br><br>
            <label for="password">Mot de passe:</label>
            <input type="password" id="password" name="password"><br><br>
            <label for="confPassword">Confirmer le mot de passe:</label>
            <input type="password" id="confPassword" name="confPassword"><br><br>
            
            <input type="submit" value="S'inscrire">
        </form>
        <a href="login.php">se connecter</a>

    </div>
  
  </body>
</html>
