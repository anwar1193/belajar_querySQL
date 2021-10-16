<?php require_once 'koneksi.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sub Query From</title>
</head>
<body>
    
    <h2>Sub Query From</h2>

    <b>Data Penjualan Tertinggi Dan Terendah Setiap Bulan Di Tahun 2021</b> >> (Beri Format Angka)<br>
    <span style="color:red; font-weight:bold">
    SELECT MONTH(BOOKINGDATE) as bulan, FORMAT(MAX(PokokPinjaman),0) AS tertinggi, FORMAT(MIN(PokokPinjaman),0) AS terendah FROM tbl_penjualan WHERE YEAR(BOOKINGDATE)='2021' GROUP BY MONTH(BOOKINGDATE);
    </span>

    <table border="1" cellspacing="0" cellpadding="5" style="margin-top : 10px; margin-bottom:20px">
        <tr>
            <th>No</th>
            <th>Bulan</th>
            <th>Penjualan Tertinggi</th>
            <th>Penjualan Terendah</th>
        </tr>

        <?php  
            $no=0;
            $query_all = "SELECT MONTH(BOOKINGDATE) as bulan, FORMAT(MAX(PokokPinjaman),0) AS tertinggi, FORMAT(MIN(PokokPinjaman),0) AS terendah FROM tbl_penjualan WHERE YEAR(BOOKINGDATE)='2021' GROUP BY MONTH(BOOKINGDATE)";

            $result_all = mysqli_query($koneksi, $query_all) or die ('error fungsi all');
            while($row_all = mysqli_fetch_assoc($result_all)){
            $no++;
        ?>
        <tr>
            <td><?= $no ?></td>
            <td><?= $row_all['bulan'] ?></td>
            <td><?= $row_all['tertinggi'] ?></td>
            <td><?= $row_all['terendah'] ?></td>
        </tr>
        <?php } ?>
    </table>

    <!-- ............................................................................................. -->


    <b>Cari rata-rata dari Data Penjualan Tertinggi Dan Terendah Setiap Bulan Di Tahun 2021</b> >> (Beri Format Angka)<br>
    <span style="color:red; font-weight:bold">
    SELECT FORMAT(AVG(tertinggi),0) AS rata_tertinggi, FORMAT(AVG(terendah),0) as rata_terendah FROM <br>
            (SELECT MONTH(BOOKINGDATE) as bulan, MAX(PokokPinjaman) AS tertinggi, MIN(PokokPinjaman) AS terendah FROM tbl_penjualan WHERE YEAR(BOOKINGDATE)='2021' GROUP BY MONTH(BOOKINGDATE)) AS tbl_baru
    </span>

    <table border="1" cellspacing="0" cellpadding="5" style="margin-top : 10px; margin-bottom:20px">
        <tr>
            <th>No</th>
            <th>Rata-rata Penjualan Tertinggi</th>
            <th>Rata-rata Penjualan Terendah</th>
        </tr>

        <?php  
            $no=0;
            $query_all = "SELECT FORMAT(AVG(tertinggi),0) AS rata_tertinggi, FORMAT(AVG(terendah),0) as rata_terendah FROM
            (SELECT MONTH(BOOKINGDATE) as bulan, MAX(PokokPinjaman) AS tertinggi, MIN(PokokPinjaman) AS terendah FROM tbl_penjualan WHERE YEAR(BOOKINGDATE)='2021' GROUP BY MONTH(BOOKINGDATE)) AS tbl_baru";

            $result_all = mysqli_query($koneksi, $query_all) or die ('error fungsi all');
            while($row_all = mysqli_fetch_assoc($result_all)){
            $no++;
        ?>
        <tr>
            <td><?= $no ?></td>
            <td><?= $row_all['rata_tertinggi'] ?></td>
            <td><?= $row_all['rata_terendah'] ?></td>
        </tr>
        <?php } ?>
    </table>
    

</body>
</html>