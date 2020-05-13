<style>
body{font:12px "Arial";}
h2{font:24px "Arial";}
th{font:12px "Arial"; background:blue; color:white;}
td{font:12px "Arial"; background:white; color:black;}
</style>
<body>
<h2>Daftar Pelanggan</h2>
<table border="1" cellpadding="5" cellspacing="0" width="100%">
<tr>
<th>No.</th>
<th>No. KTP</th>
<th>Nama Pelanggan</th>
<th>Alamat</th>
<th>Telepon</th>
<th colspan="2" width="80">Aksi</th>
</tr>
<?php
include "config.php";
$sql="select * from pelanggan order by idPelanggan asc";
$result=mysql_query($sql);
$no=1;
while($data=mysql_fetch_array($result)){
?>
<tr>
<td align="center"><?php echo $no ?>.</td>
<td><?php echo $data['noKTP'] ?></td>
<td><?php echo $data['namaPelanggan'] ?></td>
<td><?php echo $data['almPelanggan'] ?></td>
<td align="center"><?php echo $data['teleponPelanggan'] ?></td>
<td align="center" width="40"><a href="pelanggan_edit.php?id=<?php echo $data['idPelanggan'] ?>" title="Edit Data Pelanggan">Edit</a></td>
<td align="center" width="40"><a href="pelanggan_hapus.php?id=<?php echo $data['idPelanggan'] ?>" title="Hapus Data Pelanggan">Hapus</a></td>
</tr>
<?php
$no++;	
}
?>
</table>
</body>