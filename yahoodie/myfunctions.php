<?php

    include 'db.php';

    function getAll($hoodie) {
        global $mysqli;

        $sql = "SELECT * FROM $hoodie";
        return $query = mysqli_query($mysqli, $sql);

    }

    function getByID($hoodie, $id) {
        global $mysqli;

        $sql = "SELECT * FROM $hoodie WHERE kodeHoodie='$id' ";
        return $query = mysqli_query($mysqli, $sql);        
    }

    function redirect($url, $message) {
        $_SESSION['message'] = $message;
        header('Location: '.$url);
        exit(0); 
    }
?>