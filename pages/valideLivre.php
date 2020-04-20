<?php

require '../include/dbh.inc.php';

$nom_auteur = $_POST['nom_auteur'];
$prenom_auteur = $_POST['prenom_auteur'];
$titre = $_POST['titre'];
$categories = $_POST['categories'];
$numero_isbn = $_POST['numero_isbn'];


$search_query = "SELECT livtitre FROM livres WHERE livtitre='$titre'";
$resultCheck = mysqli_query($conn, $search_query) or die("Query to search lecteurs failed");
if (mysqli_num_rows($resultCheck) > 0) {
    header("Location: livreForm.php?error=livreexiste");
    exit();
} else {
    $insert_query = "INSERT INTO livres (livnomaut, livprenomaut, livtitre, livcategorie, livISBN) VALUES ('$nom_auteur', '$prenom_auteur', '$titre', '$categories', '$numero_isbn')";

    $result = mysqli_query($conn, $insert_query) or die("Query to store livre failed");

    if($result) {
        echo "<h1>Validation d'un livre</h1>";
        echo "Nom auteur: " . $nom_auteur . "<br />Prénom auteur: " . $prenom_auteur . "<br />Titre: " . $titre . "<br />Categorie: " . $categories . "<br />Numero ISBN: " . $numero_isbn;
    }
    
}
