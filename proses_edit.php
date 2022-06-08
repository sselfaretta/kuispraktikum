<?php
include "konn.php";
if(isset($_POST['submit'])){
$vid = $_REQUEST['id'];
$vposted = $_REQUEST['posted'];
$vname = $_REQUEST['name'];
$vemail = $_REQUEST['email'];
$vaddress = $_REQUEST['address'];
$vcity = $_REQUEST['city'];
$vmessage = $_REQUEST['message'];

$sql = "UPDATE guestbook SET posted='$vposted', name='$vname', email='$vemail', address='$vaddress', city='$vcity', message='$vmessage' WHERE id=$vid";
$qry = mysqli_query($conn, $sql);
    if ($qry) {
        header('location: print.php');
    }else{
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}