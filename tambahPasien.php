<?php
include 'komponen/starting-pages.php';
include 'komponen/sidebar.php';
include 'komponen/navbar.php';


?>

<div class="pcoded-main-container">

    <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Tambah Data Kandang A</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="Dashboard.php"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="KandangA.php">Kandang A</a></li>
                                 <li class="breadcrumb-item"><a href="">Tambah Data Kandang A</a></li>
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
                        <div class="p-4">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Tambah Data Kandang A</h1>
                    </div>
                </div>
                <form action="" method="POST">
                    <div class="row">
                        <div class="mx-auto">
                            <div class="mb-3">

                                <input type="hidden" class="form-control form-control-user"  placeholder="Masukkan Nama..." name="tanggal" required  value="<?php echo date("Y-m-d"); ?>">

                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">

                        <div class="col">
                            <h3>Pakan <i class="fas fa-utensils"></i></h3>
                            <div class="mb-3">

                                <!-- <input type="text" class="form-control"  placeholder="Total pakan (kg).." name="pakan_total" required="" autocomplete="off" min="0"> -->
                                <input name="pakan_total" type="text" class="form-control" oninput="this.value=this.value.replace(/[^0-9.]/, '')" maxlength="6" placeholder="Total pakan (kg)" autocomplete="off">

                            </div>
                            <div class="mb-3">

                                <!-- <input type="number" class="form-control"  placeholder="Sisa pakan baris 1" name="sisa_1" required="" autocomplete="off" min="0"> -->
                                <input name="sisa_1" type="text" class="form-control" oninput="this.value=this.value.replace(/[^0-9.]/, '')" maxlength="6" placeholder="Sisa pakan baris 1 (kg)" autocomplete="off">
                            </div>
                            <div class="mb-3">

                                <!-- <input type="number" class="form-control"  placeholder="Sisa pakan baris 2" name="sisa_2" required="" autocomplete="off" min="0"> -->
                                <input name="sisa_2" type="text" class="form-control" oninput="this.value=this.value.replace(/[^0-9.]/, '')" maxlength="6" placeholder="Sisa pakan baris 2 (kg)" autocomplete="off">
                            </div>
                            <div class="mb-3">

                                <!-- <input type="number" class="form-control"  placeholder="Sisa pakan baris 3" name="sisa_3" required="" autocomplete="off" min="0"> -->
                                <input name="sisa_3" type="text" class="form-control" oninput="this.value=this.value.replace(/[^0-9.]/, '')" maxlength="6" placeholder="Sisa pakan baris 3 (kg)" autocomplete="off">
                            </div>
                            <div class="mb-3">

                                <!-- <input type="number" class="form-control"  placeholder="Sisa pakan baris 4" name="sisa_4" required="" autocomplete="off" min="0"> -->
                                <input name="sisa_4" type="text" class="form-control" oninput="this.value=this.value.replace(/[^0-9.]/, '')" maxlength="6" placeholder="Sisa pakan baris 4 (kg)" autocomplete="off">
                            </div>
                            <div class="mb-3">

                                <!-- <input type="number" class="form-control"  placeholder="Sisa pakan baris 5" name="sisa_5" required="" autocomplete="off" min="0"> -->
                                <input name="sisa_5" type="text" class="form-control" oninput="this.value=this.value.replace(/[^0-9.]/, '')" maxlength="6" placeholder="Sisa pakan baris 5 (kg)" autocomplete="off">
                            </div>
                            <div class="mb-3">

                                <!-- <input type="number" class="form-control"  placeholder="Sisa pakan baris 6" name="sisa_6" required="" autocomplete="off" min="0"> -->
                                <input name="sisa_6" type="text" class="form-control" oninput="this.value=this.value.replace(/[^0-9.]/, '')" maxlength="6" placeholder="Sisa pakan baris 6 (kg)" autocomplete="off">
                            </div>
                        </div>

                        <div class="col">
                            <h3>Telur <i class="fas fa-egg"></i></h3>
                            <div class="mb-3">

                                <input type="number" class="form-control"  placeholder="Jumlah telur" name="jumlah_telur" required="" autocomplete="off" min="0" maxlength="4">
                                <!-- <input name="jumlah_telur" type="text" class="form-control" oninput="this.value=this.value.replace(/[^0-9]/, '')" maxlength="4" placeholder="Jumlah telur" autocomplete="off"> -->
                            </div>
                            <div class="mb-3">

                                <!-- <input type="text" class="form-control"  placeholder="Berat telur (kg)" name="berat_telur" required="" autocomplete="off" > -->
                                <input name="berat_telur" type="text" class="form-control" oninput="this.value=this.value.replace(/[^0-9.]/, '')" maxlength="6" placeholder="Berat telur (kg)" autocomplete="off">
                            </div>


                        </div>

                        <div class="col">
                            <h3>Suhu <i class="fas fa-temperature-high"></i></h3>
                            <div class="mb-3">

                                <!-- <input type="number" class="form-control"  placeholder="Suhu pagi hari" name="suhu_pagi" required="" autocomplete="off" maxlength="3"> -->
                                <input name="suhu_pagi" type="text" class="form-control" oninput="this.value=this.value.replace(/[^0-9]/, '')" maxlength="3" placeholder="Suhu pagi hari (℃)" autocomplete="off">
                            </div>
                            <div class="mb-3">

                                <!-- <input type="number" class="form-control"  placeholder="Suhu siang hari" name="suhu_siang" required="" autocomplete="off" maxlength="3"> -->
                                <input name="suhu_siang" type="text" class="form-control" oninput="this.value=this.value.replace(/[^0-9]/, '')" maxlength="3" placeholder="Suhu siang hari (℃)" autocomplete="off">
                            </div>
                            <div class="mb-3">

                                <!-- <input type="number" class="form-control"  placeholder="Suhu sore hari" name="suhu_sore" required="" autocomplete="off" maxlength="3"> -->
                                <input name="suhu_sore" type="text" class="form-control" oninput="this.value=this.value.replace(/[^0-9]/, '')" maxlength="3" placeholder="Suhu sore hari (℃)" autocomplete="off">
                                <input type="hidden" class="form-control"  placeholder="Masukkan nama" name="nama" value="<?php echo $_SESSION ['nama'] ?>">

                            </div>
                        </div>

                        <div class="col">
                            <h3>Ayam <i class="fas fa-kiwi-bird"></i></h3>
                            <div class="mb-3">

                                <!-- <input type="number" class="form-control"  placeholder="Jumlah ayam mati" name="mati" min="0" required="" autocomplete="off"> -->
                                <input name="mati" type="text" class="form-control" oninput="this.value=this.value.replace(/[^0-9]/, '')" maxlength="4" placeholder="Jumlah ayam mati" autocomplete="off">
                            </div>
                            <div class="mb-3">

                                <!-- <input type="number" class="form-control"  placeholder="Jumlah ayam afkir" name="afkir" min="0" required="" autocomplete="off"> -->
                                <input name="afkir" type="text" class="form-control" oninput="this.value=this.value.replace(/[^0-9]/, '')" maxlength="4" placeholder="Jumlah ayam afkir" autocomplete="off">
                                <input type="hidden" class="form-control"   name="keterangan" value="Terkonfirmasi">
                            </div>
                        
                            <br><br><br><br>
                            <div class="form-group">
                                <br>
                                <div class="mb-3">
                                    <button type="submit" name="submit" class="btn btn-success">Simpan</button>
                                    <button type="reset" class="btn btn-primary">Reset</button>

                                </div>
                        </div>
                    <div class="card-body">
                        <div class="dt-responsive table-responsive">
                           
                        </div>
                 </div>
            </div>
        </div>
     </div>
</div>

<?php
include 'komponen/closing-pages.php';
?>