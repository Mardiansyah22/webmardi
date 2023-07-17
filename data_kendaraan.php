<h3>Data Kendaraan</h3>
<a href="tambah_kendaraan.html">Input Kendaraan</a>

<?php
    include ("../Koneksi/koneksi.php");

    $tampil = "SELECT * FROM kendaraan ORDER BY no_polisi";
    $hasil = mysqli_query($konek, $tampil);
    $total = mysqli_num_rows($hasil);

    echo 
    "
    <table border = 1>
        <tr>
            <th bgcolor = 'blue'>No_kartu</th>
            <th bgcolor = 'yellow'>Jenis Kendaraan</th>
            <th bgcolor = 'yellow'>Merek</th>
            <th bgcolor = 'yellow'>Warna</th>
            <th bgcolor = 'yellow'>Action</th>
        </tr>
    ";
    while ($data = mysqli_fetch_array($hasil)) {
    echo 
    "
        <tr>
            <td>$data[no_polisi]</td>
            <td>$data[no_stnk]</td>
            <td>$data[jenis_kendaraan]</td>
            <td>$data[merek]</td>
            <td>$data[warna]</td>
            <td>
                <a href = \"edit_kendaraan.php?no_polisi=$data[no_polisi]\">Edit</a> |
                <a href = \"hapus_kendaraan.php?no_polisi=$data[no_polisi]\">Hapus</a>
            </td>
        </tr>
    ";
    }
    echo "<table>";
?>