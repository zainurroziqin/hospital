<?php
   require "config/koneksi.php";
   $InputId = $_POST['idPasien'];
   $InputDiag = $_POST['diagnosa'];
   $InputSuhu = $_POST['suhu'];
   $InputTgl = $_POST['tanggal'];
   $InputTd = $_POST['tekananDarah'];
   $InputS = $_POST['Spo2'];
   $InputRR = $_POST['RR'];
   $InputGDA = $_POST['GDA'];
   $InputP = $_POST['penunjang'];
   $InputT = $_POST['Tindakan'];
   $InputHe = $_POST['healthEducation'];
   $InputO = $_POST['obat'];
   $InputDok = $_POST['namaDokter'];

   if (empty($InputId) ||  empty($InputDiag) || empty($InputSuhu) || empty($InputTgl) || empty($InputTd) || empty($InputS) || empty($InputRR) || empty($InputGDA) || empty($InputP) ||  empty($InputT) || empty($InputHe) || empty($InputO) || empty($InputDok)) {
      echo "
         <script>
            alert('Mohon lengkapi seluruh data!');
            document.location.href = 'tambahPemeriksaan.php';
         </script>
      ";
   }
   
   else {
      mysqli_query($conn, "INSERT INTO pemeriksaan (idPasien, diagnosa, suhu, tanggalPeriksa, tekananDarah, Spo2, RR, GDA, penunjang, Tindakan, healthEducation, obat, namaDokter) VALUES ('$InputId', '$InputDiag', '$InputSuhu', '$InputTgl', '$InputTd', '$InputS', '$InputRR', '$InputGDA', '$InputP', '$InputT', '$InputHe', '$InputO', '$InputDok')");
      echo "
				<script>
					setTimeout(function() { 
						Swal.fire({
							title: 'Berhasil menambahkah data!',
							text: 'Anda masuk ke halaman data absen',
							icon: 'success',
						});
					},10);  
					window.setTimeout(function(){ 
						window.location.replace('pemeriksaan.php');
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