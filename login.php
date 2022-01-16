<?php 
require ('config/koneksi.php');

session_start();


if (isset($_POST['submit'])) {
	$email = $_POST['txt_email'];
	$pass = $_POST['txt_pass'];

	if (!empty(trim($email)) && !empty(trim($pass))) {
		$query = "SELECT * FROM user WHERE username = '$email'";
		$result = mysqli_query($conn, $query);
		$num = mysqli_num_rows($result);

		while ($row = mysqli_fetch_array($result)) {
			$userVal = $row['username'];
			$passVal = $row['password'];
			$userName = $row['fullname'];
			$imageF = $row['image'];
			//$level = $row['level'];
		}
		if ($num != 0) {
			if ($userVal==$email && $passVal==$pass) {
				$_SESSION['ID'] = $userVal;
				$_SESSION['Name'] = $userName;
				$_SESSION['image'] = $imageF;
				//$_SESSION['level'] = $level;
				//$_SESSION['email'] = $userEmail;
				//header('Location: dashboard.php');
        echo "
				<script>
					setTimeout(function() { 
						Swal.fire({
							title: 'Berhasil Login!',
							text: 'Selamat Datang $userName',
							icon: 'success',
						});
					},10);
					window.setTimeout(function(){ 
						window.location.replace('dashboard.php');
					},2500);
				</script>
			";
			}else{
				$error = 'user tidak ditemukan!!';
				header('Location: login.php');
			}
		}else{
			$error = 'user tidak ditemukan';
			header('Location: login.php');
		}
	}else{
		echo "
				<script>
					setTimeout(function() { 
						Swal.fire({
							title: 'Data tidak boleh kosong!',
							
							icon: 'error',
						});
					},10);  
					window.setTimeout(function(){ 
						window.location.replace('dashboard.php');
					},1500);
				</script>
			";
	}
}
?>

<!-- Mirrored from ableproadmin.com/bootstrap/default/auth-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Nov 2021 18:59:53 GMT -->
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

<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
	<div class="auth-content">
		<div class="card">
			<div class="row align-items-center text-center">
				<div class="col-md-12">
					<div class="card-body">
						<img src="assets/images/logo-dark.png" alt="" class="img-fluid mb-4">
                        <form action="" method="POST">
						<h4 class="mb-3 f-w-400">Signin</h4>
						<div class="form-group mb-3">
							<label class="floating-label">Username</label>
							<input type="text" class="form-control" placeholder="" name="txt_email">
						</div>
						<div class="form-group mb-4">
							<label class="floating-label" for="Password">Password</label>
							<input type="password" class="form-control" name="txt_pass" placeholder="">
						</div>
						<button type="submit" class="btn btn-block btn-primary mb-4" name="submit">Masuk</button>
						<p class="mb-2 text-muted">Forgot password? <a href="auth-reset-password.html" class="f-w-400">Reset</a></p>
						<p class="mb-0 text-muted">Don’t have an account? <a href="auth-signup.html" class="f-w-400">Signup</a></p>
                        </form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ auth-signin ] end -->

<?php 
	include 'komponen/closing-pages.php';
?>

<!-- Required Js -->
<!-- <script src="assets/js/vendor-all.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>
<script src="assets/js/ripple.js"></script>
<script src="assets/js/pcoded.min.js"></script>
<script src="assets/alert/sweetalert2.all.min.js" ></script>



</body> -->


<!-- Mirrored from ableproadmin.com/bootstrap/default/auth-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Nov 2021 18:59:54 GMT -->
<!-- </html> -->
