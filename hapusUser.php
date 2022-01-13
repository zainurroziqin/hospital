<?php
	require "config/koneksi.php";

	$User = $_GET['username'];

	mysqli_query($conn, "DELETE FROM user WHERE username = '$User'");

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
			window.location.replace('user.php');
		},1500);
		</script>
      ";
	
?>
<script src="../../../package/sweetalert2.all.min.js"></script>