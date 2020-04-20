<?php
    session_start();

    if (empty($_SESSION["lecteur_num"])) {
        header("Location: pages/login.php");
        exit();
    }

    require 'include/dbh.inc.php';

    $nom = $_SESSION["lecteur_nom"];
    if (isset($_GET["login"])) {
        if($_GET["login"] == "success") {
            echo "<p>Bienvenue <b>" . $nom . "</b></p>";
        }
    }
?>

<link rel="stylesheet" type="text/css" href="css/style.css">
<style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }

    th, td {
        text-align: left;
        padding: 10px;
    }

    h3 {
        margin-bottom: 15px;
    }
</style>

<a href="include/logout.inc.php">Logout</a>

<h1>Gestion du lecteur</h1>

<h3>Voici la liste des ouvrages disponibles à la réservation</h3>

    <table>
        <tr>
            <th>CodeLivre</th>
            <th>NomAuteur</th>
            <th>PrenomAuteur</th>
            <th>Titre</th>
            <th>Categorie</th>
            <th>ISBN</th>
            <th></th>
        </tr>
    <?php

    $sql = "SELECT * FROM livres WHERE livdejareserve = 0";
    $result = mysqli_query($conn, $sql) or die("query to select livres non reserve failed");
    while($row = mysqli_fetch_assoc($result)) {
        echo "  <tr>
                    <td>" . $row["livcode"] . "</td>
                    <td>" . $row["livnomaut"] . "</td>
                    <td>" . $row["livprenomaut"] . "</td>
                    <td>" . $row["livtitre"] . "</td>
                    <td>" . $row["livcategorie"] . "</td>
                    <td>" . $row["livISBN"] . "</td>
                    <td><a href='pages/reserverUnLivre.php?livcode=". $row["livcode"] ."'>reserver</a></td>
                </tr>";
    }

    ?>
    </table>

    <h3>Voici la liste des ouvrages disponibles à la réservation</h3>

    <table>
        <tr>
            <th>CodeLivre</th>
            <th>NomAuteur</th>
            <th>PrenomAuteur</th>
            <th>Titre</th>
            <th>Categorie</th>
            <th>ISBN</th>
            <th></th>
        </tr>

        <?php
            $lecnum = $_SESSION["lecteur_num"];
            $sql1 = "SELECT empcodelivre FROM emprunts WHERE empnumlect = '$lecnum'";
            $result1 = mysqli_query($conn, $sql1) or die("query to find livcode failed");
            $row = mysqli_fetch_assoc($result1);
            $livcode = $row["empcodelivre"];

            $sql2 = "SELECT * FROM livres WHERE livcode = '$livcode'";
            $result2 = mysqli_query($conn, $sql2) or die("query to select * from livres failed");
            while($row2 = mysqli_fetch_assoc($result2)) {
                echo "  <tr>
                            <td>" . $row2["livcode"] . "</td>
                            <td>" . $row2["livnomaut"] . "</td>
                            <td>" . $row2["livprenomaut"] . "</td>
                            <td>" . $row2["livtitre"] . "</td>
                            <td>" . $row2["livcategorie"] . "</td>
                            <td>" . $row2["livISBN"] . "</td>
                            <td><a href='include/rendreUnLivre.inc.php?livcode=". $row2["livcode"] ."'>rendre</a></td>
                        </tr>";
            }
        ?>

    </table>

        