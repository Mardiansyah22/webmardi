<?php
    include ("../Koneksi/koneksi.php");
    
    $nomor = $_GET["no_kartu"];
    $jenis = $_GET["jenis_kendaraan"];
    $merek = $_GET["merek"];
    $warna = $_GET["warna"];

    $input = "INSERT INTO kendaraan(no_polisi, no_stnk, jenis_kendaraan, merek, warna) 
                VALUES ('$nomor','$jenis','$merek','$warna')";
    $hasil = mysqli_query($konek, $input);

    if ($hasil) {
        header("location:data_kendaraan.php");
    } else {
        echo "data tidak berhasil";
    }
?>