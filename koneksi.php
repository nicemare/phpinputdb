<?php

$host="localhost";
$user="root";
$pass="";
$koneksi=mysql_connect($host,$user,$pass);
if ($koneksi){
echo("Koneksi Oke");
}
else
{
    echo("Koneksi Gagal !");
}
$db=mysql_select_db("buku_tamu");

?>
