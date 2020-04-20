<html>
    <head>
        <meta charset="UTF-8">
        <!--CSS FILE-->
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>
    <body>
        <h1>Enregistrement d'un livre</h1>
        <div class="formulaire">
            <form action="valideLivre.php" method="post">
                <p>
                    <label for="nom_auteur">Nom de l'auteur: </label>
                    <input type="text" name="nom_auteur">
                </p>
                <p>
                    <label for="">Prénom de l'auteur: </label>
                    <input type="text" name="prenom_auteur">
                </p>
                <p>
                    <label for="">Titre: </label>
                    <input type="text" name="titre">
                </p>
                <p>
                    <label for="">Categorie: </label>
                    <select name="categories">
                        <option value="roman">Roman</option>
                        <option value="junior">Junior</option>
                        <option value="science_fiction">Science-fiction</option>
                    </select>
                </p>
                <p>
                    <label for="">Numéro ISBN: </label>
                    <input type="text" name="numero_isbn">
                </p>
                <input type="submit" value="Enregistrer">    
            </form>
        </div>
    </body>
</html>