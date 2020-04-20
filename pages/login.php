<html>
    <head>
        <meta charset="UTF-8">
        <!--CSS FILE-->
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>
    <body>
        <h1>Authentification du lecteur</h1>
        <div class="formulaire">
            <form action="../include/gestionLecteur.inc.php" method="post">
                <p>
                    <label for="nom_lecteur">Nom du lecteur: </label>
                    <input type="text" name="nom_lecteur" required>
                </p>
                <p>
                    <label for="pwd">Mot de passe: </label>
                    <input type="password" name="pwd" required>
                </p>
                <input type="submit" name="login_submit" value="Login">
            </form>
        </div>
    </body>
</html>