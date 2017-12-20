<?php 
include 'koneksi.php'; 
$nama=$_POST['nama']; 
$email=$_POST['email']; 
$komen=$_POST['komen']; 
$query=mysql_query("insert into pesan (nama,email,komen) value ('$nama','$email','$komen')"); 
?>
