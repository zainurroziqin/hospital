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

$pasien = query("SELECT * FROM pasien")
?>
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Pasien</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="dsashboard.php"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Pasien</a></li>
                            <!-- <li class="breadcrumb-item"><a href="#!">Basic Initialization</a></li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <!-- <h5>Kandang A</h5> -->
                    <a href="tambahPasien.php">
                        <button type="button" class="btn btn-warning"><i class="feather mr-2 icon-plus"></i>Tambah Data Pasien</button>
                        </a>
                </div>
                <div class="card-body">
                    <div class="dt-responsive table-responsive">
                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                            <thead>
                                <tr>
                                    <th>Nomor</th>
                                    <th>Nama</th>
                                    <th>Tanggal</th>
                                    <th>Alamat</th>
                                    <th>Opsi</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                    <?php $i =1; ?>
                        
                        <?php foreach ($pasien as $row ): ?>
                            <td><?=$i; ?></td>
                            <td><?= $row["namaPasien"]; ?></td>
                            <td><?= date ('d F Y', strtotime ($row["tanggal"])); ?></td>
                            <td><?= $row["alamat"]; ?></td>
                            <td>
                                <a href="detailPasien.php?id=<?=$row["idPasien"];?>">
                                    <button type="button" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i> Detail</button>
                                </a>

                                <a href="hapusPasien.php?idPasien=<?=$row["idPasien"];?>">
                                    <button type="button" class="btn btn-danger btn-sm tombol-hapus"><i class="fas fa-trash"></i> Hapus</button>
                                </a>
                            </td>
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

<?php
include 'komponen/closing-pages.php';
?>