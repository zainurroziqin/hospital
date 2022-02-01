<?php
   require "config/koneksi.php";
   $InputUser = $_POST['username'];
   $InputPass = $_POST['password'];
   $InputNama = $_POST['fullname'];
      
      if (empty($InputUser) ||  empty($InputPass) || empty($InputNama)) {
         echo "
            <script>
               alert('Mohon lengkapi seluruh data!');
               document.location.href = 'detailUser.php';
            </script>
         ";
      }
      else {
         mysqli_query($conn, "UPDATE user SET password = '$InputPass', fullname = '$InputNama' WHERE username = '$InputUser'");
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
                     window.location.replace('user.php');
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