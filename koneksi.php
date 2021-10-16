<?php  

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'dbs_query';

    $koneksi = mysqli_connect($host, $user, $pass, $db) or die (mysqli_error($koneksi));

?>