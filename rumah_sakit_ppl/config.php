<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "db_rumah_sakit_ppl";

$con = mysqli_connect($host, $user, $pass, $db);

if (mysqli_connect_errno()) {
    echo 'Koneksi Gagal :' . mysqli_connect_error();
}