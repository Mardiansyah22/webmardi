<?php
//$konek = mysqli_connect("localhost","root",  "","latihan");
include ("koneksi.php");
$nama = $_GET['nama'];
$alamat = $_GET['alamat'];    
$no_telp = $_GET['no telp'];

$input ="insert into parkir(nama,alamat,no telp)"
        "values ('$nama','$alamat','$no_telp')";
$hasil = mysqli_query($konek,$input);

if($hasil) {
    header(location:data_anggota.php");
} 
else {
    echo 'data tidak berhasil';
}
?>
