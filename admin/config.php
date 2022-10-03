<?php
$local = '192.168.100.160';
$user = 'root';
$pass = 'root';
$db = 'absensi';

$conn = mysqli_connect($local, $user, $pass, $db);

if(!$conn){
    die ('tidak dapat terhubung' . mysqli_connect_error());
}