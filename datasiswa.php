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
 		<th>NISN</th>
 		<th>NIS</th>
 		<th>NAMA SISWA</th>
 		<th>ID KELAS</th>
		<th>ALAMAT</th>
    <th>NO TELPON</th>
    <th>ID SPP</th>
		<th>AKSI</th>
 	</tr>
 	<?php
 	$data = $konek ->query("SELECT * FROM siswa ORDER BY idsiswa ASC");
 	$i=1;
 	while ($dta = mysqli_fetch_assoc($data) ) :
 	 ?>
 	 <tr>
 	 	<td><?= $i; ?></td>
 	 	<td><?= $dta['nisn'] ?></td>
 	 	<td><?= $dta['nis'] ?></td>
 	 	<td><?= $dta['nama'] ?></td>
 	 	<td><?= $dta['id_kelas'] ?></td>
 	 	<td><?= $dta['alamat'] ?></td>
    <td><?= $dta['no_telp'] ?></td>
    <td><?= $dta['id_spp'] ?></td>
 	 	<td>
 	 		<a class="btn btn-warning btn-sm" href="ubahSW.php?id=<?= $dta['idsiswa'] ?>">EDIT</a>
 	 		<a class="btn btn-danger btn-sm" href="hapusSW.php?id=<?= $dta['idsiswa'] ?>" onclick ="return confirm('apakah anda yakin ingin menghapus data? data SPP Siswa yang bersangkutan akan ikut terhapus')">HAPUS</a>
 	 	</td>
 	 </tr>
 	 <?php $i++;  ?>
 	<?php endwhile; ?>
 </table>
 <p align="center" style="font-family: arial; color: red; size: 10px;">Menghapus Data Siswa Maka Akan menghapus Data Pembayaran dan data tagihan Siswa pada tabel SPP</p>
 </div>
 <?php include 'footer.php'; ?>
