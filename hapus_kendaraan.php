<?php
    include ("../Koneksi/koneksi.php");

    $nomor = $_GET["no_polisi"];
    
    $hapus = "DELETE FROM kendaraan WHERE no_kartu = '$nomor'";
    $hasil = mysqli_query($konek, $hapus);

    if($hasil){
        header("location:data_kendaraan.php");
    }else{
        echo "Hapus Data Gagal";
    }
?>