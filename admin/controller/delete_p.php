<?php
include '../config.php';
$id = $_GET['id'];
$sql = mysqli_query($conn, "DELETE FROM admin where id='$id'");

if($sql){
    header('location: ../pagess/admin/qr.php?status=sukses');
}else{
    header('location: ../pagess/admin/qr.php?status=gagal');
}