<?php
    include 'db.php';
    $kodeHoodie = $_GET['kodeHoodie'];
    $sqlDelete = "DELETE FROM hoodie WHERE kodeHoodie='$kodeHoodie'";
    mysqli_query($mysqli, $sqlDelete);

    header("location: dataHoodie.php");
?>