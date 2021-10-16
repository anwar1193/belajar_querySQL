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
    
    <h2>SELECT LIMIT</h2>

    <b>Data Awal (tbl_barang)</b> >>
    <span style="color:red; font-weight:bold">
        SELECT * FROM tbl_barang;
    </span>

    <table border="1" cellspacing="0" cellpadding="5" style="margin-top : 10px; margin-bottom:20px">
        <tr>
            <th>No</th>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Stok</th>
            <th>Gambar</th>
        </tr>

        <?php  
            $no=0;
            $query_all = "SELECT * FROM tbl_barang";
            $result_all = mysqli_query($koneksi, $query_all) or die ('error fungsi all');
            while($row_all = mysqli_fetch_assoc($result_all)){
            $no++;
        ?>
        <tr>
            <td><?= $no ?></td>
            <td><?= $row_all['kode_barang'] ?></td>
            <td><?= $row_all['nama_barang'] ?></td>
            <td><?= $row_all['stok'] ?></td>
            <td><?= $row_all['gambar'] ?></td>
        </tr>
        <?php } ?>
    </table>

    <!-- ............................................................................................. -->

    <b>Ambil 5 Data dimulai dari urutan data ke-3</b> >>
    <span style="color:red; font-weight:bold">
        SELECT * FROM tbl_barang LIMIT 2,5;
    </span>

    <table border="1" cellspacing="0" cellpadding="5" style="margin-top : 10px; margin-bottom:20px">
        <tr>
            <th>No</th>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Stok</th>
            <th>Gambar</th>
        </tr>

        <?php  
            $no=0;
            $query_limit = "SELECT * FROM tbl_barang LIMIT 2,5";
            $result_limit = mysqli_query($koneksi, $query_limit) or die ('error fungsi limit');
            while($row_limit = mysqli_fetch_assoc($result_limit)){
            $no++;
        ?>
        <tr>
            <td><?= $no ?></td>
            <td><?= $row_limit['kode_barang'] ?></td>
            <td><?= $row_limit['nama_barang'] ?></td>
            <td><?= $row_limit['stok'] ?></td>
            <td><?= $row_limit['gambar'] ?></td>
        </tr>
        <?php } ?>
    </table>

</body>
</html>