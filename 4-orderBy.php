<?php require_once 'koneksi.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order By</title>
</head>
<body>
    
    <h2>ORDER BY</h2>
    <em>Mengurutkan Data</em> <hr>

    <b>Data Awal (produk)</b> >>
    <span style="color:red; font-weight:bold">
        SELECT * FROM produk;
    </span>

    <table border="1" cellspacing="0" cellpadding="5" style="margin-top : 10px; margin-bottom:20px">
        <tr>
            <th>No</th>
            <th>Kode Produk</th>
            <th>Jenis Produk</th>
            <th>Nama Produk</th>
            <th>Harga Beli</th>
            <th>Harga Jual</th>
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
            <td><?= $row_all['produk_jenis'] ?></td>
            <td><?= $row_all['produk_nama'] ?></td>
            <td><?= $row_all['produk_hargaBeli'] ?></td>
            <td><?= $row_all['produk_hargaJual'] ?></td>
        </tr>
        <?php } ?>
    </table>

    <!-- ............................................................................................. -->

    <b>Urutkan Data Berdasarkan Abjad Jenis Produk</b> >>
    <span style="color:red; font-weight:bold">
        SELECT * FROM produk ORDER BY produk_jenis;
    </span>

    <table border="1" cellspacing="0" cellpadding="5" style="margin-top : 10px; margin-bottom:20px">
        <tr>
            <th>No</th>
            <th>Kode Produk</th>
            <th>Jenis Produk</th>
            <th>Nama Produk</th>
            <th>Harga Beli</th>
            <th>Harga Jual</th>
            
        </tr>

        <?php  
            $no=0;
            $query_all = "SELECT * FROM produk ORDER BY produk_jenis";
            $result_all = mysqli_query($koneksi, $query_all) or die ('error fungsi all');
            while($row_all = mysqli_fetch_assoc($result_all)){
            $no++;
        ?>
        <tr>
            <td><?= $no ?></td>
            <td><?= $row_all['produk_kode'] ?></td>
            <td><?= $row_all['produk_jenis'] ?></td>
            <td><?= $row_all['produk_nama'] ?></td>
            <td><?= $row_all['produk_hargaBeli'] ?></td>
            <td><?= $row_all['produk_hargaJual'] ?></td>
        </tr>
        <?php } ?>
    </table>


    <!-- ............................................................................................. -->

    <b>Urutkan Data Berdasarkan Abjad Jenis Produk, Lalu Nama Produk</b> >>
    <span style="color:red; font-weight:bold">
        SELECT * FROM produk ORDER BY produk_jenis, produk_nama;
    </span>

    <table border="1" cellspacing="0" cellpadding="5" style="margin-top : 10px; margin-bottom:20px">
        <tr>
            <th>No</th>
            <th>Kode Produk</th>
            <th>Jenis Produk</th>
            <th>Nama Produk</th>
            <th>Harga Beli</th>
            <th>Harga Jual</th>
        </tr>

        <?php  
            $no=0;
            $query_all = "SELECT * FROM produk ORDER BY produk_jenis, produk_nama";
            $result_all = mysqli_query($koneksi, $query_all) or die ('error fungsi all');
            while($row_all = mysqli_fetch_assoc($result_all)){
            $no++;
        ?>
        <tr>
            <td><?= $no ?></td>
            <td><?= $row_all['produk_kode'] ?></td>
            <td><?= $row_all['produk_jenis'] ?></td>
            <td><?= $row_all['produk_nama'] ?></td>
            <td><?= $row_all['produk_hargaBeli'] ?></td>
            <td><?= $row_all['produk_hargaJual'] ?></td>
        </tr>
        <?php } ?>
    </table>

    <!-- ............................................................................................. -->

    <b>Urutkan Data Berdasarkan Harga Beli Dari yang Termahal</b> >>
    <span style="color:red; font-weight:bold">
        SELECT * FROM produk ORDER BY produk_hargaBeli DESC;
    </span>

    <table border="1" cellspacing="0" cellpadding="5" style="margin-top : 10px; margin-bottom:20px">
        <tr>
            <th>No</th>
            <th>Kode Produk</th>
            <th>Jenis Produk</th>
            <th>Nama Produk</th>
            <th>Harga Beli</th>
            <th>Harga Jual</th>
        </tr>

        <?php  
            $no=0;
            $query_all = "SELECT * FROM produk ORDER BY produk_hargaBeli DESC";
            $result_all = mysqli_query($koneksi, $query_all) or die ('error fungsi all');
            while($row_all = mysqli_fetch_assoc($result_all)){
            $no++;
        ?>
        <tr>
            <td><?= $no ?></td>
            <td><?= $row_all['produk_kode'] ?></td>
            <td><?= $row_all['produk_jenis'] ?></td>
            <td><?= $row_all['produk_nama'] ?></td>
            <td><?= $row_all['produk_hargaBeli'] ?></td>
            <td><?= $row_all['produk_hargaJual'] ?></td>
        </tr>
        <?php } ?>
    </table>

    <!-- ............................................................................................. -->

    <b>Urutkan Data Berdasarkan Abjad Jenis Produk, lalu Harga Beli Dari yang Termahal</b> >>
    <span style="color:red; font-weight:bold">
        SELECT * FROM produk ORDER BY produk_jenis, produk_hargaBeli DESC;
    </span>

    <table border="1" cellspacing="0" cellpadding="5" style="margin-top : 10px; margin-bottom:20px">
        <tr>
            <th>No</th>
            <th>Kode Produk</th>
            <th>Jenis Produk</th>
            <th>Nama Produk</th>
            <th>Harga Beli</th>
            <th>Harga Jual</th>
        </tr>

        <?php  
            $no=0;
            $query_all = "SELECT * FROM produk ORDER BY produk_jenis, produk_hargaBeli DESC";
            $result_all = mysqli_query($koneksi, $query_all) or die ('error fungsi all');
            while($row_all = mysqli_fetch_assoc($result_all)){
            $no++;
        ?>
        <tr>
            <td><?= $no ?></td>
            <td><?= $row_all['produk_kode'] ?></td>
            <td><?= $row_all['produk_jenis'] ?></td>
            <td><?= $row_all['produk_nama'] ?></td>
            <td><?= $row_all['produk_hargaBeli'] ?></td>
            <td><?= $row_all['produk_hargaJual'] ?></td>
        </tr>
        <?php } ?>
    </table>

    <!-- ............................................................................................. -->

    <b>Hitung Untung & tampilkan, lalu Urutkan Data Berdasarkan Untung Terbesar</b> >> <br>
    <span style="color:red; font-weight:bold">
    SELECT produk_kode, produk_jenis, produk_nama, produk_hargaBeli, produk_hargaJual,
    produk_hargaJual - produk_hargaBeli AS untung FROM produk ORDER BY untung DESC
    </span>

    <table border="1" cellspacing="0" cellpadding="5" style="margin-top : 10px; margin-bottom:20px">
        <tr>
            <th>No</th>
            <th>Kode Produk</th>
            <th>Jenis Produk</th>
            <th>Nama Produk</th>
            <th>Harga Beli</th>
            <th>Harga Jual</th>
            <th>Untung</th>
        </tr>

        <?php  
            $no=0;
            $query_all = "SELECT produk_kode, produk_jenis, produk_nama, produk_hargaBeli, produk_hargaJual,
                            produk_hargaJual - produk_hargaBeli AS untung FROM produk ORDER BY untung DESC";
            $result_all = mysqli_query($koneksi, $query_all) or die ('error fungsi all');
            while($row_all = mysqli_fetch_assoc($result_all)){
            $no++;
        ?>
        <tr>
            <td><?= $no ?></td>
            <td><?= $row_all['produk_kode'] ?></td>
            <td><?= $row_all['produk_jenis'] ?></td>
            <td><?= $row_all['produk_nama'] ?></td>
            <td><?= $row_all['produk_hargaBeli'] ?></td>
            <td><?= $row_all['produk_hargaJual'] ?></td>
            <td><?= $row_all['untung'] ?></td>
        </tr>
        <?php } ?>
    </table>


    <!-- ............................................................................................. -->

    <b>Urutkan Data Berdasarkan Jenis Produk, Dimana Urutan Jenis Produk nya harus : Obat, Pasta Gigi, Makanan, Minuman, Sabun (custom order)</b> >> <br>
    <span style="color:red; font-weight:bold">
    SELECT * FROM produk ORDER BY FIELD (produk_jenis, 'Obat', 'Pasta Gigi', 'Makanan', 'Minuman', 'Sabun');
    </span>

    <table border="1" cellspacing="0" cellpadding="5" style="margin-top : 10px; margin-bottom:20px">
        <tr>
            <th>No</th>
            <th>Kode Produk</th>
            <th>Jenis Produk</th>
            <th>Nama Produk</th>
            <th>Harga Beli</th>
            <th>Harga Jual</th>
        </tr>

        <?php  
            $no=0;
            $query_all = "SELECT * FROM produk ORDER BY FIELD (produk_jenis, 'Obat', 'Pasta Gigi', 'Makanan', 'Minuman', 'Sabun')";
            $result_all = mysqli_query($koneksi, $query_all) or die ('error fungsi all');
            while($row_all = mysqli_fetch_assoc($result_all)){
            $no++;
        ?>
        <tr>
            <td><?= $no ?></td>
            <td><?= $row_all['produk_kode'] ?></td>
            <td><?= $row_all['produk_jenis'] ?></td>
            <td><?= $row_all['produk_nama'] ?></td>
            <td><?= $row_all['produk_hargaBeli'] ?></td>
            <td><?= $row_all['produk_hargaJual'] ?></td>
        </tr>
        <?php } ?>
    </table>


</body>
</html>