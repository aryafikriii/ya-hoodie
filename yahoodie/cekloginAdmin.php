<?php
    session_start();
    if(isset($_POST['submit'])){
        include 'db.php';

        $admin = $_POST['admin'];
        $pass = $_POST['pass'];

        $cek = mysqli_query($mysqli, "SELECT * FROM admin WHERE username = '".$admin."' AND password = '".$pass."'");
        if(mysqli_num_rows($cek) > 0) {
            $_SESSION['username'] = $admin;
            $_SESSION['level'] = "admin";
            echo '<script>window.location="dashboardAd.php"</script>';
            return true;
        } else {
            echo '<script>alert("Username atau password anda salah!")</script>';
            echo '<script>window.location="loginAdmin.html"</script>';
            return false;
        }
    }
?>