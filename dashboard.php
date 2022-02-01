<?php
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
include 'config/koneksi.php';
//coba git

?>



<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Hospital Dashboard</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index-2.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Hospital</a></li>
                            <li class="breadcrumb-item"><a href="#!">Dashboard</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">

        <!-- <div class="col-sm-3">
                <div class="card  text-white ">
                    <div class="card-body text-center">
                        <div class="row align-items-center m-l-0">
                            <div class="col-auto">
                                <i class="fas fa-user-md f-36 text-c-purple"></i>
                            </div>
                            <div class="col-auto">
                                <h6 class="text-muted m-b-10">Doctor</h6>
                                <h2 class="m-b-0">35</h2>
                            </div>
                        </div>            
                    </div>
                </div>
            </div> -->


            <!-- customar project  start -->
           <div class="col-xl-3 col-md-10">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-auto">
                                <i class="fas fa-user-md f-36 text-c-purple"></i>
                            </div>
                            <div class="col-auto">
                                <h6 class="text-muted m-b-10">Perawat</h6>
                                <h2 class="m-b-0"><?php 
                                 $GetTable = mysqli_query($conn, "SELECT COUNT(username) AS JumlahData FROM user");
                                 $GetData = mysqli_fetch_array($GetTable);
                                 $GetNilai = $GetData['JumlahData'];
                                echo "
                                  $GetNilai"; ?></h2> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-auto">
                                <i class="fas fa-user-injured f-36 text-c-red"></i>
                            </div>
                            <div class="col-auto">
                                <h6 class="text-muted m-b-10">Pasien Laki-laki</h6>
                                <h2 class="m-b-0"><?php 
                                    $GetTable = mysqli_query($conn, "SELECT COUNT(idPasien) AS JumlahData FROM pasien WHERE JenisKelamin = 'Laki-laki'");
                                    $GetData = mysqli_fetch_array($GetTable);
                                    $GetNilai = $GetData['JumlahData'];
                                echo "
                                    $GetNilai"; ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-auto">
                                <i class="fas fa-user-nurse f-36 text-c-green"></i>
                            </div>
                            <div class="col-auto">
                                <h6 class="text-muted m-b-10">Pasien Perempuan</h6>
                                <h2 class="m-b-0"><?php 
                                    $GetTable = mysqli_query($conn, "SELECT COUNT(idPasien) AS JumlahData FROM pasien WHERE JenisKelamin = 'Perempuan'");
                                    $GetData = mysqli_fetch_array($GetTable);
                                    $GetNilai = $GetData['JumlahData'];
                                echo "
                                    $GetNilai"; ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-auto">
                                <i class="fas fa-file-medical f-36 text-c-yellow"></i>
                            </div>
                            <div class="col-auto">
                                <h6 class="text-muted m-b-10">Pemeriksaan</h6>
                                <h2 class="m-b-0"><?php 
                                    $GetTable = mysqli_query($conn, "SELECT COUNT(id) AS JumlahData FROM pemeriksaan");
                                    $GetData = mysqli_fetch_array($GetTable);
                                    $GetNilai = $GetData['JumlahData'];
                                echo "
                                    $GetNilai"; ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Grafik Data</h5>
                    </div>
                    <div class="card-body">
                        <div id="summary-chart"></div>
                    </div>
                </div>
            </div>
            <!-- <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-auto">
                                <i class="fas fa-prescription-bottle-alt f-36 text-c-blue"></i>
                            </div>
                            <div class="col-auto">
                                <h6 class="text-muted m-b-10">Pharmacist</h6>
                                <h2 class="m-b-0">10</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-auto">
                                <i class="fas fa-flask f-36 text-c-yellow"></i>
                            </div>
                            <div class="col-auto">
                                <h6 class="text-muted m-b-10">Laboratories</h6>
                                <h2 class="m-b-0">35</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-auto">
                                <i class="fas fa-user-tie f-36 text-c-blue"></i>
                            </div>
                            <div class="col-auto">
                                <h6 class="text-muted m-b-10">Accountant</h6>
                                <h2 class="m-b-0">368</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-auto">
                                <i class="fas fa-file-invoice-dollar f-36 text-c-red"></i>
                            </div>
                            <div class="col-auto">
                                <h6 class="text-muted m-b-10">Payment</h6>
                                <h2 class="m-b-0">79</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-auto">
                                <i class="fas fa-pills f-36 text-c-purple"></i>
                            </div>
                            <div class="col-auto">
                                <h6 class="text-muted m-b-10">Medicine</h6>
                                <h2 class="m-b-0">10</h2>
                            </div>
                        </div>
                    </div>
                </div> -->
            <!-- </div> -->

        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
<!-- [ Main Content ] end -->
    <!-- Warning Section start -->
    <!-- Older IE warning message -->
    <!--[if lt IE 11]>
        <div class="ie-warning">
            <h1>Warning!!</h1>
            <p>You are using an outdated version of Internet Explorer, please upgrade
               <br/>to any of the following web browsers to access this website.
            </p>
            <div class="iew-container">
                <ul class="iew-download">
                    <li>
                        <a href="http://www.google.com/chrome/">
                            <img src="assets/images/browser/chrome.png" alt="Chrome">
                            <div>Chrome</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                            <img src="assets/images/browser/firefox.png" alt="Firefox">
                            <div>Firefox</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.opera.com">
                            <img src="assets/images/browser/opera.png" alt="Opera">
                            <div>Opera</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.apple.com/safari/">
                            <img src="assets/images/browser/safari.png" alt="Safari">
                            <div>Safari</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="assets/images/browser/ie.png" alt="">
                            <div>IE (11 & above)</div>
                        </a>
                    </li>
                </ul>
            </div>
            <p>Sorry for the inconvenience!</p>
        </div>
    <![endif]-->
    <!-- Warning Section Ends -->

    <!-- Required Js -->
<?php

$QueryJanuari =  mysqli_query($conn, "SELECT COUNT(idPasien) AS jumlahPasien FROM pasien WHERE tanggal BETWEEN '2022-01-01' AND '2022-1-31'");
    $GetPasienJanuari = mysqli_fetch_array($QueryJanuari);
    $PasienJanuari= $GetPasienJanuari['jumlahPasien'];

    $QueryFebruari =  mysqli_query($conn, "SELECT COUNT(idPasien) AS jumlahPasien FROM pasien WHERE tanggal BETWEEN '2022-02-01' AND '2022-2-30'");
    $GetPasienFebruari = mysqli_fetch_array($QueryFebruari);
    $PasienFebruari= $GetPasienFebruari['jumlahPasien'];

    $QueryMaret =  mysqli_query($conn, "SELECT COUNT(idPasien) AS jumlahPasien FROM pasien WHERE tanggal BETWEEN '2022-03-01' AND '2022-3-31'");
    $GetPasienMaret = mysqli_fetch_array($QueryMaret);
    $PasienMaret= $GetPasienMaret['jumlahPasien'];

    $QueryApril =  mysqli_query($conn, "SELECT COUNT(idPasien) AS jumlahPasien FROM pasien WHERE tanggal BETWEEN '2022-04-01' AND '2022-4-31'");
    $GetPasienApril = mysqli_fetch_array($QueryApril);
    $PasienApril= $GetPasienApril['jumlahPasien'];

    $QueryMei =  mysqli_query($conn, "SELECT COUNT(idPasien) AS jumlahPasien FROM pasien WHERE tanggal BETWEEN '2022-05-01' AND '2022-5-31'");
    $GetPasienMei = mysqli_fetch_array($QueryMei);
    $PasienMei= $GetPasienMei['jumlahPasien'];

    $QueryJuni =  mysqli_query($conn, "SELECT COUNT(idPasien) AS jumlahPasien FROM pasien WHERE tanggal BETWEEN '2022-06-01' AND '2022-6-31'");
    $GetPasienJuni = mysqli_fetch_array($QueryJuni);
    $PasienJuni= $GetPasienJuni['jumlahPasien'];

    $QueryJuli =  mysqli_query($conn, "SELECT COUNT(idPasien) AS jumlahPasien FROM pasien WHERE tanggal BETWEEN '2022-07-01' AND '2022-7-31'");
    $GetPasienJuli = mysqli_fetch_array($QueryJuli);
    $PasienJuli= $GetPasienJuli['jumlahPasien'];

    $QueryAgustus =  mysqli_query($conn, "SELECT COUNT(idPasien) AS jumlahPasien FROM pasien WHERE tanggal BETWEEN '2022-08-01' AND '2022-8-31'");
    $GetPasienAgustus = mysqli_fetch_array($QueryAgustus);
    $PasienAgustus= $GetPasienAgustus['jumlahPasien'];

    $QuerySeptember =  mysqli_query($conn, "SELECT COUNT(idPasien) AS jumlahPasien FROM pasien WHERE tanggal BETWEEN '2022-09-01' AND '2022-9-31'");
    $GetPasienSeptember = mysqli_fetch_array($QuerySeptember);
    $PasienSeptember= $GetPasienSeptember['jumlahPasien'];

    $QueryOktober =  mysqli_query($conn, "SELECT COUNT(idPasien) AS jumlahPasien FROM pasien WHERE tanggal BETWEEN '2022-10-01' AND '2022-10-31'");
    $GetPasienOktober = mysqli_fetch_array($QueryOktober);
    $PasienOktober= $GetPasienOktober['jumlahPasien'];

    $QueryNovember =  mysqli_query($conn, "SELECT COUNT(idPasien) AS jumlahPasien FROM pasien WHERE tanggal BETWEEN '2022-11-01' AND '2022-11-31'");
    $GetPasienNovember = mysqli_fetch_array($QueryNovember);
    $PasienNovember= $GetPasienNovember['jumlahPasien'];

    $QueryDesember =  mysqli_query($conn, "SELECT COUNT(idPasien) AS jumlahPasien FROM pasien WHERE tanggal BETWEEN '2022-12-01' AND '2022-12-31'");
    $GetPasienDesember = mysqli_fetch_array($QueryDesember);
    $PasienDesember= $GetPasienDesember['jumlahPasien'];

    $jumlahPasien = array($PasienJanuari, $PasienFebruari, $PasienMaret, $PasienApril, $PasienMei, $PasienJuni, $PasienJuli, $PasienAgustus, $PasienSeptember, $PasienOktober, $PasienNovember, $PasienDesember);

    $QueryJanuari =  mysqli_query($conn, "SELECT COUNT(id) AS jumlahPemeriksaan FROM pemeriksaan WHERE tanggalPeriksa BETWEEN '2022-01-01' AND '2022-1-31'");
    $GetPemeriksaanJanuari = mysqli_fetch_array($QueryJanuari);
    $PemeriksaanJanuari= $GetPemeriksaanJanuari['jumlahPemeriksaan'];

    $QueryFebruari =  mysqli_query($conn, "SELECT COUNT(id) AS jumlahPemeriksaan FROM pemeriksaan WHERE tanggalPeriksa BETWEEN '2022-02-01' AND '2022-2-30'");
    $GetPemeriksaanFebruari = mysqli_fetch_array($QueryFebruari);
    $PemeriksaanFebruari= $GetPemeriksaanFebruari['jumlahPemeriksaan'];

    $QueryMaret =  mysqli_query($conn, "SELECT COUNT(id) AS jumlahPemeriksaan FROM pemeriksaan WHERE tanggalPeriksa BETWEEN '2022-03-01' AND '2022-3-31'");
    $GetPemeriksaanMaret = mysqli_fetch_array($QueryMaret);
    $PemeriksaanMaret= $GetPemeriksaanMaret['jumlahPemeriksaan'];

    $QueryApril =  mysqli_query($conn, "SELECT COUNT(id) AS jumlahPemeriksaan FROM pemeriksaan WHERE tanggalPeriksa BETWEEN '2022-04-01' AND '2022-4-31'");
    $GetPemeriksaanApril = mysqli_fetch_array($QueryApril);
    $PemeriksaanApril= $GetPemeriksaanApril['jumlahPemeriksaan'];

    $QueryMei =  mysqli_query($conn, "SELECT COUNT(id) AS jumlahPemeriksaan FROM pemeriksaan WHERE tanggalPeriksa BETWEEN '2022-05-01' AND '2022-5-31'");
    $GetPemeriksaanMei = mysqli_fetch_array($QueryMei);
    $PemeriksaanMei= $GetPemeriksaanMei['jumlahPemeriksaan'];

    $QueryJuni =  mysqli_query($conn, "SELECT COUNT(id) AS jumlahPemeriksaan FROM pemeriksaan WHERE tanggalPeriksa BETWEEN '2022-06-01' AND '2022-6-31'");
    $GetPemeriksaanJuni = mysqli_fetch_array($QueryJuni);
    $PemeriksaanJuni= $GetPemeriksaanJuni['jumlahPemeriksaan'];

    $QueryJuli =  mysqli_query($conn, "SELECT COUNT(id) AS jumlahPemeriksaan FROM pemeriksaan WHERE tanggalPeriksa BETWEEN '2022-07-01' AND '2022-7-31'");
    $GetPemeriksaanJuli = mysqli_fetch_array($QueryJuli);
    $PemeriksaanJuli= $GetPemeriksaanJuli['jumlahPemeriksaan'];

    $QueryAgustus =  mysqli_query($conn, "SELECT COUNT(id) AS jumlahPemeriksaan FROM pemeriksaan WHERE tanggalPeriksa BETWEEN '2022-08-01' AND '2022-8-31'");
    $GetPemeriksaanAgustus = mysqli_fetch_array($QueryAgustus);
    $PemeriksaanAgustus= $GetPemeriksaanAgustus['jumlahPemeriksaan'];

    $QuerySeptember =  mysqli_query($conn, "SELECT COUNT(id) AS jumlahPemeriksaan FROM pemeriksaan WHERE tanggalPeriksa BETWEEN '2022-09-01' AND '2022-9-31'");
    $GetPemeriksaanSeptember = mysqli_fetch_array($QuerySeptember);
    $PemeriksaanSeptember= $GetPemeriksaanSeptember['jumlahPemeriksaan'];

    $QueryOktober =  mysqli_query($conn, "SELECT COUNT(id) AS jumlahPemeriksaan FROM pemeriksaan WHERE tanggalPeriksa BETWEEN '2022-10-01' AND '2022-10-31'");
    $GetPemeriksaanOktober = mysqli_fetch_array($QueryOktober);
    $PemeriksaanOktober= $GetPemeriksaanOktober['jumlahPemeriksaan'];

    $QueryNovember =  mysqli_query($conn, "SELECT COUNT(id) AS jumlahPemeriksaan FROM pemeriksaan WHERE tanggalPeriksa BETWEEN '2022-11-01' AND '2022-11-31'");
    $GetPemeriksaanNovember = mysqli_fetch_array($QueryNovember);
    $PemeriksaanNovember= $GetPemeriksaanNovember['jumlahPemeriksaan'];

    $QueryDesember =  mysqli_query($conn, "SELECT COUNT(id) AS jumlahPemeriksaan FROM pemeriksaan WHERE tanggalPeriksa BETWEEN '2022-12-01' AND '2022-12-31'");
    $GetPemeriksaanDesember = mysqli_fetch_array($QueryDesember);
    $PemeriksaanDesember= $GetPemeriksaanDesember['jumlahPemeriksaan'];

    $jumlahPemeriksaan = array($PemeriksaanJanuari, $PemeriksaanFebruari, $PemeriksaanMaret, $PemeriksaanApril, $PemeriksaanMei, $PemeriksaanJuni, $PemeriksaanJuli, $PemeriksaanAgustus, $PemeriksaanSeptember, $PemeriksaanOktober, $PemeriksaanNovember, $PemeriksaanDesember);

include 'komponen/closing-pages.php';
?>