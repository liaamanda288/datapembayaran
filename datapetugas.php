<?php
include 'koneksi.php';

include 'header.php';
 ?>
<div class="container">
	<div class="page-header">
<h2> DATA SISWA SMK NEGERI 1 KRAGILAN</h2>
	</div>
<a class="btn btn-primary " href="tambahSW.php">TAMBAH DATA</a>
 <br/> <br>
 <table class="table table-bordered table-striped">
 	<tr>
 		<th>NO</th>
 		<th>ID PETUGAS</th>
 		<th>USERNAME</th>
 		<th>PASSWORD</th>
 		<th>NAMA PETUGASS</th>
		<th></th>
		<th>AKSI</th>
 	</tr>
 	<?php
 	$data = $konek ->query("SELECT * FROM petugas ORDER BY idpetugas ASC");
 	$i=1;
 	while ($dta = mysqli_fetch_assoc($data) ) :
 	 ?>
 	 <tr>
 	 	<td><?= $i; ?></td>
 	 	<td><?= $dta['idpetugas'] ?></td>
 	 	<td><?= $dta['uername'] ?></td>
 	 	<td><?= $dta['password'] ?></td>
 	 	<td><?= $dta['namapetugass'] ?></td>
 	 	<td>
 	 		<a class="btn btn-warning btn-sm" href="ubahPT.php?id=<?= $dta['idpetugas'] ?>">EDIT</a>
 	 		<a class="btn btn-danger btn-sm" href="hapusPT.php?id=<?= $dta['idpetugas'] ?>" onclick ="return confirm('apakah anda yakin ingin menghapus data? data SPP Siswa yang bersangkutan akan ikut terhapus')">HAPUS</a>
 	 	</td>
 	 </tr>
 	 <?php $i++;  ?>
 	<?php endwhile; ?>
 </table>
 <p align="center" style="font-family: arial; color: red; size: 10px;">Menghapus Data Siswa Maka Akan menghapus Data Pembayaran dan data tagihan Siswa pada tabel SPP</p>
 </div>
 <?php include 'footer.php'; ?>
