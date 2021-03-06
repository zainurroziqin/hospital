<?php 
include 'config/koneksi.php';
session_start();
if (!isset($_SESSION['ID'])) {
  echo "
    <script>
      alert('Harap login terlebih dahulu sebelum mengakses halaman ini!');
      document.location.href = 'login.php';
    </script>
  ";
}
include 'komponen/starting-pages.php';
include 'komponen/sidebar.php';
include 'komponen/navbar.php';

$Pemeriksaan = query("SELECT pasien.*, pemeriksaan.* FROM pasien INNER JOIN pemeriksaan ON pasien.idPasien = pemeriksaan.idPasien")
?>
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Hasil Pemeriksaan</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="dashboard.php"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Hasil Pemeriksaan</a></li>
                            <!-- <li class="breadcrumb-item"><a href="#!">Basic Initialization</a></li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-12">
            <div class="card">
                <div class="mt-2 mb-2 ml-3 ">
                    <button type="button"  class="btn btn-danger mr-4" onclick = "ExportToExcel('xlsx')"><i class="fas fa-edit" ></i> Export Excel</button>
                </div>
                <div class="card-body">
                    <div class="dt-responsive table-responsive">
                        <table id="tbl_exporttable_to_xls" class="table table-striped table-bordered nowrap">
                            <thead>
                                <tr>
                                    <td colspan = "28" align="center">    <h3 >LAPORAN HASIL PEMERIKSAAN</h3></td>
                                </tr>
                                <tr>
                                    <td colspan ="28" align="center"><h4>DOKUMENT NURSING INDIVIDUAL</h4></td>
                                <tr>
                                <tr>
                                    <th>No</th>
                                    <th>ID Pasien</th>
                                    <th>Tanggal Masuk</th>
                                    <th>Nama Pasien</th>
                                    <th>Alamat</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Umur</th>
                                    <th>Riwayat Sekarang</th>
                                    <th>Riwayat Dahulu</th>
                                    <th>Riwayat Obat</th>
                                    <th>Jam</th>
                                    <th>Tanggal Periksa</th>
                                    <th>Diagnosa</th>
                                    <th>Suhu</th>
                                    <th>Tekanan Darah</th>
                                    <th>Spo2</th>
                                    <th>Respirasi Rate</th>
                                    <th>Denyut Nadi</th>
                                    <th>Gula Darah</th>
                                    <th>Penunjang</th>
                                    <th>Tindakan</th>
                                    <th>Health Education</th>
                                    <th>Obat</th>
                                    <th>Diperiksa Oleh</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <?php $i =1; ?>
                        
                        <?php foreach ($Pemeriksaan as $row ): ?>
                            <td><?=$i; ?></td>
                            <td><?= $row["idPasien"]; ?></td>
                            <td><?= $row["tanggal"]; ?></td>
                            <td><?= $row["namaPasien"]; ?></td>
                            <td><?= $row["alamat"]; ?></td>
                            <td><?= $row["JenisKelamin"]; ?></td>
                            <td><?= $row["TanggalLahir"]; ?></td>
                            <td><?= $row["umur"]; ?></td>
                            <td><?= $row["riwayatSekarang"]; ?></td>
                            <td><?= $row["riwayatDahulu"]; ?></td>
                            <td><?= $row["riwayatObat"]; ?></td>
                            <td><?= $row["jam"]; ?></td>
                            <td><?= $row["tanggalPeriksa"]; ?></td>
                            <td><?= $row["diagnosa"]; ?></td>
                            <td><?= $row["suhu"]; ?>???</td>
                            <td><?= $row["tekananDarah"]; ?> mmHg</td>
                            <td><?= $row["Spo2"]; ?>%</td>
                            <td><?= $row["RR"]; ?>/Menit</td>
                            <td><?= $row["nadi"]; ?>/Menit</td>
                            <td><?= $row["GDA"]; ?> mg/dl</td>
                            <td><?= $row["penunjang"]; ?></td>
                            <td><?= $row["Tindakan"]; ?></td>
                            <td><?= $row["healthEducation"]; ?></td>
                            <td><?= $row["obat"]; ?></td>
                            <td><?= $row["namaDokter"]; ?></td>
                            
                            </tr>
                            <?php $i ++; ?>
                        <?php endforeach; ?>
                            </tbody>
                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- script -->
<script src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
<script>
   function ExportToExcel(type, fn, dl) {
      var elt = document.getElementById('tbl_exporttable_to_xls');
      var wb = XLSX.utils.table_to_book(elt, {
         sheet: "sheet1",
         dateNF: 'dd-mm-yyyy'
      });
      return dl ?
      XLSX.write(wb, {
         bookType: type,
         bookSST: true,
         type: 'base64'
      }) :
      XLSX.writeFile(wb, fn || ('Hasil Pemeriksaan.' + (type || 'xlsx')));
   }
</script>

<?php

include 'komponen/closing-pages.php';
?>