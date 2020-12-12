<?php
    $host = "localhost"; 
    $user = "root";
    $pass = "";
    $nama_db = "karyawan";
    $koneksi = mysqli_connect($host, $user, $pass, $nama_db);
    if($koneksi === false){
        die("ERROR" . mysqli_connect_error());
    }
?>