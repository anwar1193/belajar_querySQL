<?php require_once 'koneksi.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Left JOIN</title>
</head>
<body>
    
    <h2>LEFT JOIN</h2>
    <em>Menggabungkan 2 Tabel, tampilkan semua data kiri nya walaupun data kanan nya NULL (kosong)</em> <hr>

    <b>Data Awal / Kiri (Customer)</b> >>

    <span style="color:red; font-weight:bold">
        SELECT * FROM customer;
    </span>

    <table border="1" cellspacing="0" cellpadding="5" style="margin-top : 10px; margin-bottom:20px">
        <tr>
            <th>No</th>
            <th>Kode Customer</th>
            <th>Nama Customer</th>
        </tr>

        <?php  
            $no=0;
            $query_all = "SELECT * FROM customer";
            $result_all = mysqli_query($koneksi, $query_all) or die ('error fungsi all');
            while($row_all = mysqli_fetch_assoc($result_all)){
            $no++;
        ?>
        <tr>
            <td><?= $no ?></td>
            <td><?= $row_all['customer_kode'] ?></td>
            <td><?= $row_all['customer_nama'] ?></td>
        </tr>
        <?php } ?>
    </table>


    <b>Data Awal / Kanan (orders)</b> >>

    <span style="color:red; font-weight:bold">
        SELECT * FROM orders;
    </span>

    <table border="1" cellspacing="0" cellpadding="5" style="margin-top : 10px; margin-bottom:20px">
        <tr>
            <th>No</th>
            <th>ID Order</th>
            <th>Kode Customer</th>
            <th>Jumlah Order</th>
        </tr>

        <?php  
            $no=0;
            $query_all = "SELECT * FROM orders";
            $result_all = mysqli_query($koneksi, $query_all) or die ('error fungsi all');
            while($row_all = mysqli_fetch_assoc($result_all)){
            $no++;
        ?>
        <tr>
            <td><?= $no ?></td>
            <td><?= $row_all['order_id'] ?></td>
            <td><?= $row_all['customer_kode'] ?></td>
            <td><?= $row_all['order_total'] ?></td>
        </tr>
        <?php } ?>
    </table>

    <!-- ............................................................................................. -->

    <b>Tampilkan Semua Data Customer (Baik ada transaksi ataupun tidak ada) : Nama Customer, ID Order, Jumlah Order. dalam 1 tabel dengan LEFT JOIN</b> >> <br>

    <span style="color:red; font-weight:bold">
    SELECT customer_nama, order_id , order_total FROM customer LEFT JOIN orders ON customer.customer_kode = orders.customer_kode
    </span> 
    
    <b>Atau</b> <br>

    <span style="color:red; font-weight:bold">
    SELECT customer_nama, order_id , order_total FROM customer LEFT JOIN orders USING(customer_kode)
    </span> -> jika parameter nya sama


    <table border="1" cellspacing="0" cellpadding="5" style="margin-top : 10px; margin-bottom:20px">
        <tr>
            <th>No</th>
            <th>Nama Customer</th>
            <th>ID Order</th>
            <th>Jumlah Order</th>
        </tr>

        <?php  
            $no=0;

            // $query_all = "SELECT customer_nama, order_id , order_total FROM customer LEFT JOIN orders ON customer.customer_kode = orders.customer_kode";

            $query_all = "SELECT customer_nama, order_id , order_total FROM customer LEFT JOIN orders USING(customer_kode)";

            $result_all = mysqli_query($koneksi, $query_all) or die ('error fungsi all');
            while($row_all = mysqli_fetch_assoc($result_all)){
            $no++;
        ?>
        <tr>
            <td><?= $no ?></td>
            <td><?= $row_all['customer_nama'] ?></td>
            <td><?= $row_all['order_id'] ?></td>
            <td><?= $row_all['order_total'] ?></td>
        </tr>
        <?php } ?>
    </table>
    

    <!-- ............................................................................................. -->

    <b>Tampilkan Data Customer Yang Belum Pernah Order/Transaksi : Nama Customer, ID Order, Jumlah Order.</b> >> <br>

    <span style="color:red; font-weight:bold">
    SELECT customer_nama, order_id , order_total FROM customer LEFT JOIN orders ON customer.customer_kode = orders.customer_kode WHERE order_id IS NULL
    </span> 
    
    <b>Atau</b> <br>

    <span style="color:red; font-weight:bold">
    SELECT customer_nama, order_id , order_total FROM customer LEFT JOIN orders USING(customer_kode) WHERE order_id IS NULL
    </span> -> jika parameter nya sama


    <table border="1" cellspacing="0" cellpadding="5" style="margin-top : 10px; margin-bottom:20px">
        <tr>
            <th>No</th>
            <th>Nama Customer</th>
            <th>ID Order</th>
            <th>Jumlah Order</th>
        </tr>

        <?php  
            $no=0;

            // $query_all = "SELECT customer_nama, order_id , order_total FROM customer LEFT JOIN orders ON customer.customer_kode = orders.customer_kode WHERE order_id IS NULL";

            $query_all = "SELECT customer_nama, order_id , order_total FROM customer LEFT JOIN orders USING(customer_kode) WHERE order_id IS NULL";

            $result_all = mysqli_query($koneksi, $query_all) or die ('error fungsi all');
            while($row_all = mysqli_fetch_assoc($result_all)){
            $no++;
        ?>
        <tr>
            <td><?= $no ?></td>
            <td><?= $row_all['customer_nama'] ?></td>
            <td><?= $row_all['order_id'] ?></td>
            <td><?= $row_all['order_total'] ?></td>
        </tr>
        <?php } ?>
    </table>

</body>
</html>