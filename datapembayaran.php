<?php
include 'koneksi.php';

include 'header.php';
 ?>
<div class="container">
	<div class="page-header">
<h2> DATA PEMBAYARAN SMK NEGERI 1 KRAGILAN</h2>
	</div>
<a class="btn btn-primary " href="tambahPB.php">TAMBAH DATA</a>
 <br/> <br>
 <table class="table table-bordered table-striped">
 	<tr>
 		<th>NO</th>
 		<th>ID PEMBAYARAN</th>
 		<th>ID PETUGAS</th>
 		<th>NISN</th>
    <th>TANGGAL BAYAR</th>
 		<th>BULAN DI BAYAR</th>
		<th>TAHUN DI BAYAR</th>
		<th>ID SPP</th>
		<th>JUMLAH BAYAR</th>
		<th>AKSI</th>
 	</tr>
 	<?php
 	$data = $konek ->query("SELECT * FROM pembayaran ORDER BY idpembayaran ASC");
 	$i=1;
 	while ($dta = mysqli_fetch_assoc($data) ) :
 	 ?>
 	 <tr>
 	 	<td><?= $i; ?></td>
 	 	<td><?= $dta['idpembayaran'] ?></td>
 	 	<td><?= $dta['idpetugas'] ?></td>
 	 	<td><?= $dta['nisn'] ?></td>
 	 	<td><?= $dta['tglbayar'] ?></td>
 	 	<td><?= $dta['bulandibayar'] ?></td>
		<td><?= $dta['tahundibayar'] ?></td>
		<td><?= $dta['idspp'] ?></td>
		<td><?= $dta['jumlahbayar'] ?></td>
 	 	<td>
 	 		<a class="btn btn-warning btn-sm" href="ubahPB.php?id=<?= $dta['idpembayaran'] ?>">EDIT</a>
 	 		<a class="btn btn-danger btn-sm" href="hapusPB.php?id=<?= $dta['idpembayaran'] ?>" onclick ="return confirm('apakah anda yakin ingin menghapus data? data SPP Pembayaran yang bersangkutan akan ikut terhapus')">HAPUS</a>
 	 	</td>
 	 </tr>
 	 <?php $i++;  ?>
 	<?php endwhile; ?>
 </table>
 <p align="center" style="font-family: arial; color: red; size: 10px;">Menghapus Data Pembayaran Maka Akan menghapus Data Pembayaran dan data tagihan Siswa pada tabel SPP</p>
 </div>
 <?php include 'footer.php'; ?>
