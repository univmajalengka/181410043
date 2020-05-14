<?php
include "config.php";
$id_produk=$_POST['id_produk'];
$nama_produk=$_POST['nama_produk'];
$harga_produk=$_POST['harga_produk'];
$deskripsi_produk=$_POST['deskripsi_produk'];
$id=$_POST['id'];
$sqlup="UPDATE t_produk SET id_produk='$id_produk',nama_produk='$nama_produk',harga_produk='$harga_produk', deskripsi_produk='$deskripsi_produk' where id_produk='$id'";
$update=mysql_query($sqlup);
?>
<meta http-equiv="refresh" content="1;url=produk_view.php">
