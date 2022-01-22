<?php include 'config/koneksi.php';

 
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

    for($i = 0; $i < count($jumlahPemeriksaan); $i++){
        echo $jumlahPemeriksaan[$i];
        if($i < (count($jumlahPemeriksaan))){
            echo ", ";
        }
    }
?>