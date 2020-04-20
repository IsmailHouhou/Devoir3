

<?php
if (isset($_POST["login_submit"])) {

    require 'dbh.inc.php';

    $nom = $_POST['nom_lecteur'];
    $pwd = $_POST['pwd'];

    $search_query = "SELECT * FROM lecteurs WHERE lecnom = '$nom' AND lecmotdepasse = '$pwd';";
    $resultCheck = mysqli_query($conn, $search_query) or die("query failed to find reader");
    $rowCheck = mysqli_fetch_assoc($resultCheck);

    if (mysqli_num_rows($resultCheck) > 0) {
        session_start();
        $_SESSION['lecteur_nom'] = $nom;
        $_SESSION['lecteur_num'] = $rowCheck["lecnum"];

        header("Location: ../index.php?login=success");

    } else {
        echo "<p>Le lecteur n\'est pas reconnu</p>";
        echo "<p>Cliquez <a href='../pages/login.php'>ici</a> pour tenter une nouvelle identification";

        require '../lecteurForm.php';
    }
}