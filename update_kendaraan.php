<?php
    include ("../Koneksi/koneksi.php");

    $nomor = $_GET["no_kartu"];
    $jenis = $_GET["jenis_kendaraan"];
    $merek = $_GET["merek"];
    $warna = $_GET["warna"];
    
    $update = "UPDATE kendaraan SET  jenis_kendaraan = '$jenis', merek = '$merek', warna = '$warna' WHERE no_kartu = '$nomor'";
    $hasil = mysqli_query($konek, $update);

    if($hasil){
        header("location:data_kendaraan.php");
    }else{
        echo "Update Data Gagal";
    }
?>