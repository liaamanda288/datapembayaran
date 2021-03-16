<?php include 'header.php'; ?>
<style >
	.btn{
		margin-bottom: 10px;
	}
</style>
<div class="container">
	<div class="page-header">
<h2> DATA PETUGAS SMK NEGERI 1 KRAGILAN</h2>
	</div>
<a class="btn btn-primary " href="tambahPT.php">TAMBAH DATA</a>
<?php
	?>
<table class="table table-bordered table-striped">
 	<tr>
 		<th>NO</th>
 		<th>ID PETUGAS</th>
    <th>USERNAME</th>
 		<th>NAMA PETUGAS</th>
		<th>AKSI</th>
 	</tr>
 	<?php
 	include 'koneksi.php';
	$data = mysqli_query($konek,"SELECT * FROM petugas ORDER BY idpetugas ASC");
 	$i=1;
 	while($dta = mysqli_fetch_assoc($data) ):
 	 ?>
 	 <tr>
 	 	<td width="40px" align="center"><?= $i; ?></td>
 	 	<td align="center"><?= $dta['idpetugas'] ?></td>
 	 	<td><?= $dta['namapetugas'] ?></td>
 	 	<td width="160px">
 	 		<a class="btn btn-warning btn-sm" href="updatePT.php?id=<?= $dta['idpetugas'] ?>">EDIT</a>
 	 		<a class="btn btn-danger btn-sm" href="hapusPT.php?id=<?= $dta['idpetugas'] ?>" onclick ="return confirm('apakah anda yakin ingin menghapus data petugas? ')">HAPUS</a>
 	 	</td>
 	 </tr>
 	 <?php $i++;  ?>
 	<?php endwhile; ?>
 </table>
</body>
</div>
</html>
<?php include 'footer.php'; ?>
