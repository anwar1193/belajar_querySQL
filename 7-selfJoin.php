<?php require_once 'koneksi.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Self JOIN</title>
</head>
<body>
    
    <h2>SELF JOIN</h2>
    <em>JOIN yang di lakukan ke tabel nya sendiri</em> <hr>

    <b>Data Awal (Karyawan)</b> >>

    <span style="color:red; font-weight:bold">
        SELECT * FROM karyawan;
    </span>

    <table border="1" cellspacing="0" cellpadding="5" style="margin-top : 10px; margin-bottom:20px">
        <tr>
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>Jabatan</th>
            <th>Atasan</th>
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
            <td><?= $row_all['karyawan_namaLengkap'] ?></td>
            <td><?= $row_all['karyawan_jabatan'] ?></td>
            <td><?= $row_all['karyawan_atasan'] ?></td>
        </tr>
        <?php } ?>
    </table>


    <!-- ............................................................................................. -->

    <b>Tampilkan Data sbb : Nama, Jabatan, Nama Bawahan, Jabatan Bawahan (Tampilkan Semua Karyawan)</b> >>
                <br>
    <span style="color:red; font-weight:bold">
    SELECT <br>
            atasan.karyawan_namaLengkap AS nama_atasan, <br>
            atasan.karyawan_jabatan AS jabatan_atasan, <br>
            bawahan.karyawan_namaLengkap AS nama_bawahan, <br>
            bawahan.karyawan_jabatan AS jabatan_bawahan <br>
            FROM karyawan AS atasan LEFT JOIN karyawan AS bawahan ON atasan.karyawan_id = bawahan.karyawan_atasan
    </span>

    <table border="1" cellspacing="0" cellpadding="5" style="margin-top : 10px; margin-bottom:20px">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Nama Bawahan</th>
            <th>Jabatan Bawahan</th>
        </tr>

        <?php  
            $no=0;
            $query_all = "SELECT 
            atasan.karyawan_namaLengkap AS nama_atasan, 
            atasan.karyawan_jabatan AS jabatan_atasan, 
            bawahan.karyawan_namaLengkap AS nama_bawahan, 
            bawahan.karyawan_jabatan AS jabatan_bawahan
            FROM karyawan AS atasan LEFT JOIN karyawan AS bawahan ON atasan.karyawan_id = bawahan.karyawan_atasan";

            $result_all = mysqli_query($koneksi, $query_all) or die ('error fungsi all');
            while($row_all = mysqli_fetch_assoc($result_all)){
            $no++;
        ?>
        <tr>
            <td><?= $no ?></td>
            <td><?= $row_all['nama_atasan'] ?></td>
            <td><?= $row_all['jabatan_atasan'] ?></td>
            <td><?= $row_all['nama_bawahan'] ?></td>
            <td><?= $row_all['jabatan_bawahan'] ?></td>
        </tr>
        <?php } ?>
    </table>

</body>
</html>