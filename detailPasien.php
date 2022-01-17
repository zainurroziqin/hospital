<?php
session_start();
include 'config/koneksi.php';
include 'komponen/starting-pages.php';
include 'komponen/sidebar.php';
include 'komponen/navbar.php';


$idPas = $_GET["id"];
$SelectData = query("SELECT * FROM pasien WHERE idPasien = '$idPas'")[0];
?>

<div class="pcoded-main-container">

        <div class="pcoded-content">
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Detail Pasien</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="dashboard.php"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="pasien.php">Pasien</a></li>
                                    <li class="breadcrumb-item"><a href="">Detail Pasien</a></li>
                                <!-- <li class="breadcrumb-item"><a href="#!">Basic Initialization</a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                            <form action="updatePasien.php" method="POST" enctype="multipart/form-data" autocomplete="OFF"> 
                                <center><h4 class="heading-small text mb-4 ml-4 mt-5">Data Pasien</h4></center>
                                <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label">ID Pasien</label>
                                            <input type="text" class="form-control" name="idPasien" placeholder="Auto" value="<?= $SelectData["idPasien"];?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Nama Pasien</label>
                                            <input type="text" class="form-control" name="namaPasien" placeholder="Masukkan nama maks. 30 kata" value="<?= $SelectData["namaPasien"];?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label">Tanggal</label>
                                        <input type="date" class="form-control" name="tanggal" value="<?= $SelectData["tanggal"];?>">
                                    </div>
                                </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Jenis Kelamin</label>
                                            <input type="text" class="form-control" name="JenisKelamin" value="<?= $SelectData["JenisKelamin"];?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Tanggal Lahir</label>
                                            <input type="date" class="form-control" name="TanggalLahir" placeholder="Date" value="<?= $SelectData["TanggalLahir"];?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label class="form-control-label">Usia</label>
                                            <input type="text" class="form-control" name="umur" placeholder="Maksimal 3 angka" value="<?= $SelectData["umur"];?>">  
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="row">
                                        <div class="col-md-5 ml-4">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-address">Alamat</label>
                                                <input id="input-address" class="form-control" name="alamat" placeholder="Masukkan alamat..." type="text" value="<?= $SelectData["alamat"];?>">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label class="form-control-label">Waktu</label>
                                                <input id="input-time" class="form-control" name="jam" type="time" value="<?= $SelectData["jam"];?>">
                                                
                                            </div>
                                        </div>
                                </div>
                                <hr class="my-4" />
                                <!-- Address -->
                                <center><h4 class="heading-small text mb-4 ml-4">Pengkajian</h4></center>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-address">Riwayat sekarang</label>
                                                <input id="input-address" class="form-control" name="riwayatSekarang" placeholder="Riwayat penyakit" type="text" value="<?= $SelectData["riwayatSekarang"];?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-city">Riwayat dahulu</label>
                                                <input type="text" id="input-city" class="form-control" name="riwayatDahulu" placeholder="Riwayat penyakit" value="<?= $SelectData["riwayatDahulu"];?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="form-control-label">Riwayat obat</label>
                                                <input type="text" class="form-control" name="riwayatObat" placeholder="Masukkan obat" value="<?= $SelectData["riwayatObat"];?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-4" />
                                <!-- Description -->
                                <center><h6 class="heading-small text-muted mb-4">Setelah selesai menginput data tekan tombol Simpan</h6>
                                <div class="col-md-12 ml">
                                                    
                                    <button class="btn btn-sm btn-success" type="submit"> PERIKSA </button>
                                </div></center>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php
include 'komponen/closing-pages.php';
?>
