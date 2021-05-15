<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $data = "uas_pbo";

    $connenction = mysqli_connect($host, $user, $password, $data);
    if (mysqli_connect_errno()){
        echo "Koneksi ke data base gagal".mysqli_connect_error();
    }
?>