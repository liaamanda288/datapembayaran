<?php
include 'koneksi.php';
include 'header.php';
?>
<div class="container">
	<div class="page-header">
<h2 >TAMBAH KELAS</h2>
</div>
	<form action="" method="post" >
		<table class="table " >
      <tr>
				<td>Id Kelas</td>
				<td>:</td>
				<td>
					<input class="form-control" type="text" name="idkelas" placeholder="Masukan Id Kelas" size="30">
				</td>
			</tr>
			<tr>
				<td>Nama Kelas</td>
				<td>:</td>
				<td>
					<input class="form-control" type="text" name="namakelas" placeholder="Masukan Nama Kelas" size="30">
				</td>
			</tr>
			<tr>
				<td>Pilih  Kompetensi Keahlian</td>
				<td>:</td>
				<td>
					<select class="form-control"  name="kelas">
						<option value="" selected >- Pilih Kompetensi Keahlian -</option>
						<?php
						$data = $konek -> query("SELECT * FROM kelas ORDER BY kompetensikeahlian ASC");
						while ($dta = mysqli_fetch_assoc($data)) {
							echo "<option value = '$dta[idkelas]'>$dta[kompetensikeahlian]</option>" ;
						}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td>
					<button class="btn btn-success" type="submit" name="tambah">SIMPAN</button>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>
<?php
 if ( isset($_POST['tambah']) ) {
 	$idkelas = $_POST['idkelas'];
 	$namakelas  = $_POST['namakelas'];
  $kompetensikeahlian  = $_POST['kompetensikeahlian'];

 	$simpan = $konek -> query("INSERT INTO kelas (kelas, idsiswa) VALUES('$kelas','$siswa')");
 	if( $simpan ){
 		echo "
 		<script>
 		alert('data kelas berhasil ditambahkan');
 		document.location.href = 'datakelas.php';
 		</script>
 		";
 	}else {
 		echo "
 		<script>
 		alert('data kelas gagal ditambahkan');
 		document.location.href = 'datakelas.php';
 		</script>
 		";
 	}
 }


?>
</div>
<?php include 'footer.php';  ?>
