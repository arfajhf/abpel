<?php
include '../config.php';

$username = $_POST['username'];
$password = $_POST['password'];
$rule = 'petugass';

$sql = mysqli_query($conn, "INSERT INTO admin (username, password, rule) values ('$username', '$password', '$rule')");

if($sql){
    header('location: ../pagess/admin/qr.php?status=sukses');
}else{
    header('location: ../pagess/admin/tambah.php?status=gagal');
}