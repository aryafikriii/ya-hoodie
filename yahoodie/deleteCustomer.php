<?php
    include 'db.php';
    $idUser = $_GET['idUser'];
    $sqlDelete = "DELETE FROM users WHERE idUser='$idUser'";
    mysqli_query($mysqli, $sqlDelete);

    header("location: dataPelanggan.php");
?>