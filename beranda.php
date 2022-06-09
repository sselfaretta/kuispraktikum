<?php   
 session_start();  
 //menyambungkan dengan database
 $conn=mysqli_connect("localhost","root","","myweb");  
 if (!isset($_SESSION['USER_ID'])) {  
      header("location:login.php");  
      die();  
 }
 ?> 

 <!--masuk html-->
 <!DOCTYPE html>  
 <html>  
 <head>  
      <meta charset="utf-8">  
      <meta name="viewport" content="width=device-width, initial-scale=1">  
      <title>Beranda</title>  
      <style>  
           /*css pengaturan tampilan teks yang akan ditampilkan, yaitu selamat datang,... dan logout*/ 
           body{  
                justify-content: space-around;  
                font-family: 'Poppins', sans-serif;  
           }  
      </style>  
 </head>  
 <body>  
     <!--menampilkan teks selamat datang,(isi sesuai username yang dimasukkan saat login)! ;)-->
     <center><h1>Selamat Datang, <?php echo $_SESSION['USER_NAME'] ?>! ;) <br><br> Pada <?php date_default_timezone_set('Asia/Jakarta'); echo date('l, d-m-Y '); ?> </h1></center>
     <br><br>
     <a href="guest.html">Input GuestBook</a>
     <br><br>
     <a href="print.php">Daftar GuestBook</a>
     <br><br>
     <a href="logout.php">Log Out</a>
 </body>  
 </html>
