<?php
include '../config.php';
$id = $_GET['id'];
$sql = mysqli_query($conn, "DELETE FROM laporan where id='$id'");

if($sql){
    header('location: ../pagess/petugas/ppkn.php?status=sukses');
}else{
    header('location: ../pagess/petugas/ppkn.php?status=gagal');
}