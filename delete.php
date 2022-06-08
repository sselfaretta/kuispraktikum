<?php
//perintah untuk menghubungkan php dengan database
include 'konn.php';
// mengecek apakah ada id di query
if( isset($_GET['id']) ){
    //jika ada id, maka ambil id dari query 
    $id = $_GET['id'];

    // buat query hapus
    $sql = "DELETE FROM guestbook WHERE id=$id";
    $qry = mysqli_query($conn, $sql);

    // apakah query hapus berhasil?
    if( $qry ){
        header('Location: print.php');
    } else {
        die("delete gagal");
    }

} else {
    die("akses dilarang");
}
?>