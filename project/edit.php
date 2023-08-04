<?php
include "koneksi.php";
$id = $_GET["id"];
$sql = mysqli_query($koneksi, "SELECT * FROM perpustakaan WHERE id ='$id'");
$ubah = mysqli_fetch_assoc($sql);

if (isset($_POST["submit"])) {
    $nama_buku = $_POST["nama_buku"];
    $nama_pengarang = $_POST["nama_pengarang"];

    $result = "UPDATE perpustakaan SET nama_buku='$nama_buku', nama_pengarang='$nama_pengarang' WHERE id='$id'";
    $update = mysqli_query($koneksi, $result);

    if ($update) {
        echo "
            <script>
            alert('Data berhasil diubah');
            window.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
            alert('Data gagal diubah');
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
    <title>Edit Buku</title>
</head>

<body>
    <h1>EDIT DATA SISWA</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label>NAMA BUKU</label>
                <input type="text" name="nama_buku" id="nama_buku" required value="<?= $ubah["nama_buku"]; ?>">
            </li>
            <li>
                <label>NAMA PENGARANG</label>
                <input type="text" name="nama_pengarang" id="nama_pengarang" required value="<?= $ubah["nama_pengarang"]; ?>">
            </li>
            <li>
                <button type="submit" name="submit">Edit</button>
            </li>
        </ul>
    </form>
</body>

</html>