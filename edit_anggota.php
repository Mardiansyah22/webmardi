<h3>Edit Anggota</h3>

<?php
    include ("../Koneksi/koneksi.php");
    $nomor = $_GET["no_anggota"];
    $edit = "SELECT * FROM anggota WHERE no_anggota = '$nomor'";
    $hasil = mysqli_query($konek, $edit);
    $data = mysqli_fetch_array($hasil);

    echo 
    "
    <form method = \"GET\"action=\"update_anggota.php\">
        <input type = \"hidden\"name=\"no_anggota\"value=\"$nomor\">
            Nama : <input type=\"text\"name=\"nama\"value=\"$data[nama]\">
            Alamat : <input type=\"text\"name=\"alamat\"value=\"$data[alamat]\">
            Telepon : <input type=\"text\"name=\"no_telp\"value=\"$data[telepon]\">
        <input type=\"submit\"value=\"edit\">
    </form>
    "
?>