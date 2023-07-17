<h3>Edit Kendaraan</h3>

<?php
    include ("../Koneksi/koneksi.php");
    $nomor = $_GET["no_kartu"];

    $edit = "SELECT * FROM kendaraan WHERE no_polisi = '$nomor'";
    $hasil = mysqli_query($konek, $edit);
    $data = mysqli_fetch_array($hasil);

    echo 
    "
    <form method = \"GET\"action=\"update_kendaraan.php\">
        <input type = \"hidden\"name=\"no_kartu\"value=\"$nomor\">
            No. STNK : <input type=\"text\"name=\"no_stnk\"value=\"$data[no_stnk]\">
            Jenis Kendaraan : <input type=\"text\"name=\"jenis_kendaraan\"value=\"$data[jenis_kendaraan]\">
            Merek : <input type=\"text\"name=\"merek\"value=\"$data[merek]\">
            Warna : <input type=\"text\"name=\"warna\"value=\"$data[warna]\">
        <input type=\"submit\"value=\"edit\">
    </form>
    "
?>