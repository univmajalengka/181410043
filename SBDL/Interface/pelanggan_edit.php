<style>
body{font:12px "Arial";}
h2{font:24px "Arial";}
input{font:12px "Arial"; padding:5px; margin:5px;}
</style>
<body>
<?php
include "config.php";
$id=$_GET['id'];
$sql="select * from pelanggan where idPelanggan='$id'";
$result=mysql_query($sql);
$data=mysql_fetch_array($result);
?>
<h2>Edit Data Pelanggan</h2>
<form method="POST" action="pelanggan_update.php">
<input type="hidden" name="id" value="<?php echo $data['idPelanggan'] ?>">
<pre>
No. KTP          : <input type="text" name="noKTP" value="<?php echo $data['noKTP'] ?>" size="20">
Nama Pelanggan   : <input type="text" name="namaPelanggan" value="<?php echo $data['namaPelanggan'] ?>" size="40">
Alamat           : <input type="text" name="almPelanggan" value="<?php echo $data['almPelanggan'] ?>" size="60">
Telepon          : <input type="text" name="teleponPelanggan" value="<?php echo $data['teleponPelanggan'] ?>" size="20">
</pre>
<input type="submit" value=" Update ">
</form>