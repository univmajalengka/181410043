<?php
include "config.php";
$id=$_POST['id'];
$sqlup="delete from t_produk where id_produk='$id'";
$hapus=mysql_query($sqlup);
?>
<meta http-equiv="refresh" content="1;url=produk_view.php">
