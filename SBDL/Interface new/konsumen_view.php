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
<th>ID Konsumen</th>
<th>Nama Konsumen</th>
<th>Alamat Konsumen</th>
<th>Telepon</th>
<th>E-mail</th>
<th colspan="2" width="80">Aksi</th>
</tr>
<?php
include "config.php";
$sql="select * from t_konsumen order by id_konsumen asc";
$result=mysql_query($sql);
$no=1;
while($data=mysql_fetch_array($result)){
?>
<tr>
<td align="center"><?php echo $no ?>.</td>
<td><?php echo $data['id_konsumen'] ?></td>
<td><?php echo $data['nama_konsumen'] ?></td>
<td><?php echo $data['alamat'] ?></td>
<td><?php echo $data['telp'] ?></td>
<td><?php echo $data['email'] ?></td>
<td align="center" width="40"><a href="konsumen_edit.php?id=<?php echo $data['id_konsumen'] ?>" title="Edit Data Konsumen">Edit</a></td>
<td align="center" width="40"><a href="konsumen_hapus.php?id=<?php echo $data['id_konsumen'] ?>" title="Hapus Data Konsumen">Hapus</a></td>
</tr>
<?php
$no++;	
}
?>
</table>
</body>