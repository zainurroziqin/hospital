<?php
	require "config/koneksi.php";

	$User = $_GET['username'];
	$SelectData = mysqli_query($conn, "SELECT * FROM user WHERE username = '$User'");
	$GetDataIMG = mysqli_fetch_array($SelectData);
	$RemoveIMG = unlink("assets/images/user/$GetDataIMG[image]");

	if ($RemoveIMG) {

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
	}
?>
<script src="../../../package/sweetalert2.all.min.js"></script>