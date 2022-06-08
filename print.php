<center><h2>DAFTAR DATA TAMU</h2>
<br>
<?php
include "konn.php";

$sql = "SELECT * from guestbook";
$qry = mysqli_query($conn, $sql) or die("Proses cetak gagal");
echo "<table width='75%' cellpadding='2' cellspacing='0' border='1'>
<tr>
<th>ID</th>
<th>Tanggal</th>
<th>Nama</th>
<th>Email</th>
<th>Alamat</th>
<th>Kota</th>
<th>Pesan</th>
<th>Aksi</th>
<tr></th>";

//$nomor=1;
while($hasil=mysqli_fetch_row($qry)){
echo "<tr>
<td>$hasil[0]</td>
<td>$hasil[1]</td>
<td>$hasil[2]</td>
<td>$hasil[3]</td>
<td>$hasil[4]</td>
<td>$hasil[5]</td>
<td>$hasil[6]</td>
<td> 
	<a href='delete.php?id=".$hasil[0]."' class= 'btn btn-danger'>Hapus</a>
	<br>
	<a href='edit.php?id=".$hasil[0]."' class= 'btn btn-success'>Ubah</a>&ensp;
	</td>
</tr>";
//$nomor++;
}
echo "</table>";
?>
<br><br>
<a href="beranda.php">Kembali</a>
</center>