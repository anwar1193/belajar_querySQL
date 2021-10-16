<?php require_once 'koneksi.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Limit</title>
</head>
<body>
    
    <h2>WHERE LIKE</h2>

    <b>Data Awal (karyawan)</b> >>
    <span style="color:red; font-weight:bold">
        SELECT * FROM karyawan;
    </span>

    <table border="1" cellspacing="0" cellpadding="5" style="margin-top : 10px; margin-bottom:20px">
        <tr>
            <th>No</th>
            <th>Nama Depan</th>
            <th>Nama Belakang</th>
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
        </tr>
        <?php } ?>
    </table>

    <!-- ............................................................................................. -->

    <b>Ambil data yang nama depan nya diawali huruf "M"</b> >>
    <span style="color:red; font-weight:bold">
        SELECT * FROM karyawan WHERE karyawan_namaDepan LIKE 'M%';
    </span>

    <table border="1" cellspacing="0" cellpadding="5" style="margin-top : 10px; margin-bottom:20px">
        <tr>
            <th>No</th>
            <th>Nama Depan</th>
            <th>Nama Belakang</th>
        </tr>

        <?php  
            $no=0;
            $query_all = "SELECT * FROM karyawan WHERE karyawan_namaDepan LIKE 'M%'";
            $result_all = mysqli_query($koneksi, $query_all) or die ('error fungsi all');
            while($row_all = mysqli_fetch_assoc($result_all)){
            $no++;
        ?>
        <tr>
            <td><?= $no ?></td>
            <td><?= $row_all['karyawan_namaDepan'] ?></td>
            <td><?= $row_all['karyawan_namaBelakang'] ?></td>
        </tr>
        <?php } ?>
    </table>

    <!-- ............................................................................................. -->

    <b>Ambil data yang nama belakang nya diakhiri "mad"</b> >>
    <span style="color:red; font-weight:bold">
        SELECT * FROM karyawan WHERE karyawan_namaBelakang LIKE '%mad';
    </span>

    <table border="1" cellspacing="0" cellpadding="5" style="margin-top : 10px; margin-bottom:20px">
        <tr>
            <th>No</th>
            <th>Nama Depan</th>
            <th>Nama Belakang</th>
        </tr>

        <?php  
            $no=0;
            $query_all = "SELECT * FROM karyawan WHERE karyawan_namaBelakang LIKE '%mad'";
            $result_all = mysqli_query($koneksi, $query_all) or die ('error fungsi all');
            while($row_all = mysqli_fetch_assoc($result_all)){
            $no++;
        ?>
        <tr>
            <td><?= $no ?></td>
            <td><?= $row_all['karyawan_namaDepan'] ?></td>
            <td><?= $row_all['karyawan_namaBelakang'] ?></td>
        </tr>
        <?php } ?>
    </table>

    <!-- ............................................................................................. -->

    <b>Ambil data yang nama belakang nya ada huruf "n"</b> >>
    <span style="color:red; font-weight:bold">
        SELECT * FROM karyawan WHERE karyawan_namaBelakang LIKE '%n%';
    </span>

    <table border="1" cellspacing="0" cellpadding="5" style="margin-top : 10px; margin-bottom:20px">
        <tr>
            <th>No</th>
            <th>Nama Depan</th>
            <th>Nama Belakang</th>
        </tr>

        <?php  
            $no=0;
            $query_all = "SELECT * FROM karyawan WHERE karyawan_namaBelakang LIKE '%n%'";
            $result_all = mysqli_query($koneksi, $query_all) or die ('error fungsi all');
            while($row_all = mysqli_fetch_assoc($result_all)){
            $no++;
        ?>
        <tr>
            <td><?= $no ?></td>
            <td><?= $row_all['karyawan_namaDepan'] ?></td>
            <td><?= $row_all['karyawan_namaBelakang'] ?></td>
        </tr>
        <?php } ?>
    </table>

    <!-- ............................................................................................. -->

    <b>Ambil data yang nama depan nya diawali huruf "M" dan setelahnya ada 5 huruf (total 6 huruf)</b> >>
    <span style="color:red; font-weight:bold">
        SELECT * FROM karyawan WHERE karyawan_namaDepan LIKE 'M_____'; (underscore 5x)
    </span>

    <table border="1" cellspacing="0" cellpadding="5" style="margin-top : 10px; margin-bottom:20px">
        <tr>
            <th>No</th>
            <th>Nama Depan</th>
            <th>Nama Belakang</th>
        </tr>

        <?php  
            $no=0;
            $query_all = "SELECT * FROM karyawan WHERE karyawan_namaDepan LIKE 'M_____'";
            $result_all = mysqli_query($koneksi, $query_all) or die ('error fungsi all');
            while($row_all = mysqli_fetch_assoc($result_all)){
            $no++;
        ?>
        <tr>
            <td><?= $no ?></td>
            <td><?= $row_all['karyawan_namaDepan'] ?></td>
            <td><?= $row_all['karyawan_namaBelakang'] ?></td>
        </tr>
        <?php } ?>
    </table>


    <!-- ............................................................................................. -->

    <b>Ambil data yang nama belakang nya diawali huruf "A", diakhiri huruf "d", diantaranya ada 3 huruf</b> >>
    <span style="color:red; font-weight:bold">
        SELECT * FROM karyawan WHERE karyawan_namaBelakang LIKE 'A___d';
    </span>

    <table border="1" cellspacing="0" cellpadding="5" style="margin-top : 10px; margin-bottom:20px">
        <tr>
            <th>No</th>
            <th>Nama Depan</th>
            <th>Nama Belakang</th>
        </tr>

        <?php  
            $no=0;
            $query_all = "SELECT * FROM karyawan WHERE karyawan_namaBelakang LIKE 'A___d'";
            $result_all = mysqli_query($koneksi, $query_all) or die ('error fungsi all');
            while($row_all = mysqli_fetch_assoc($result_all)){
            $no++;
        ?>
        <tr>
            <td><?= $no ?></td>
            <td><?= $row_all['karyawan_namaDepan'] ?></td>
            <td><?= $row_all['karyawan_namaBelakang'] ?></td>
        </tr>
        <?php } ?>
    </table>

    <!-- ............................................................................................. -->

    <b>Ambil data yang nama depan nya tidak diawali huruf "M"</b> >>
    <span style="color:red; font-weight:bold">
        SELECT * FROM karyawan WHERE karyawan_namaDepan NOT LIKE 'M%';
    </span>

    <table border="1" cellspacing="0" cellpadding="5" style="margin-top : 10px; margin-bottom:20px">
        <tr>
            <th>No</th>
            <th>Nama Depan</th>
            <th>Nama Belakang</th>
        </tr>

        <?php  
            $no=0;
            $query_all = "SELECT * FROM karyawan WHERE karyawan_namaDepan NOT LIKE 'M%'";
            $result_all = mysqli_query($koneksi, $query_all) or die ('error fungsi all');
            while($row_all = mysqli_fetch_assoc($result_all)){
            $no++;
        ?>
        <tr>
            <td><?= $no ?></td>
            <td><?= $row_all['karyawan_namaDepan'] ?></td>
            <td><?= $row_all['karyawan_namaBelakang'] ?></td>
        </tr>
        <?php } ?>
    </table>
    

</body>
</html>