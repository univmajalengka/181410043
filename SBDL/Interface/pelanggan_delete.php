<?php
include "config.php";
$id=$_POST['id'];
$sqlup="delete from pelanggan where idPelanggan='$id'";
$hapus=mysql_query($sqlup);
?>
<meta http-equiv="refresh" content="1;url=pelanggan_view.php">
