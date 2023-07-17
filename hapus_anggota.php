<?php
    include ("../Koneksi/koneksi.php");

    $nomor = $_GET["no_anggota"];
    
    $hapus = "DELETE FROM anggota WHERE no_anggota = '$nomor'";
    $hasil = mysqli_query($konek, $hapus);

    if($hasil){
        header("location:data_anggota.php");
    }else{
        echo "Hapus Data Gagal";
    }
?>