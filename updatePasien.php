<?php
   require "config/koneksi.php";
   $InputId = $_POST['idPasien'];
   $InputNama = $_POST['namaPasien'];
   $InputJK = $_POST['JenisKelamin'];
   $InputTgl = $_POST['tanggal'];
   $InputLah = $_POST['TanggalLahir'];
   $InputUm = $_POST['umur'];
   $InputAm = $_POST['alamat'];
   $InputJm = $_POST['jam'];
   $InputRs = $_POST['riwayatSekarang'];
   $InputRd = $_POST['riwayatDahulu'];
   $InputRo = $_POST['riwayatObat'];
      
      if (empty($InputId) ||  empty($InputNama) || empty($InputJK) || empty($InputTgl) || empty($InputLah) || empty($InputUm) || empty($InputAm) || empty($InputJm) || empty($InputRs) || empty($InputRd) || empty($InputRo)) {
         echo "
            <script>
               alert('Mohon lengkapi seluruh data!');
               document.location.href = 'detailPasien.php';
            </script>
         ";
      }
      else {
         mysqli_query($conn, "UPDATE pasien SET idPasien = '$InputId', namaPasien = '$InputNama', JenisKelamin = '$InputJK', tanggal = '$InputTgl', TanggalLahir = '$InputLah', umur = '$InputUm', alamat = '$InputAm', jam = '$InputJm', riwayatSekarang = '$InputRs', riwayatDahulu = '$InputRd', riwayatObat = '$InputRo' where idPasien = '$InputId'");
         echo "
               <script>
                  setTimeout(function() { 
                     Swal.fire({
                        title: 'Berhasil memperbarui data!',
                        text: 'Anda masuk ke halaman data absen',
                        icon: 'success',
                     });
                  },10);  
                  window.setTimeout(function(){ 
                     window.location.replace('tambahPemeriksaan.php?id=$InputId');
                  },1500);
               </script>
            ";
      }
   
?>

<head>

	<title>Dokument Nursing Individual</title>
	<!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 11]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="Phoenixcoded" />
	<!-- Favicon icon -->
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

	<!-- vendor css -->
	<link rel="stylesheet" href="assets/css/style.css">
	
	


</head>


<script src="../../package/sweetalert2.all.min.js"></script>