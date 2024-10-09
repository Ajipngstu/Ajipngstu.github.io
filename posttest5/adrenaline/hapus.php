<?php
// Memamnggil file koneksi.php
include "..\koneksi.php";
	if (isset($_GET['id_adrenaline'])) {
		// Mengahapus data berdasarkan id;
		$hapus = "DELETE FROM tb_adrenaline WHERE id_adrenaline='$_GET[id_adrenaline]'";
		$dbh->exec($hapus);
	}
?>

<script>
	alert("Data Berhasil Di Hapus");
	location.href="lihat.php";
</script>