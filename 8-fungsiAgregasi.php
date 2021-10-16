<?php require_once 'koneksi.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fungsi Agregasi</title>
</head>
<body>
    
    <h2>Fungsi Agregasi</h2>
    <em>Penghitungan pada query SQL</em> <hr>

    <h3>1. COUNT</h3>

    <b>Data Awal (Karyawan JOIN kantor)</b> >>

    <span style="color:red; font-weight:bold">
    SELECT karyawan_namaLengkap, kantor_kota FROM karyawan INNER JOIN kantor USING(kantor_kode);
    </span>

    <table border="1" cellspacing="0" cellpadding="5" style="margin-top : 10px; margin-bottom:20px">
        <tr>
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>Kota</th>
        </tr>

        <?php  
            $no=0;
            $query_all = "SELECT karyawan_namaLengkap, kantor_kota FROM karyawan INNER JOIN kantor USING(kantor_kode)";
            $result_all = mysqli_query($koneksi, $query_all) or die ('error fungsi all');
            while($row_all = mysqli_fetch_assoc($result_all)){
            $no++;
        ?>
        <tr>
            <td><?= $no ?></td>
            <td><?= $row_all['karyawan_namaLengkap'] ?></td>
            <td><?= $row_all['kantor_kota'] ?></td>
        </tr>
        <?php } ?>
    </table>


    <!-- ............................................................................................. -->

    <b>Hitung Berapa Karyawan Yang Berkerja di Jakarta</b> >>
                <br>
    <span style="color:red; font-weight:bold">
    SELECT COUNT(*) AS jumlahKaryawan FROM karyawan INNER JOIN kantor USING(kantor_kode) WHERE kantor_kota='Jakarta'
    </span>

    <br>

        <?php  
            $no=0;
            $query_all = "SELECT COUNT(*) AS jumlahKaryawan FROM karyawan INNER JOIN kantor USING(kantor_kode) WHERE kantor_kota='Jakarta'";
            $result_all = mysqli_query($koneksi, $query_all) or die (mysqli_error($koneksi));
            $row = mysqli_fetch_assoc($result_all);
        ?>

        <span>
                Jumlah Karyawan yang Kantor nya di Jakarta : <b><?= $row['jumlahKaryawan'] ?> Orang </b>
        </span>

    <!-- ............................................................................................. -->

    <h3>2. SUM</h3>

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

    <b>Hitung Berapa Total Harga Beli Semua Produk</b> >>
                <br>
    <span style="color:red; font-weight:bold">
    SELECT SUM(produk_hargaBeli) AS total_hargaBeli FROM produk
    </span>

    <br>

        <?php  
            $no=0;
            $query_all = "SELECT SUM(produk_hargaBeli) AS total_hargaBeli FROM produk";
            $result_all = mysqli_query($koneksi, $query_all) or die (mysqli_error($koneksi));
            $row = mysqli_fetch_assoc($result_all);
        ?>

        <span>
                Total Harga Beli Semua Produk Adalah Rp <b><?= $row['total_hargaBeli'] ?> </b>
        </span> <br><br>

    <!-- ............................................................................................. -->

    <b>Hitung Berapa Total Harga Beli Produk "Obat"</b> >>
                <br>
    <span style="color:red; font-weight:bold">
    SELECT SUM(produk_hargaBeli) AS total_hargaBeliObat FROM produk WHERE produk_jenis='Obat'
    </span>

    <br>

        <?php  
            $no=0;
            $query_all = "SELECT SUM(produk_hargaBeli) AS total_hargaBeliObat FROM produk WHERE produk_jenis='Obat'";
            $result_all = mysqli_query($koneksi, $query_all) or die (mysqli_error($koneksi));
            $row = mysqli_fetch_assoc($result_all);
        ?>

        <span>
                Total Harga Beli Semua Produk "Obat" Rp <b><?= $row['total_hargaBeliObat'] ?> </b>
        </span>
    
    <!-- ............................................................................................. -->

    <h3>3. AVG (Average/Rata-rata)</h3>

    <b>Hitung Berapa Rata-rata Harga Beli Produk "Makanan"</b> >>
                <br>
    <span style="color:red; font-weight:bold">
    SELECT AVG(produk_hargaBeli) AS rata_hargaBeliMakanan FROM produk WHERE produk_jenis='Makanan'
    </span>

    <br>

    <?php  
        $no=0;
        $query_all = "SELECT AVG(produk_hargaBeli) AS rata_hargaBeliMakanan FROM produk WHERE produk_jenis='Makanan'";
        $result_all = mysqli_query($koneksi, $query_all) or die (mysqli_error($koneksi));
        $row = mysqli_fetch_assoc($result_all);
    ?>

    <span>
            Rata-rata Harga Beli Produk "Obat" Rp <b><?= $row['rata_hargaBeliMakanan'] ?> </b>
    </span>

    <!-- ............................................................................................. -->

    <h3>4. MIN (Nilai Terkecil)</h3>

    <b>Cari harga beli makanan yang paling murah</b> >>
                <br>
    <span style="color:red; font-weight:bold">
    SELECT MIN(produk_hargaBeli) AS min_hargaBeliMakanan FROM produk WHERE produk_jenis='Makanan'
    </span>

    <br>

    <?php  
        $no=0;
        $query_all = "SELECT MIN(produk_hargaBeli) AS min_hargaBeliMakanan FROM produk WHERE produk_jenis='Makanan'";
        $result_all = mysqli_query($koneksi, $query_all) or die (mysqli_error($koneksi));
        $row = mysqli_fetch_assoc($result_all);
    ?>

    <span>
            Harga makanan yang paling murah adalah : <b><?= $row['min_hargaBeliMakanan'] ?> </b>
    </span>


    <!-- ............................................................................................. -->

    <h3>5. MAX (Nilai Terbesar)</h3>

    <b>Cari harga beli produk yang paling mahal</b> >>
                <br>
    <span style="color:red; font-weight:bold">
    SELECT MAX(produk_hargaBeli) AS max_hargaBeliMakanan FROM produk
    </span>

    <br>

    <?php  
        $no=0;
        $query_all = "SELECT MAX(produk_hargaBeli) AS max_hargaBeliMakanan FROM produk";
        $result_all = mysqli_query($koneksi, $query_all) or die (mysqli_error($koneksi));
        $row = mysqli_fetch_assoc($result_all);
    ?>

    <span>
            Harga produk yang paling mahal adalah : <b><?= $row['max_hargaBeliMakanan'] ?> </b>
    </span>


</body>
</html>