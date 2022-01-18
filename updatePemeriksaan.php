<?php
   require "config/koneksi.php";
   $InputId = $_POST['id'];
   $InputIP = $_POST['idPasien'];
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
      
      if (empty($InputIP) ||  empty($InputDiag) || empty($InputSuhu) || empty($InputTgl) || empty($InputTd) || empty($InputS) || empty($InputRR) || empty($InputGDA) || empty($InputP) || empty($InputT) || empty($InputHe) || empty($InputO) || empty($InputDok)) {
         echo "
            <script>
               alert('Mohon lengkapi seluruh data!');
               document.location.href = 'detailPemeriksaan.php';
            </script>
         ";
      }
      else {
         mysqli_query($conn, "UPDATE pemeriksaan SET idPasien = '$InputIP', diagnosa = '$InputDiag', suhu = '$InputSuhu', tanggalPeriksa = '$InputTgl', tekananDarah = '$InputTd', Spo2 = '$InputS', RR = '$InputRR', GDA = '$InputGDA', penunjang = '$InputP', Tindakan = '$InputT', healthEducation = '$InputHe', obat = '$InputO', namaDokter = '$InputDok' where id = '$InputId'");
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
                     window.location.replace('pemeriksaan.php');
                  },1500);
               </script>
            ";
      }
   
?>
<script src="../../package/sweetalert2.all.min.js"></script>