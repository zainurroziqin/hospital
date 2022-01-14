<?php
	require "config/koneksi.php";

	$UserId = $_GET['id'];

	mysqli_query($conn, "DELETE FROM pemeriksaan WHERE id = '$UserId'");

		echo "
		<script>
		setTimeout(function() { 
			Swal.fire({
				title: 'Berhasil menghapus data!',
				text: 'Anda masuk ke halaman daftar guru',
				icon: 'success',
			});
		},10);  
		window.setTimeout(function(){ 
			window.location.replace('pemeriksaan.php');
		},1500);
		</script>
      ";
	
?>
<script src="../../../package/sweetalert2.all.min.js"></script>