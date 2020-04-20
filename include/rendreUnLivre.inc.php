<?php

    session_start();
    require 'dbh.inc.php';

    $livcode = $_GET["livcode"];
    
    $delete_query = "DELETE FROM emprunts WHERE empcodelivre = '$livcode'";
    $result = mysqli_query($conn, $delete_query) or die("query to delete row failed");

    $update_query = "UPDATE livres SET livdejareserve=0 WHERE livcode = '$livcode'";
    $result = mysqli_query($conn, $update_query);

    header("Location: ../index.php");
    exit();

?>