<?php
include "config.php";
$id_konsumen=$_POST['id_konsumen'];
$nama_konsumen=$_POST['nama_konsumen'];
$alamat=$_POST['alamat'];
$telp=$_POST['telp'];
$email=$_POST['email'];
$id=$_POST['id'];
$sqlup="UPDATE t_konsumen SET id_konsumen='$id_konsumen',nama_konsumen='$nama_konsumen',alamat='$alamat', telp='$telp', email='$email' where id_konsumen='$id'";
$update=mysql_query($sqlup);
?>
<meta http-equiv="refresh" content="1;url=konsumen_view.php">
