<?php
include "koneksi.php";
$sql = mysqli_query($koneksi, "SELECT*FROM perpustakaan");

session_start();
if (!isset($_SESSION['id'])) {
    header("location:login.php");
}

$username = $_SESSION['nama'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            background-color: grey;
        }

        a {
            text-decoration: none;
            color: black;
        }

        header {
            position: fixed;
            width: 100%;
            border-bottom: 2px solid black;
        }

        nav {
            height: 10%;
            background-color: greenyellow;
        }

        ul {
            display: flex;
            justify-content: space-between;
        }

        li {
            margin: 10px;
            list-style-type: none;
        }

        .admin {
            border: 2px solid black;
            border-radius: 4px;
            color: black;
            background-color: #fff;
        }

        .admi {
            font-weight: bolder;
            font-style: italic;
            transition: 600ms;
            text-decoration: underline;
        }

        .admi:hover {
            transform: scale(1.25);
            text-decoration: none;
        }

        .logout {
            border: 1px solid black;
            border-radius: 4px;
            color: black;
            background-color: red;
            transition: 400ms;
        }

        li,
        a {
            padding: 4px 12px;
        }

        .tambah {
            /* margin: 20px; */
            margin-top: 5%;
            margin-bottom: 0;
            margin-left: 5%;
            padding: 4px;
            border-radius: 4px;
            background-color: greenyellow;
        }

        button {
            transition: 400ms;
        }

        button:hover,
        .logout:hover {
            transform: scale(1.05);
        }

        table {
            margin: 0 5%;
            border: 2px solid black;
            border-radius: 4px;
        }

        tr,
        td {
            /* border-radius: 4px; */
            /* border: 1.5px solid black; */
            border: none;
            border-bottom: 1px dashed black;
            border-right: 1px solid black;
        }

        .opsi {
            display: flex;
            justify-content: space-around;
        }

        .edit {
            width: 50%;
            margin: 1%;
            border: 2px solid black;
            border-radius: 4px;
            background-color: orange;
        }

        .delete {
            width: 50%;
            margin: 1%;
            border: 2px solid black;
            border-radius: 4px;
            background-color: red;
        }

        footer {
            border-top: 1px solid black;
            font-size: 10pt;
            font-style: italic;
            font-weight: bold;
            display: flex;
            justify-content: center;
            background-color: greenyellow;
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <ul>
                <!-- <li class="admin"><a href="#">Admin</a></li> -->
                <li class="admi"><a href="#">Selamat datang, <?php echo $username; ?>!</a></li>
                <li class="logout"><a href="logout.php">logout</a></li>
            </ul>
        </nav>
    </header>
    <div>
        <button class="tambah">
            <a href="tambah.php">+Tambah BUKU</a>
        </button>
    </div>
    <br><br>
    <table border="1" cellpadding="4" cellspacing="4" width="90%">
        <thead style="background-color: black; color:#fff; height: 30px; cursor: pointer;">
            <th width="5%">NO</th>
            <th width="35%">NAMA BUKU</th>
            <th width="44%">PENGARANG</th>
            <th width="16%">OPSI</th>
        </thead>
        <?php
        $no = 1;
        while ($row = mysqli_fetch_assoc($sql)) :
        ?>
            <tr>
                <td align="center"><?= $no++ ?></td>
                <td><?= $row["nama_buku"]; ?></td>
                <td><?= $row["nama_pengarang"]; ?></td>
                <td class="opsi">
                    <button class="edit"><a href="edit.php?id=<?= $row["id"]; ?>">Edit</a></button>
                    <button class="delete"><a href="delete.php?id=<?= $row["id"]; ?>">Delete</a></button>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
    <br><br>
    <footer>
        <a href="#">&copy;2023 CV. BARR INTERNASIONAL All Right Reserved</a>
    </footer>
</body>

</html>