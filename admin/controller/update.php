<?php
include '../config.php';

$id = $_POST['id'];
$name = $_POST['username'];
$password = $_POST['password'];

$sql = mysqli_query($conn, "UPDATE admin set username='$username', password='$password' where id_admin='$id'");

if($sql){
    header('location: ../pagess/admin/qr.php?status=sukses');
}else{
    header('location: ../pagess/admin/tambah.php?status=gagal');
}
