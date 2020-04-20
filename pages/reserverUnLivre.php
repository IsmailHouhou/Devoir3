<?php
    session_start();
    require '../include/dbh.inc.php';

    $livcode = $_GET["livcode"];
    $sql = "SELECT * FROM livres WHERE livcode = '$livcode'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    $nom = $row["livnomaut"];
    $prenom = $row["livprenomaut"];
    $titre = $row["livtitre"];
    $categorie = $row["livcategorie"];
    $isbn = $row["livISBN"];
?>
<link rel="stylesheet" type="text/css" href="../css/style.css">
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

    button {
        margin-top: 15px;
    }
</style>

<h2>Réserver un livre</h2>

<p>Vous désirez réserver le livre suivant: </p>

<table>
    <tr>
        <th>Code du livre</th>
        <td><?php echo $livcode ?></td>
    </tr>
    <tr>
        <th>Nom de l'auteur</th>
        <td><?php echo $nom ?></td>
    </tr>
    <tr>
        <th>Prenom de l'auteur</th>
        <td><?php echo $prenom ?></td>
    </tr>
    <tr>
        <th>Titre</th>
        <td><?php echo $titre ?></td>
    </tr>
    <tr>
        <th>Categorie</th>
        <td><?php echo $categorie ?></td>
    </tr>
    <tr>
        <th>ISBN</th>
        <td><?php echo $isbn ?></td>
    </tr>
</table>

<?php 
    $future = mktime(0, 0, 0, date("m"), date("d")+5, date("Y"));
    $lecnum = $_SESSION["lecteur_num"];
?>

<form action="confirmationReservation.php" method="post">
    <input type="hidden" name="date" value="<?php echo date("Y-m-d"); ?>">
    <input type="hidden" name="date_retour" value="<?php echo date("Y-m-d", $future); ?>">
    <input type="hidden" name="livcode" value="<?php echo $livcode; ?>">
    <input type="hidden" name="lecnum" value="<?php echo $lecnum; ?>">
    <input type="submit">
</form>