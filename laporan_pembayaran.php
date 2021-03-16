<?php
session_start();
if(isset($_SESSION['login']) ) {
	include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Laporan Pembayaran</title>

	<style >
		body{
			font-family: arial;
		}
		.print{
			margin-top: 10px;
		}
		@media print{
			.print{
				display: none;
			}
		}
		table{
			border-collapse: collapse;
		}
	</style>
</head>
<body>
	<h3>SMK NEGERI 1 KRAGILAN<b><br/>LAPORAN PEMBAYARAN SPP</b></h3>
	<br/>
	<hr/>
	Tanggal <?= $_GET['tgl1']." -- ".$_GET['tgl2'];  ?>
	<br/>
	<br>
	<table border="1" cellspacing="" cellpadding="4" width="100%">
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
		<th>KETERANGAN</th>
	</tr>
	<?php
	$spp = $konek -> query("SELECT spp.*,siswa.nis,siswa.nama,siswa.idkelas
							FROM spp INNER JOIN siswa ON spp.idspp=siswa.idspp
							WHERE tglbayar BETWEEN '$_GET[tgl1]' AND '$_GET[tgl2]'
							ORDER BY nobayar ASC");
	$i=1;
	$total = 0;
	while($dta=mysqli_fetch_array($spp)) :
	 ?>
	<tr>
		<td align="center"><?= $i ?></td>
		<td align="center"><?= $dta['nisn'] ?></td>
		<td align="center"><?= $dta['nis'] ?></td>
		<td align=""><?= $dta['nama'] ?></td>
		<td align=""><?= $dta['idkelas'] ?></td>
		<td align=""><?= $dta['nobayar'] ?></td>
		<td align=""><?= $dta['bulan'] ?></td>
		<td align="right"><?= $dta['jumlah'] ?></td>
		<td align="center"><?= $dta['ket'] ?></td>
	</tr>
	<?php $i++; ?>
	<?php $total += $dta['jumlah']; ?>

<?php endwhile; ?>
<tr>
		<td colspan="7" align="right">TOTAL</td>
		<td align="right"><b><?= $total ?></b></td>
		<td></td>
	</tr>
	</table>
<table width="100%">
	<tr>
		<td></td>
		<td width="200px">
			<BR/>
			<p>Dermayu , <?= date('d/m/y') ?> <br/>
				Operator,
			<br/>
			<br/>
			<br/>
		<p>__________________________</p>
		</td>
	</tr>
</table>


	<a  href="#" onclick="window.print();"><button class="print">CETAK</button></a>
</body>
</html>


<?php
} else {
	header("location : login.php");
}
?>
