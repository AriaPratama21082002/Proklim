<?php
    //koneksi
    $connect = mysqli_connect('localhost', 'root', '', 'powjab');


    //set variabel
    $kota_kabupaten    = $_POST['kota_kabupaten'];
    $kecamatan       = $_POST['kecamatan'];
    $provinsi     = $_POST['provinsi'];
    $kelurahan_desa     = $_POST['kelurahan_desa'];
    $dusun_rw     = $_POST['dusun_rw'];
    $penanggung_jawab     = $_POST['penanggung_jawab'];
    $no_hp     = $_POST['no_hp'];
    $latitude     = $_POST['latitude'];
    $longtitude     = $_POST['longitude'];


    //input data
    $insert = mysqli_query($connect, "insert into lokasi set kota_kabupaten='$kota_kabupaten', kecamatan='$kecamatan', provinsi='$provinsi', kelurahan_desa='$kelurahan_desa',dusun_rw='$dusun_rw',penanggung_jawab='$penanggung_jawab',no_hp='$no_hp',latitude='$latitude',longitude='$longtitude' ");

    //kembali
    header("Location: index.php");

?>
