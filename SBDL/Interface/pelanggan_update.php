<?php
include "config.php";
$noKTP=$_POST['noKTP'];
$namaPelanggan=$_POST['namaPelanggan'];
$almPelanggan=$_POST['almPelanggan'];
$teleponPelanggan=$_POST['teleponPelanggan'];
$id=$_POST['id'];
$sqlup="update pelanggan set noKTP='$noKTP',namaPelanggan='$namaPelanggan',almPelanggan='$almPelanggan',teleponPelanggan='$teleponPelanggan' where idPelanggan='$id'";
$update=mysql_query($sqlup);
?>
<meta http-equiv="refresh" content="1;url=pelanggan_view.php">
