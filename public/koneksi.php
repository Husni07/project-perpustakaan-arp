<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "husni_perpustakaan";

    $koneksi=mysqli_connect($servername,$username,$password,$database);
    mysqli_select_db($koneksi,$database) or die("Gagal Terhubung ke database!");

?>