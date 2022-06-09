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
$vposted=$_POST['posted'];
$vname=$_POST['name'];
$vemail=$_POST['email'];
$vaddress=$_POST['address'];
$vcity=$_POST['city'];
$vmessage=$_POST['message'];

//memasukkan nilai dalam tabel guestbook pada database "myweb"
$sql="INSERT INTO guestbook (id, posted, name, email, address, city, message) VALUES ('','$vposted','$vname','$vemail','$vaddress','$vcity','$vmessage')";

mysqli_query($conn, $sql) or die("Proses simpan ke database gagal");
mysqli_close($conn);

echo "Proses simpan ke database berhasil";
//header("location:guest.html");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PROSES SIMPAN</title>
</head>
<body>
    <br><br><br>
    <a href="print.php">Klik disini untuk melihat daftar tamu</a>
</body>
</html>
