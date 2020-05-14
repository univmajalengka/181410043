<?php
include "config.php";
$id_pemesanan=$_POST['id_pemesanan'];
$id_konsumen=$_POST['id_konsumen'];
$totalbiaya=$_POST['total_biaya'];
$status=$_POST['status'];
$tanggal=$_POST['tanggal'];
$id=$_POST['id'];
$sqlup="UPDATE t_pemesanan SET id_pemesanan='$id_pemesanan',id_konsumen='$id_konsumen',total_biaya='$total_biaya', status='$status', tanggal='$tanggal' where id_pemesanan='$id'";
$update=mysql_query($sqlup);
?>
<meta http-equiv="refresh" content="1;url=pemesanan_view.php">
