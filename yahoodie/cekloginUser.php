<?php
    session_start();
    include 'db.php';
    if(isset($_POST['submit']))
    {
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $sql = "SELECT * FROM users WHERE username = '".$user."' AND password = '".$pass."'";
        $cek = mysqli_query($mysqli, $sql);
        if(mysqli_num_rows($cek) > 0) 
        {
            $akun = $cek->fetch_assoc();
            $_SESSION['pelanggan'] = $akun;
            $_SESSION['username'] = $user;
            $_SESSION['level'] = "user";
            $_SESSION['cart'];
            echo '<script>window.location="dashboard.php"</script>';
        } 
        else 
        {
            echo '<script>alert("Username atau password anda salah!")</script>';
        }
    } 
    else if(isset($_POST['regist'])) 
    {
        $fullname = $_POST['fullname'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE username='$username'";
        $result = mysqli_query($mysqli, $sql);

        if (!$result->num_rows > 0) 
        {
            $sql = "INSERT INTO users (idUser, fullname, username, password) VALUES (NULL, '".$fullname."', '".$username."', '".$password."')";
            $result = mysqli_query($mysqli, $sql);

            if($result) 
            {
                echo "<script>alert('Selamat, registrasi berhasil!')</script>";
                echo '<script>window.location="loginUser.html"</script>';
            } 
            else 
            {
                echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
            }
        } 
        else 
        {
            echo "<script>alert('Woops! Username Sudah Terdaftar.')</script>";
        }
    }
?>