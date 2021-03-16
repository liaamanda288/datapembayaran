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
 		<th>ID SSPP</th>
 		<th>TAHUN</th>
 		<th>NOMINAL</th>
		<th>AKSI</th>
 	</tr>
 	<?php
 	$data = $konek ->query("SELECT * FROM spp ORDER BY idspp ASC");
 	$i=1;
 	while ($dta = mysqli_fetch_assoc($data) ) :
 	 ?>
 	 <tr>
 	 	<td><?= $i; ?></td>
 	 	<td><?= $dta['idspp'] ?></td>
 	 	<td><?= $dta['tahun'] ?></td>
 	 	<td><?= $dta['nominal'] ?></td>
 	 	<td><?= $dta['tahunajaran'] ?></td>
 	 	<td>
 	 		<a class="btn btn-warning btn-sm" href="ubahSP.php?id=<?= $dta['idspp'] ?>">EDIT</a>
 	 		<a class="btn btn-danger btn-sm" href="hapusSP.php?id=<?= $dta['idspp'] ?>" onclick ="return confirm('apakah anda yakin ingin menghapus data? data SPP Siswa yang bersangkutan akan ikut terhapus')">HAPUS</a>
 	 	</td>
 	 </tr>
 	 <?php $i++;  ?>
 	<?php endwhile; ?>
 </table>
 <p align="center" style="font-family: arial; color: red; size: 10px;">Menghapus Data Spp Maka Akan menghapus Data Pembayaran dan data tagihan Siswa pada tabel SPP</p>
 </div>
 <?php include 'footer.php'; ?>
