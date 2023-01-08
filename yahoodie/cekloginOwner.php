<?php
    session_start();
    if(isset($_POST['submit'])){
        include 'db.php';

        $owner = $_POST['owner'];
        $pass = $_POST['pass'];

        $cek = mysqli_query($mysqli, "SELECT * FROM owner WHERE username = '".$owner."' AND password = '".$pass."'");
        if(mysqli_num_rows($cek) > 0) {
            $_SESSION['username'] = $owner;
            $_SESSION['level'] = "owner";                            
            echo '<script>window.location="dashboardOwner.php"</script>';
        } else {
            echo '<script>alert("Username atau password anda salah!")</script>';
            echo '<script>window.location="loginOwner.html"</script>';
        }
    }
?>