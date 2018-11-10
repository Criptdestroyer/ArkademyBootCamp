<?php

$server = "localhost";
$user = "alfath";
$password = "cyber";
$nama_database = "arkademy";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>