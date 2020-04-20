<?php

require '../include/dbh.inc.php';

$nom            = $_POST['nom'];
$prenom         = $_POST['prenom'];
$pwd            = $_POST['pwd'];
$adresse        = $_POST['adresse'];
$ville          = $_POST['ville'];
$code_postal    = $_POST['code_postal'];

$search_query = "SELECT lecnom, lecprenom FROM lecteurs WHERE lecnom='$nom'";
$resultCheck = mysqli_query($conn, $search_query) or die("Query to search lecteurs failed");
if (mysqli_num_rows($resultCheck) > 0) {
    header("Location: lecteurForm.php?error=usertaken");
    exit();
} else  {
    $insert_query = "INSERT INTO lecteurs (lecnom, lecprenom, lecadresse, lecville, leccodepostal, lecmotdepasse) VALUES ('$nom', '$prenom', '$adresse', '$ville', '$code_postal', '$pwd')";

    $result = mysqli_query($conn, $insert_query) or die("Query to store lecteur failed");

    if($result) {
        echo "<h1>Validation d'un lecteur</h1>";
        echo "Nom: " . $nom . "<br />Prénom: " . $prenom . "<br />Adresse: " . $adresse . "<br />Ville: " . $ville . "<br />Code Postal: " . $code_postal;
        echo "<p>Vous êtes enregitré dans la base de la bibliothèque.</p>";
        echo "<p>vous avez maintenant la possibilité de réserver des livres ou vous <a href='login.php'>identifiez ici</a>.</p>";
    }

}
