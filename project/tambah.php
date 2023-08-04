<?php
include "koneksi.php";
if (isset($_POST["submit"])) {
    $nama_buku = $_POST["nama_buku"];
    $nama_pengarang = $_POST["nama_pengarang"];

    $result = "INSERT INTO perpustakaan VALUES ('','$nama_buku', '$nama_pengarang')";
    $kirim = mysqli_query($koneksi, $result);

    if ($kirim) {
        echo "
            <script>
            alert('buku baru berhasil ditambahkan');
            document.location.href='index.php';
            </script>
            ";
    } else {
        echo "
            <script>
            alert('buku baru gagal ditambahkan');
            document.location.href='index.php';
            </script>
            ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
</head>

<body>
    <h1>TAMBAH BUKU BARU</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label>NAMA BUKU</label>
                <input type="text" name="nama_buku" id="nama_buku" , required>
            </li>
            <li>
                <LABEL>NAMA PENGARANG</LABEL>
                <input type="text" name="nama_pengarang" id="nama_pengarang" required>
            </li>
            <li>
                <button type="submit" name="submit" value="submit">Tambah</button>
            </li>
        </ul>
    </form>
</body>

</html>