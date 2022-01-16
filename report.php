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

$Pemeriksaan = query("SELECT * FROM pemeriksaan")
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
                <div class="card-body">
                    <div class="dt-responsive table-responsive">
                        <table id="tbl_exporttable_to_xls" class="table table-striped table-bordered nowrap">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Id Pasien</th>
                                    <th>Tanggal</th>
                                    <th>Diagnosa</th>
                                    <th>Suhu</th>
                                    <th>Tekanan Darah</th>
                                    <th>Spo2</th>
                                    <th>RR</th>
                                    <th>GDA</th>
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
                            <td><?= $row["diagnosa"]; ?></td>
                            <td><?= $row["suhu"]; ?></td>
                            <td><?= $row["tekananDarah"]; ?></td>
                            <td><?= $row["Spo2"]; ?></td>
                            <td><?= $row["RR"]; ?></td>
                            <td><?= $row["GDA"]; ?></td>
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
                <div class="mt-2 mb-2 ml-3 ">
                    <button type="button"  class="btn btn-danger mr-4" onclick = "ExportToExcel('xlsx')"><i class="fas fa-edit" ></i> Export Excel</button>
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