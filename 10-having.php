<?php require_once 'koneksi.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Having</title>
</head>
<body>
    
    <h2>HAVING</h2>
    <em>Kondisi yang bisa di terapkan terhadap fungsi agregasi (COUNT, SUM, AVG, MIN, MAX) karena fungsi agregasi tidak dapat menggunakan kondisi WHERE (akan error)</em>

    <br>

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

    <b>(Data Awal 2)Tampilkan Total Harga Beli Dari Setiap Jenis Produk</b> >>
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

    <b>(Data Awal 2)Tampilkan Total Harga Beli Dari Setiap Jenis Produk Yang (Total Harga Belinya Lebih Kecil Dari 20.000)</b> >> <br>
    <span style="color:red; font-weight:bold">
    SELECT produk_jenis, SUM(produk_hargaBeli) AS total_harga FROM produk GROUP BY produk_jenis HAVING total_harga < 20000;
    </span>

    <table border="1" cellspacing="0" cellpadding="5" style="margin-top : 10px; margin-bottom:20px">
        <tr>
            <th>No</th>
            <th>Jenis Produk</th>
            <th>Total Harga Beli</th>
        </tr>

        <?php  
            $no=0;
            $query_all = "SELECT produk_jenis, SUM(produk_hargaBeli) AS total_harga FROM produk GROUP BY produk_jenis HAVING total_harga < 20000";
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



</body>
</html>