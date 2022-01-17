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
<script src="../../package/sweetalert2.all.min.js"></script>