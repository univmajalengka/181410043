<style>
body{font:12px "Arial";}
h2{font:24px "Arial";}
input{font:12px "Arial"; padding:5px; margin:5px;}
</style>
<body>
<?php
include "config.php";
$id=$_GET['id'];
$sql="select * from t_pemesanan where id_pemesanan='$id'";
$result=mysql_query($sql);
$data=mysql_fetch_array($result);
?>
<h2>Hapus Data Pemesanan</h2>
<form method="POST" action="pemesanan_delete.php">
<input type="hidden" name="id" value="<?php echo $data['id_pemesanan'] ?>">
<pre>
ID Pemesanan 	: <input type="text" name="id_pemesanan" value="<?php echo $data['id_pemesanan'] ?>" size="20">
ID Konsumen	: <input type="text" name="id_konsumen" value="<?php echo $data['id_konsumen'] ?>" size="40">
Total Biaya 	: <input type="text" name="total_biaya" value="<?php echo $data['total_biaya'] ?>" size="20">
Status 		: <input type="text" name="status" value="<?php echo $data['status'] ?>" size="20">
Tanggal		: <input type="text" name="tanggal" value="<?php echo $data['tanggal'] ?>" size="20">
</pre>
<table>
<tr>
<td><input type="submit" value=" Delete "></td>
</form>
<form method="POST" action="konsumen_view.php">
<td><input type="submit" value=" Batal "></td>
</tr>
</form></table>