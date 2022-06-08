<?php 
//mulai sesi
session_start();
session_destroy();
//apabila memilih logout maka akan dialihkan ke halaman awal, yaitu login
header("Location: login.php");
 
?>