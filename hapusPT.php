<?php
session_start();
include 'koneksi.php';
if (isset($_SESSION['login']) ) {
	$data = $konek -> query("DELETE FROM petugas WHERE idpetugas ='$_GET[kls]'");
	if ($data){
		echo "
		<script>
		alert('data behasil dihapus');
		document.location.href= 'datapetugas.php'
		</script>
		";
	}else {
		echo "
		<script>
		alert('data petugas digunakan ditabel petugas');
		alert('data gagal dihapus');
		document.location.href = 'datapetugas
		datapetugas.php';
		</script>
		";
	}
}else {
	echo "
	<script>
	alert('anda tidak punya akses dihalaman ini ');
	document.location.href = 'login.php';
	</script>
	";
}
