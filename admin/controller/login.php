<?php
session_start();
include '../config.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = mysqli_query($conn, "SELECT * from admin where username='$username' and password='$password'");

$data = mysqli_num_rows($sql);

if ($data) {
    $masukan = mysqli_fetch_assoc($sql);

    if ($masukan['rule'] == 'admin') {
        $_SESSION['username'] = $username;
        $_SESSION['password'] = '$password';

        header("Location: ../pagess/admin/dashboard.php");
    }
    if ($masukan['rule'] == 'petugas') {
        $_SESSION['username'] = $username;
        $_SESSION['password'] = '$password';
        header("Location: ../pagess/petugas/dashboard.php");
    }
} else {
    header("Location: ../login.php?status=gagal");
    
}