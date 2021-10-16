<?php require_once 'koneksi.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inner JOIN</title>
</head>
<body>
    
    <h2>INNER JOIN</h2>
    <em>Menggabungkan 2 Tabel, tampilkan data kiri & kanan yang berelasi (ada isinya)</em> <hr>

    <b>Data Awal / Kiri (karyawan)</b> >>

    <span style="color:red; font-weight:bold">
        SELECT * FROM karyawan;
    </span>

    <table border="1" cellspacing="0" cellpadding="5" style="margin-top : 10px; margin-bottom:20px">
        <tr>
            <th>No</th>
            <th>Nama Depan</th>
            <th>Nama Belakang</th>
            <th>Kode Kantor</th>
        </tr>

        <?php  
            $no=0;
            $query_all = "SELECT * FROM karyawan";
            $result_all = mysqli_query($koneksi, $query_all) or die ('error fungsi all');
            while($row_all = mysqli_fetch_assoc($result_all)){
            $no++;
        ?>
        <tr>
            <td><?= $no ?></td>
            <td><?= $row_all['karyawan_namaDepan'] ?></td>
            <td><?= $row_all['karyawan_namaBelakang'] ?></td>
            <td><?= $row_all['kantor_kode'] ?></td>
        </tr>
        <?php } ?>
    </table>


    <b>Data Awal / Kanan (kantor)</b> >>

    <span style="color:red; font-weight:bold">
        SELECT * FROM kantor;
    </span>

    <table border="1" cellspacing="0" cellpadding="5" style="margin-top : 10px; margin-bottom:20px">
        <tr>
            <th>No</th>
            <th>Kode Kantor</th>
            <th>Kota</th>
        </tr>

        <?php  
            $no=0;
            $query_all = "SELECT * FROM kantor";
            $result_all = mysqli_query($koneksi, $query_all) or die ('error fungsi all');
            while($row_all = mysqli_fetch_assoc($result_all)){
            $no++;
        ?>
        <tr>
            <td><?= $no ?></td>
            <td><?= $row_all['kantor_kode'] ?></td>
            <td><?= $row_all['kantor_kota'] ?></td>
        </tr>
        <?php } ?>
    </table>

    <!-- ............................................................................................. -->

    <b>Tampilkan Nama Lengkap (Nama Depan + Nama Belakang) & Kota dalam 1 tabel dengan INNER JOIN</b> >> <br>

    <span style="color:red; font-weight:bold">
    SELECT CONCAT(karyawan_namaDepan, ' ', karyawan_namaBelakang) AS nama_lengkap , kantor_kota FROM karyawan INNER JOIN kantor ON karyawan.kantor_kode = kantor.kantor_kode
    </span> 
    
    <b>Atau</b> <br>

    <span style="color:red; font-weight:bold">
    SELECT CONCAT(karyawan_namaDepan, ' ', karyawan_namaBelakang) AS nama_lengkap , kantor_kota FROM karyawan INNER JOIN kantor USING(kantor_kode) 
    </span> -> jika parameter nya sama


    <table border="1" cellspacing="0" cellpadding="5" style="margin-top : 10px; margin-bottom:20px">
        <tr>
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>Kota</th>
        </tr>

        <?php  
            $no=0;

            // $query_all = "SELECT karyawan_namaDepan, karyawan_namaBelakang, kantor_kota FROM karyawan INNER JOIN kantor ON karyawan.kantor_kode = kantor.kantor_kode";

            $query_all = "SELECT CONCAT(karyawan_namaDepan, ' ', karyawan_namaBelakang) AS nama_lengkap , kantor_kota FROM karyawan INNER JOIN kantor USING(kantor_kode)";

            $result_all = mysqli_query($koneksi, $query_all) or die ('error fungsi all');
            while($row_all = mysqli_fetch_assoc($result_all)){
            $no++;
        ?>
        <tr>
            <td><?= $no ?></td>
            <td><?= $row_all['nama_lengkap'] ?></td>
            <td><?= $row_all['kantor_kota'] ?></td>
        </tr>
        <?php } ?>
    </table>
    

</body>
</html>