<?php
include 'config/koneksi1.php';
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
                            <?php
                                $idPas = $_GET['idPasien'];

                                $SelectData = mysqli_query($koneksi, "SELECT * FROM pasien WHERE idPasien = '$idPas'");
                                $GetData = mysqli_fetch_array($SelectData);
                            ?>

                            <form action="#" method="POST" enctype="multipart/form-data" autocomplete="OFF"> 
                            <input type="hidden" name="idPasien" value="<?php echo $idPas; ?>"></input>
                                <center><h4 class="heading-small text mb-4 ml-4 mt-5">Data Pasien</h4></center>
                                <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Nama Pasien</label>
                                            <input type="text" class="form-control" name="namaPasien" placeholder="Masukkan nama maks. 30 kata" value="<?php echo $GetData['namaPasien']?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label">Tanggal</label>
                                        <input type="date" class="form-control" name="tanggal" value="<?php echo $GetData['tanggal']?>">
                                    </div>
                                </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Jenis Kelamin</label>
                                            <input type="text" class="form-control" name="tanggal" value="<?php echo $GetData['JenisKelamin']?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Tanggal Lahir</label>
                                            <input type="date" class="form-control" name="TanggalLahir" placeholder="Date" value="<?php echo $GetData['tanggalLahir']?>">>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label class="form-control-label">Usia</label>
                                            <input type="text" class="form-control" name="umur" placeholder="Maksimal 3 angka" value="<?php echo $GetData['umur']?>">>    
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="row">
                                        <div class="col-md-5 ml-4">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-address">Alamat</label>
                                                <input id="input-address" class="form-control" name="alamat" placeholder="Masukkan alamat..." type="text" value="<?php echo $GetData['alamat']?>">>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label class="form-control-label">Waktu</label>
                                                <input id="input-time" class="form-control" name="jam" type="time" value="<?php echo $GetData['jam']?>">
                                                ">
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
                                                <input id="input-address" class="form-control" name="riwayatSekarang" placeholder="Riwayat penyakit" type="text" value="<?php echo $GetData['riwayatSekarang']?>">>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-city">Riwayat dahulu</label>
                                                <input type="text" id="input-city" class="form-control" name="riwayatDahulu" placeholder="Riwayat penyakit" value="<?php echo $GetData['riwayatDahulu']?>">>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="form-control-label">Riwayat obat</label>
                                                <input type="text" class="form-control" name="riwayatObat" placeholder="Masukkan obat" value="<?php echo $GetData['riwayatObat']?>">>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-4" />
                                <!-- Description -->
                                <center><h6 class="heading-small text-muted mb-4">Setelah selesai menginput data tekan tombol perbarui</h6>
                                <div class="col-md-12 ml">
                                                    
                                    <button class="btn btn-sm btn-success" type="submit"> Perbarui Data Pasien </button>
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
