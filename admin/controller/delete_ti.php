<?php
include '../config.php';
$id = $_GET['id'];
$sql = mysqli_query($conn, "DELETE FROM laporan where id='$id'");

if($sql){
    header('location: ../pagess/admin/ti.php?status=sukses');
}else{
    header('location: ../pagess/admin/ti.php?status=gagal');
}