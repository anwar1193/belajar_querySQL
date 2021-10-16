<?php require_once 'koneksi.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Where</title>
</head>
<body>
    
    <h2>SELECT WHERE</h2>

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

    <b>Ambil Data Yang Jenis Nya Makanan</b> >>
    <span style="color:red; font-weight:bold">
    SELECT * FROM produk WHERE produk_jenis = 'Makanan';
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
            $query_all = "SELECT * FROM produk WHERE produk_jenis = 'Makanan'";
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

    <b>Ambil Data Yang Jenis Nya Bukan Makanan</b> >>
    <span style="color:red; font-weight:bold">
    SELECT * FROM produk WHERE produk_jenis != 'Makanan';
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
            $query_all = "SELECT * FROM produk WHERE produk_jenis != 'Makanan'";
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

    <b>Ambil Data Yang Jenis Nya Makanan & Harganya Lebih dari Rp 5.000</b> >>
    <span style="color:red; font-weight:bold">
    SELECT * FROM produk WHERE produk_jenis = 'Makanan' AND produk_hargaBeli > 5000;
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
            $query_all = "SELECT * FROM produk WHERE produk_jenis = 'Makanan' AND produk_hargaBeli > 5000";
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

     <b>Ambil Data Yang Jenis Nya Makanan Atau Harganya Kurang dari Rp 5.000</b> >>
    <span style="color:red; font-weight:bold">
    SELECT * FROM produk WHERE produk_jenis = 'Makanan' OR produk_hargaBeli < 5000;
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
            $query_all = "SELECT * FROM produk WHERE produk_jenis = 'Makanan' OR produk_hargaBeli < 5000";
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

    <b>Ambil Data Yang Jenis Nya Obat dan Sabun</b> >>
    <span style="color:red; font-weight:bold">
    SELECT * FROM produk WHERE produk_jenis IN('Obat', 'Sabun');
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
            $query_all = "SELECT * FROM produk WHERE produk_jenis IN('Obat', 'Sabun')";
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

    <b>Ambil Data Yang Harga Beli Nya Diantara 2000 sampai 5000</b> >>
    <span style="color:red; font-weight:bold">
    SELECT * FROM produk WHERE produk_hargaBeli BETWEEN 2000 AND 5000;
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
            $query_all = "SELECT * FROM produk WHERE produk_hargaBeli BETWEEN 2000 AND 5000";
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

    <b>Ambil Data Yang Harga Beli Nya Diantara 2000 sampai 5000 dan jenis nya makanan</b> >>
    <span style="color:red; font-weight:bold">
    SELECT * FROM produk WHERE produk_hargaBeli BETWEEN 2000 AND 5000 AND produk_jenis='Makanan';
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
            $query_all = "SELECT * FROM produk WHERE produk_hargaBeli BETWEEN 2000 AND 5000 AND produk_jenis='Makanan'";
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