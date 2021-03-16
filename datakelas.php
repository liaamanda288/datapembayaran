<?php
include 'koneksi.php';

include 'header.php';
 ?>
<div class="container">
	<div class="page-header">
<h2> DATA KELAS SMK NEGERI 1 KRAGILAN</h2>
	</div>
<a class="btn btn-primary " href="tambahKL.php">TAMBAH DATA</a>
 <br/> <br>
 <table class="table table-bordered table-striped">
 	<tr>
 		<th>NO</th>
 		<th>ID KELAS</th>
 		<th>NAMA KELAS</th>
 		<th>KOMPETENSI KEAHLIAN</th>
		<th>AKSI</th>
 	</tr>
 	<?php
 	$data = $konek ->query("SELECT * FROM kelas ORDER BY idkelas ASC");
 	$i=1;
 	while ($dta = mysqli_fetch_assoc($data) ) :
 	 ?>
 	 <tr>
 	 	<td><?= $i; ?></td>
 	 	<td><?= $dta['idkelas'] ?></td>
 	 	<td><?= $dta['namakelas'] ?></td>
 	 	<td><?= $dta['kompetensikeahlian'] ?></td>
 	 	<td>
 	 		<a class="btn btn-warning btn-sm" href="ubahKL.php?id=<?= $dta['idkelas'] ?>">EDIT</a>
 	 		<a class="btn btn-danger btn-sm" href="hapusKL.php?id=<?= $dta['idkelas'] ?>" onclick ="return confirm('apakah anda yakin ingin menghapus data? data SPP Kelas yang bersangkutan akan ikut terhapus')">HAPUS</a>
 	 	</td>
 	 </tr>
 	 <?php $i++;  ?>
 	<?php endwhile; ?>
 </table>
 <p align="center" style="font-family: arial; color: red; size: 10px;">Menghapus Data Kelas Maka Akan menghapus Data Pembayaran dan data tagihan Siswa pada tabel SPP</p>
 </div>
 <?php include 'footer.php'; ?>
