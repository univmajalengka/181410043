<style>
body{font:12px "Arial";}
h2{font:24px "Arial";}
input{font:12px "Arial"; padding:5px; margin:5px;}
</style>
<body>
<?php
include "config.php";
$id=$_GET['id'];
$sql="select * from t_konsumen where id_konsumen='$id'";
$result=mysql_query($sql);
$data=mysql_fetch_array($result);
?>
<h2>Hapus Data Konsumen</h2>
<form method="POST" action="konsumen_delete.php">
<input type="hidden" name="id" value="<?php echo $data['id_konsumen'] ?>">
<pre>
ID Konsumen 	: <input type="text" name="id_konsumen" value="<?php echo $data['id_konsumen'] ?>" size="20">
Nama Konsumen	: <input type="text" name="id_konsumen" value="<?php echo $data['id_konsumen'] ?>" size="40">
Alamat 		: <input type="text" name="alamat" value="<?php echo $data['alamat'] ?>" size="20">
Telepon 	: <input type="text" name="telp" value="<?php echo $data['telp'] ?>" size="20">
E-mail		: <input type="text" name="email" value="<?php echo $data['email'] ?>" size="20">
</pre>
<table>
<tr>
<td><input type="submit" value=" Delete "></td>
</form>
<form method="POST" action="konsumen_view.php">
<td><input type="submit" value=" Batal "></td>
</tr>
</form></table>