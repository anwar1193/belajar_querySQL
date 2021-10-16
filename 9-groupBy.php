<?php require_once 'koneksi.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group By</title>
</head>
<body>
    
    <h2>GROUP BY</h2>

    <b>Data Awal (produk)</b> >>
    <span style="color:red; font-weight:bold">
        SELECT * FROM produk;
    </span>

    <table border="1" cellspacing="0" cellpadding="5" style="margin-top : 10px; margin-bottom:20px">
        <tr>
            <th>No</th>
            <th>Kode Produk</th>
            <th>Nama Produk</th>
            <th>Jenis Produk</th>
            <th>Harga Beli</th>
        </tr>

        <?php  
            $no=0;
            $query_all = "SELECT * FROM produk";
            $result_all = mysqli_query($koneksi, $query_all) or die ('error fungsi all');
            while($row_all = mysqli_fetch_assoc($result_all)){
            $no++;
        ?>
        <tr>
            <td><?= $no ?></td>
            <td><?= $row_all['produk_kode'] ?></td>
            <td><?= $row_all['produk_nama'] ?></td>
            <td><?= $row_all['produk_jenis'] ?></td>
            <td><?= $row_all['produk_hargaBeli'] ?></td>
        </tr>
        <?php } ?>
    </table>

    <!-- ............................................................................................. -->

    <b>Tampilkan Jumlah Data Dari Setiap Jenis Produk</b> >>
    <span style="color:red; font-weight:bold">
    SELECT produk_jenis, COUNT(*) AS jumlah_data FROM produk GROUP BY produk_jenis;
    </span>

    <table border="1" cellspacing="0" cellpadding="5" style="margin-top : 10px; margin-bottom:20px">
        <tr>
            <th>No</th>
            <th>Jenis Produk</th>
            <th>Jumlah Data</th>
        </tr>

        <?php  
            $no=0;
            $query_all = "SELECT produk_jenis, COUNT(*) AS jumlah_data FROM produk GROUP BY produk_jenis";
            $result_all = mysqli_query($koneksi, $query_all) or die ('error fungsi all');
            while($row_all = mysqli_fetch_assoc($result_all)){
            $no++;
        ?>
        <tr>
            <td><?= $no ?></td>
            <td><?= $row_all['produk_jenis'] ?></td>
            <td><?= $row_all['jumlah_data'] ?></td>
        </tr>
        <?php } ?>
    </table>

    <!-- ............................................................................................. -->

    <b>Tampilkan Total Harga Beli Dari Setiap Jenis Produk</b> >>
    <span style="color:red; font-weight:bold">
    SELECT produk_jenis, SUM(produk_hargaBeli) AS total_harga FROM produk GROUP BY produk_jenis;
    </span>

    <table border="1" cellspacing="0" cellpadding="5" style="margin-top : 10px; margin-bottom:20px">
        <tr>
            <th>No</th>
            <th>Jenis Produk</th>
            <th>Total Harga Beli</th>
        </tr>

        <?php  
            $no=0;
            $query_all = "SELECT produk_jenis, SUM(produk_hargaBeli) AS total_harga FROM produk GROUP BY produk_jenis";
            $result_all = mysqli_query($koneksi, $query_all) or die ('error fungsi all');
            while($row_all = mysqli_fetch_assoc($result_all)){
            $no++;
        ?>
        <tr>
            <td><?= $no ?></td>
            <td><?= $row_all['produk_jenis'] ?></td>
            <td><?= $row_all['total_harga'] ?></td>
        </tr>
        <?php } ?>
    </table>

    <!-- ............................................................................................. -->

    <b>Tampilkan Harga Rata-rata Dari Setiap Jenis Produk</b> >>
    <span style="color:red; font-weight:bold">
    SELECT produk_jenis, AVG(produk_hargaBeli) AS harga_rata FROM produk GROUP BY produk_jenis;
    </span>

    <table border="1" cellspacing="0" cellpadding="5" style="margin-top : 10px; margin-bottom:20px">
        <tr>
            <th>No</th>
            <th>Jenis Produk</th>
            <th>Harga Rata-rata</th>
        </tr>

        <?php  
            $no=0;
            $query_all = "SELECT produk_jenis, AVG(produk_hargaBeli) AS harga_rata FROM produk GROUP BY produk_jenis";
            $result_all = mysqli_query($koneksi, $query_all) or die ('error fungsi all');
            while($row_all = mysqli_fetch_assoc($result_all)){
            $no++;
        ?>
        <tr>
            <td><?= $no ?></td>
            <td><?= $row_all['produk_jenis'] ?></td>
            <td><?= $row_all['harga_rata'] ?></td>
        </tr>
        <?php } ?>
    </table>

    <!-- ............................................................................................. -->

    <b>Tampilkan Harga Terbesar Dari Setiap Jenis Produk</b> >>
    <span style="color:red; font-weight:bold">
    SELECT produk_jenis, MAX(produk_hargaBeli) AS harga_terbesar FROM produk GROUP BY produk_jenis;
    </span>

    <table border="1" cellspacing="0" cellpadding="5" style="margin-top : 10px; margin-bottom:20px">
        <tr>
            <th>No</th>
            <th>Jenis Produk</th>
            <th>Harga Rata-rata</th>
        </tr>

        <?php  
            $no=0;
            $query_all = "SELECT produk_jenis, MAX(produk_hargaBeli) AS harga_terbesar FROM produk GROUP BY produk_jenis";
            $result_all = mysqli_query($koneksi, $query_all) or die ('error fungsi all');
            while($row_all = mysqli_fetch_assoc($result_all)){
            $no++;
        ?>
        <tr>
            <td><?= $no ?></td>
            <td><?= $row_all['produk_jenis'] ?></td>
            <td><?= $row_all['harga_terbesar'] ?></td>
        </tr>
        <?php } ?>
    </table>

    <!-- ............................................................................................. -->

    <b>Tampilkan Harga Terkecil Dari Setiap Jenis Produk</b> >>
    <span style="color:red; font-weight:bold">
    SELECT produk_jenis, MIN(produk_hargaBeli) AS harga_terkecil FROM produk GROUP BY produk_jenis;
    </span>

    <table border="1" cellspacing="0" cellpadding="5" style="margin-top : 10px; margin-bottom:20px">
        <tr>
            <th>No</th>
            <th>Jenis Produk</th>
            <th>Harga Rata-rata</th>
        </tr>

        <?php  
            $no=0;
            $query_all = "SELECT produk_jenis, MIN(produk_hargaBeli) AS harga_terkecil FROM produk GROUP BY produk_jenis";
            $result_all = mysqli_query($koneksi, $query_all) or die ('error fungsi all');
            while($row_all = mysqli_fetch_assoc($result_all)){
            $no++;
        ?>
        <tr>
            <td><?= $no ?></td>
            <td><?= $row_all['produk_jenis'] ?></td>
            <td><?= $row_all['harga_terkecil'] ?></td>
        </tr>
        <?php } ?>
    </table>



</body>
</html>