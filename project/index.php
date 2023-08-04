<?php
include "koneksi.php";
$sql = mysqli_query($koneksi, "SELECT*FROM perpustakaan");

session_start();
if (!isset($_SESSION['id'])) {
    header("location:login.php");
}

$username = $_SESSION['nama'];

?>


<?php
include "koneksi.php";
$sql = mysqli_query($koneksi, "SELECT*FROM perpustakaan");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <h1>DATA PERPUSTAKAAN</h1>
    <br>
    <a href="tambah.php">+Tambah BUKU</a>&nbsp;&nbsp;
    <a href="logout.php">Logout</a>
    <br><br>
    <table border="4" cellpadding="4" cellspacing="4">
        <tr>
            <th>NO</th>
            <th>NAMA BUKU</th>
            <th>PENGARANG</th>
            <th>AKSI</th>
        </tr>
        <?php
        $no = 1;
        while ($row = mysqli_fetch_assoc($sql)) :
        ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $row["nama_buku"]; ?></td>
                <td><?= $row["nama_pengarang"]; ?></td>
                <td>
                    <a href="edit.php?id=<?= $row["id"]; ?>">edit</a>
                    <a href="delete.php?id=<?= $row["id"]; ?>">hapus</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>

</html>