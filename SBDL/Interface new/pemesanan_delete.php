<?php
include "config.php";
$id=$_POST['id'];
$sqlup="delete from t_pemesanan where id_pemesanan='$id'";
$hapus=mysql_query($sqlup);
?>
<meta http-equiv="refresh" content="1;url=pemesanan_view.php">
