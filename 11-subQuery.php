<?php require_once 'koneksi.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sub Query</title>
</head>
<body>
    
    <h2>Sub Query</h2>

    <b>Data Awal (karyawan)</b> >>
    <span style="color:red; font-weight:bold">
        SELECT * FROM karyawan;
    </span>

    <table border="1" cellspacing="0" cellpadding="5" style="margin-top : 10px; margin-bottom:20px">
        <tr>
            <th>No</th>
            <th>ID Karyawan</th>
            <th>Nama Lengkap</th>
            <th>Nama Atasan</th>
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
            <td><?= $row_all['karyawan_id'] ?></td>
            <td><?= $row_all['karyawan_namaLengkap'] ?></td>
            <td><?= $row_all['karyawan_atasan'] ?></td>
        </tr>
        <?php } ?>
    </table>

    <!-- ............................................................................................. -->

    <b>Cari/Tampilkan Bawahan Dari Ibu Mardiana</b> >> <br>
    <span style="color:red; font-weight:bold">
    SELECT * FROM karyawan WHERE karyawan_atasan IN (SELECT karyawan_id FROM karyawan WHERE karyawan_namaLengkap = 'Mardiana NN');
    </span>

    <table border="1" cellspacing="0" cellpadding="5" style="margin-top : 10px; margin-bottom:20px">
        <tr>
            <th>No</th>
            <th>ID Karyawan</th>
            <th>Nama Lengkap</th>
            <th>Nama Atasan</th>
        </tr>

        <?php  
            $no=0;
            $query_all = "SELECT * FROM karyawan WHERE karyawan_atasan IN (SELECT karyawan_id FROM karyawan WHERE karyawan_namaLengkap = 'Mardiana NN')";
            $result_all = mysqli_query($koneksi, $query_all) or die ('error fungsi all');
            while($row_all = mysqli_fetch_assoc($result_all)){
            $no++;
        ?>
        <tr>
            <td><?= $no ?></td>
            <td><?= $row_all['karyawan_id'] ?></td>
            <td><?= $row_all['karyawan_namaLengkap'] ?></td>
            <td><?= $row_all['karyawan_atasan'] ?></td>
        </tr>
        <?php } ?>
    </table>

    <!-- .................................................................................................. -->

    <b>Data Awal 2 (produk)</b> >>
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


    <!-- .................................................................................................. -->

    <b>Tampilkan produk makanan yang harga beli nya diatas rata-rata</b> >> <br>
    <span style="color:red; font-weight:bold">
    SELECT * FROM produk WHERE produk_jenis='Makanan' AND produk_hargaBeli > (SELECT AVG(produk_hargaBeli) FROM produk WHERE produk_jenis='Makanan');
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
            $query_all = "SELECT * FROM produk WHERE produk_jenis='Makanan' AND produk_hargaBeli > (SELECT AVG(produk_hargaBeli) FROM produk WHERE produk_jenis='Makanan')";
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
    

</body>
</html>