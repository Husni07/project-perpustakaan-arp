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
    <style>
        body {
            background-color: gray;
        }

        h1 {
            text-align: center;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 4px;
            display: flex;
            justify-content: center;
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        li {
            margin-bottom: 10px;
        }

        label {
            display: flex;
            font-weight: bold;
            margin-bottom: 5px;
            justify-content: center;
        }

        input {
            width: 100%;
            padding: 10px;
            border: 1px solid black;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input::placeholder {
            text-align: center;
        }

        button {
            padding: 10px 20px;
            background-color: greenyellow;
            border: none;
            border-radius: 5px;
            transition: 400ms;
        }

        button:hover {
            transform: scale(1.05);
        }

        .btn {
            display: flex;
            justify-content: center;
        }
    </style>
</head>

<body>
    <h1>TAMBAH BUKU BARU</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="nama_buku">NAMA BUKU</label>
                <input type="text" name="nama_buku" id="nama_buku" required autofocus>
            </li>
            <li>
                <LABEL for="nama_pengarang">NAMA PENGARANG</LABEL>
                <input type="text" name="nama_pengarang" id="nama_pengarang" required>
            </li>
            <li class="btn">
                <button type="submit" name="submit" value="submit">Tambah</button>
            </li>
        </ul>
    </form>
</body>

</html>