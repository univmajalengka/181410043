<?php
include "config.php";
$id_pemesanan=$_POST['id_pemesanan'];
$id_produk=$_POST['id_produk'];
$jumlahbeli=$_POST['jumlah_beli'];
$jumlaharga=$_POST['jumlah_harga'];
$id=$_POST['id'];
$sqlup="UPDATE t_desk_pemesanan SET id_pemesanan='$id_pemesanan',id_produk='$id_produk',jumlah_beli='$jumlah_beli', jumlah_harga='$jumlah_harga' where id_pemesanan='$id'";
$update=mysql_query($sqlup);
?>
<meta http-equiv="refresh" content="1;url=desk_view.php">
