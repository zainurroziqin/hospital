<?php
   require "config/koneksi.php";
   $InputUser = $_POST['username'];
   $InputPass = $_POST['password'];
   $InputNama = $_POST['fullname'];

   // Input File
   $ChooseFoto = strtolower($_FILES['image']['name']); // Mengambil nama file
   $Patch = $_FILES['image']['tmp_name']; // Mengambil lokasi file
   $CheckInput = $_FILES['image']['error']; // Mengambil bentuk error ketika upload file
   $CheckSize = $_FILES['image']['size']; // Mengambil ukuran file yang di-upload
   
   // Menampung lokasi pemindahan file ke dalam variabel $MoveTO
   $MoveTO = "assets/images/user/";
   
   // Membatasi valid extension file yang boleh diinput
   $ValidExt = ["jpg", "jpeg", "png"]; // Menampung valid extension dalam array
   $GetNameFile = explode(".", $ChooseFoto); // Memisah nama file untuk mengambil ekstensi file 
   $GetExt = end($GetNameFile); // Mengambil ekstensi file

   // Membuat nama unik untuk file upload supaya tidak terduplikasi
   $GetKodeBIO = uniqid(); // Mengambil kode bio otomatis dari file auto-code
   $SetUniqName = $GetKodeBIO; // Membuat variabel baru untuk menampung kode bio
   $SetUniqName .= "-"; // Menggabungkan kode bio dengan tanda (-)
   $SetUniqName .= $ChooseFoto; // Menggabungkan kode bio dan tanda (-) dengan nama file

   if (empty($InputUser) ||  empty($InputPass) || empty($InputNama)) {
      echo "
         <script>
            alert('Mohon lengkapi seluruh data!');
            document.location.href = 'tambahUser.php';
         </script>
      ";
   }
   else if ($CheckInput === 4) {
      echo "
         <script>
            alert('File foto masih belum diisi!');
            document.location.href = 'tambahUser.php';
         </script>
      ";
   }
   else if (!in_array($GetExt, $ValidExt)) {
      echo "
         <script>
            alert('Ekstensi file yang diperbolehkan hanya (JPG, JPEG, PNG)!');
            document.location.href = 'tambahUser.php';
         </script>
      ";
   }
   else if ($CheckSize > 600000) {
      echo "
         <script>
            alert('Ukuran file terlalu besar, MAX (600 KB)!');
            document.location.href = 'tambahUser.php';
         </script>
      ";
   }
   
   else {
      move_uploaded_file($Patch, $MoveTO.$SetUniqName);
      mysqli_query($conn, "INSERT INTO user (username, password, fullname, image) VALUES ('$InputUser', '$InputPass', '$InputNama', '$SetUniqName')");
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
						window.location.replace('user.php');
					},1500);
				</script>
			";
   }
?>
<script src="../../package/sweetalert2.all.min.js"></script>