<?php
session_start();
if (isset($_SESSION['login']) ) {
	include 'koneksi.php';
	$hapus = $konek -> query("DELETE FROM kelas WHERE idkelas= '$_GET[id]' ");
	if ($hapus) {
		echo "
		<script>
		alert('data kelas berhasil dihapus');
		document.location.href= 'datakelas.php';
		</script>
		";
	}else {
		echo "
		<script>
		alert('data kelas digunakan ditabel kelas');
		alert('data kelas gagal dihapus');
		document.location.href= 'datakelas.php';
		</script>
		";
	}

}else {
	echo "
	<script>
	alert('anda tidak punya akses kehalaman ini ');
	document.location.href = ' login.php';
	</script>
	";

}


 ?>
