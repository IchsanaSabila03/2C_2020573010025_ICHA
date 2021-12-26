<?php
    session_start();
    require "koneksi.php";
    $username   = $_POST[ 'username' ];
    $password   = MD5 ($_POST[ 'password' ]);

    $hasil  = mysqli_query ($conn, "SELECT * FROM tb_pengguna WHERE username='$username' && password='$password'");
    $row    = mysqli_fetch_array ($hasil);

    if (isset($row['username'])){
        $_SESSION['username']=$row['username'];
        echo "<script>window.location ='../home';</script>";
    }else{
        echo "<script>alert('Mohon maaf username atau password yang anda masukkan salah');
        window.location='../sign-in/index.php';</script>";
    }
?>