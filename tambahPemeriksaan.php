<?php
include 'komponen/starting-pages.php';
include 'komponen/sidebar.php';
include 'komponen/navbar.php';
?>

<div class="pcoded-main-container">

        <div class="pcoded-content">
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Tambah Data Pemeriksaan</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="dashboard.php"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="pasien.php">Pasien</a></li>
                                    <li class="breadcrumb-item"><a href="">Tambah Data Pemeriksaan</a></li>
                                <!-- <li class="breadcrumb-item"><a href="#!">Basic Initialization</a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">

                            <form action="insertPemeriksaan.php" method="POST" enctype="multipart/form-data" autocomplete="OFF"> 
                                <center><h4 class="heading-small text mb-4 ml-4 mt-5">Data Pemeriksaan</h4></center>
                                <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label class="form-control-label">ID Pasien</label>
                                            <input type="text" class="form-control" name="idPasien" placeholder="Auto">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Diagnosa</label>
                                            <input type="text" class="form-control" name="diagnosa" placeholder="Masukkan diagnosa maks. 60 kata">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label">Tanggal</label>
                                        <input type="date" class="form-control" name="tanggal">
                                    </div>
                                </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Suhu</label>
                                            <input type="text" class="form-control" name="suhu" placeholder="Masukkan suhu maks. 2 angka">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Tekanan Darah</label>
                                            <input type="text" class="form-control" name="tekananDarah" placeholder="Masukkan maks. 10 kata">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Spo2</label>
                                            <input type="text" class="form-control" name="Spo2" placeholder="Maksimal 50 kata">    
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="row">
                                        <div class="col-md-5 ml-4">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-address">RR</label>
                                                <input id="input-address" class="form-control" name="RR" placeholder="Masukkan RR..." type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-5 ml-4">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-address">GDA</label>
                                                <input id="input-address" class="form-control" name="GDA" placeholder="Masukkan GDA..." type="text">
                                            </div>
                                        </div>
                                </div>
                                <div class="row">
                                        <div class="col-md-5 ml-4">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-address">Penunjang</label>
                                                <input id="input-address" class="form-control" name="penunjang" placeholder="Masukkan Penunjang..." type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-5 ml-4">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-address">Tindakan</label>
                                                <input id="input-address" class="form-control" name="Tindakan" placeholder="Masukkan Tindakan..." type="text">
                                            </div>
                                        </div>
                                </div>
                                <div class="row">
                                        <div class="col-md-5 ml-4">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-address">Health Education</label>
                                                <input id="input-address" class="form-control" name="healthEducation" placeholder="Masukkan Health Education..." type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-5 ml-4">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-address">Obat</label>
                                                <input id="input-address" class="form-control" name="obat" placeholder="Masukkan Obat..." type="text">
                                            </div>
                                        </div>
                                </div>
                                <div class="row">
                                        <div class="col-md-5 ml-4">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-address">Nama Dokter</label>
                                                <input id="input-address" class="form-control" name="namaDokter" placeholder="Masukkan Nama Dokter..." type="text">
                                            </div>
                                        </div>
                                </div>
                                <!-- Description -->
                                <center><h6 class="heading-small text-muted mb-4">Setelah selesai menginput data tekan tombol simpan</h6>
                                <div class="col-md-12 ml">
                                                    
                                    <button class="btn btn-sm btn-success" type="submit"> Simpan Data Pemeriksaan </button>
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
