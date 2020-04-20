<html>
    <head>
        <meta charset="UTF-8">
        <!--CSS FILE-->
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>
    <body>
        <h2>Enregistrement d'un lecteur</h2>
        <div class="formulaire">
            <form action="valideLecteur.php" method="post">
                <p>
                    <label for="">Nom: </label>
                    <input type="text" name="nom" required>
                </p>
                <p>
                    <label for="">Prénom</label>
                    <input type="text" name="prenom" required>
                </p>
                <p>
                    <label for="">Mot de passe</label>
                    <input type="password" name="pwd" required>
                </p>
                <p>
                    <label for="">Adresse: </label>
                    <input type="text" name="adresse" required>
                </p>
                <p>
                    <label for="">Ville: </label>
                    <input type="text" name="ville" required>
                </p>
                <p>
                    <label for="">Code Postal: </label>
                    <input type="text" name="code_postal" required>
                </p>
                <input type="submit" value="Enregistrer">    
            </form>
        </div>
    </body>
</html>