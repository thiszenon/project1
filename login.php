<!DOCTYPE html>
<html>
  <head>
    <title>Page de connexion</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="login">
        <form method="post" action="verification.php">
            <h1>Connexion</h1>
            <label for="username">Nom d'utilisateur:</label>
            <input type="text" id="username" name="username" placeholder="ou adresse email"><br><br>
            <label for="password">Mot de passe:</label>
            <input type="password" id="password" name="password"><br><br>
            <input type="submit" value="Se connecter">
        </form>
        <a href="signup.php">s'inscrire ici</a>

    </div>
  
  </body>
</html>
