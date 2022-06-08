<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "myweb";

$conn = mysqli_connect($host, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 

//memindahkan nilai data form ke variabel sederhana agar mudah ditulis
$vname=$_POST['name'];
$vaddress=$_POST['address'];
$vemail=$_POST['email'];
$vhomepage=$_POST['homepage'];
$vusername=$_POST['username'];
$vpassword=$_POST['password'];

//memasukkan nilai dalam tabel user pada database "myweb"
$sql="INSERT INTO user (name, address, email, homepage, username, password) VALUES ('$vname','$vaddress','$vemail','$vhomepage','$vusername', '$vpassword')";

mysqli_query($conn, $sql) or die("Proses simpan ke database gagal");
mysqli_close($conn);

echo "Proses simpan ke database berhasil";
//header("location:regis.html");
?>
<!--<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PROSES SIMPAN</title>
</head>
<body>
    <br><br><br>
    <a href="cetak.php">Periksa</a>
</body>
</html>