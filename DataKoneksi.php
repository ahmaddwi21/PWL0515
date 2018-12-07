<?php
    $server = 'localhost';
    $username = 'root';
    $pass = '';
    $data = 'db_berita';

    $con = mysqli_connect($server,$username,$pass) or die ("Koneksi Gagal");
    mysqli_select_db($con,$data) or die ("Database belum ada, silahkan import database");
?>