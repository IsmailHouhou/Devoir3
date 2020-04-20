<?php
    session_start();
    require '../include/dbh.inc.php';

    $date = $_POST["date"];
    $date_retour = $_POST["date_retour"];
    $livcode = $_POST["livcode"];
    $lecnum = $_POST["lecnum"];

    $search_query = "SELECT * FROM emprunts WHERE empnumlect = '$lecnum'";
    $resultCheck = mysqli_query($conn, $search_query);
    if (mysqli_num_rows($resultCheck) > 0) {
        header("Location: ../index.php?error=lecdejares");
        exit();
    } else {
        $insert_query = "INSERT INTO emprunts (empdate, empdateret, empcodelivre, empnumlect) VALUES ('$date', '$date_retour', '$livcode', '$lecnum');";
        $result = mysqli_query($conn, $insert_query);
        
        $update_query = "UPDATE livres SET livdejareserve=1 WHERE livcode = '$livcode'";
        $result = mysqli_query($conn, $update_query);
    }



?>
<h2>Confirmation de votre réservation</h2>

<?php
    $search_query = "SELECT * FROM emprunts WHERE empnumlect = '$lecnum'";
    $resultCheck = mysqli_query($conn, $search_query);
    $row = mysqli_fetch_assoc($resultCheck);
?>

<p>Votre réservation est confirmé sous le numero: <?php echo $row["empnum"]; ?></p>
<p>Date de la réservation: <?php echo $date ?></p>
<p>Date du retour: <?php echo $date_retour ?></p>

<p>Vous pouvez revenir à la liste des livres disponible à la réservation en cliquant <a href="../index.php">ici</a></p>