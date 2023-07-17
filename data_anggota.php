<h3>Data Anggota</h3>
<a href="tambah_anggota.html">Input Anggota</a>

<?php
    include ("../Koneksi/koneksi.php");
    $tampil = "SELECT * FROM anggota ORDER BY no_anggota";
    $hasil = mysqli_query($konek, $tampil);
    $total = mysqli_num_rows($hasil);

    echo 
    "
    <table border = 1>
        <tr>
            <th bgcolor = 'blue'>No. Anggota</th>
            <th bgcolor = 'blue'>Nama</th>
            <th bgcolor = 'blue'>Alamat</th>
            <th bgcolor = 'blue'>No_telp</th>
            <th bgcolor = 'blue'>Action</th>
        </tr>
    ";
    while ($data = mysqli_fetch_array($hasil)) {
    echo 
    "
        <tr>
            <td>$data[no_anggota]</td>
            <td>$data[nama]</td>
            <td>$data[alamat]</td>
            <td>$data[no_telp]</td>
            <td>
                <a href = \"edit_anggota.php?no_anggota=$data[no_anggota]\">Edit</a> |
                <a href = \"hapus_anggota.php?no_anggota=$data[no_anggota]\">Hapus</a>
            </td>
        </tr>
    ";
    }
    echo "<table>";
?>