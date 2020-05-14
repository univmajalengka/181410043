<style>
body{font:12px "Arial";}
h2{font:24px "Arial";}
input{font:12px "Arial"; padding:5px; margin:5px;}
</style>
<body>
<?php
include "config.php";
$id=$_GET['id'];
$sql="select * from t_desk_pemesanan where id_pemesanan='$id'";
$result=mysql_query($sql);
$data=mysql_fetch_array($result);
?>
<h2>Hapus Data Deskripsi Pemesanan</h2>
<form method="POST" action="desk_delete.php">
<input type="hidden" name="id" value="<?php echo $data['id_pemesanan'] ?>">
<pre>
ID Pemesanan	: <input type="text" name="id_pemesanan" value="<?php echo $data['id_pemesanan'] ?>" size="20">
ID Produk	: <input type="text" name="id_produk" value="<?php echo $data['id_produk'] ?>" size="40">
Jumlah Beli 		: <input type="text" name="jumlah_beli" value="<?php echo $data['jumlah_beli'] ?>" size="20">
Jumlah Harga	: <input type="text" name="jumlah_harga" value="<?php echo $data['jumlah_harga'] ?>" size="20">
</pre>
<table>
<tr>
<td><input type="submit" value=" Delete "></td>
</form>
<form method="POST" action="desk_view.php">
<td><input type="submit" value=" Batal "></td>
</tr>
</form></table>