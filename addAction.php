<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tes";

// Create connection
$koneksi = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($koneksi->connect_error) {
    die("Connection failed: " . $koneksi->connect_error);
} 

$sql = "INSERT INTO mahasiswa (nama, nim, jenis_kelamin, fakultas)
VALUES ('John', '3243242', 'L', 'Ekonomi')";

if ($koneksi->query($sql) === TRUE) {
    echo "New record created successfully";
    header('location:index.php');
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}

$koneksi->close();
?>