<?php require_once 'koneksi.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Distinct</title>
</head>
<body>
    
    <h2>SELECT DISTINCT</h2>

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

    <b>Tampilkan Jenis Produk (Tanpa Duplikat)</b> >>
    <span style="color:red; font-weight:bold">
        SELECT * FROM produk;
    </span>

    <table border="1" cellspacing="0" cellpadding="5" style="margin-top : 10px; margin-bottom:20px">
        <tr>
            <th>No</th>
            <th>Jenis Produk</th>
        </tr>

        <?php  
            $no=0;
            $query_all = "SELECT DISTINCT produk_jenis FROM produk";
            $result_all = mysqli_query($koneksi, $query_all) or die ('error fungsi all');
            while($row_all = mysqli_fetch_assoc($result_all)){
            $no++;
        ?>
        <tr>
            <td><?= $no ?></td>
            <td><?= $row_all['produk_jenis'] ?></td>
        </tr>
        <?php } ?>
    </table>

    


</body>
</html>