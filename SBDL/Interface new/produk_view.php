<style>
body{font:12px "Arial";}
h2{font:24px "Arial";}
th{ background:blue; color:white;}
td{ background:white; color:black;}
</style>
<body>
<h2>Daftar Produk</h2>
<table border="1" cellpadding="5" cellspacing="0" width="100%">
<tr>
<th>No.</th>
<th>ID Produk</th>
<th>Nama Produk</th>
<th>Harga Produk</th>
<th>Deskripsi Produk</th>
<th colspan="2" width="80">Aksi</th>
</tr>
<?php
include "config.php";
$sql="select * from t_produk order by id_produk asc";
$result=mysql_query($sql);
$no=1;
while($data=mysql_fetch_array($result)){
?>
<tr>
<td align="center"><?php echo $no ?>.</td>
<td><?php echo $data['id_produk'] ?></td>
<td><?php echo $data['nama_produk'] ?></td>
<td><?php echo $data['harga_produk'] ?></td>
<td><?php echo $data['deskripsi_produk'] ?></td>
<td align="center" width="40"><a href="produk_edit.php?id=<?php echo $data['id_produk'] ?>" title="Edit Data Produk">Edit</a></td>
<td align="center" width="40"><a href="produk_hapus.php?id=<?php echo $data['id_produk'] ?>" title="Hapus Data Produk">Hapus</a></td>
</tr>
<?php
$no++;	
}
?>
</table>
</body>