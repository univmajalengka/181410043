<style>
body{font:12px "Arial";}
h2{font:24px "Arial";}
input{font:12px "Arial"; padding:5px; margin:5px;}
</style>
<body>
<?php
include "config.php";
$id=$_GET['id'];
$sql="select * from t_produk where id_produk='$id'";
$result=mysql_query($sql);
$data=mysql_fetch_array($result);
?>
<h2>Hapus Data Produk</h2>
<form method="POST" action="produk_delete.php">
<input type="hidden" name="id" value="<?php echo $data['id_produk'] ?>">
<pre>
ID Produk 	: <input type="text" name="id_produk" value="<?php echo $data['id_produk'] ?>" size="20">
Nama Produk 	: <input type="text" name="id_produk" value="<?php echo $data['id_produk'] ?>" size="40">
Harga Produk 	: <input type="text" name="harga_produk" value="<?php echo $data['harga_produk'] ?>" size="20">
Deskripsi Produk: <input type="text" name="deskripsi_produk" value="<?php echo $data['deskripsi_produk'] ?>" size="20">
</pre>
<table>
<tr>
<td><input type="submit" value=" Delete "></td>
</form>
<form method="POST" action="produk_view.php">
<td><input type="submit" value=" Batal "></td>
</tr>
</form></table>