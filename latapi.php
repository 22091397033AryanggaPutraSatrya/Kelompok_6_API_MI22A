<?php
// Koneksi ke database
header('Content-type: application/json');
$hostname = "127.0.0.1";
$username = "root";
$password = "";
$database = "calonmurid";

// Membuat koneksi
$conn = new mysqli($hostname, $username, $password, $database);
if(!$conn){
    die("Koneksi tidak berhasil");
}
?>