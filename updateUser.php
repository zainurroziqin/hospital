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
         mysqli_query($conn, "UPDATE user SET username = '$InputUser', password = '$InputPass', fullname = '$InputNama'");
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
                     window.location.replace('detailUser.php');
                  },1500);
               </script>
            ";
      }
   
?>
<script src="../../package/sweetalert2.all.min.js"></script>