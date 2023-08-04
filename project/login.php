<?php
include "koneksi.php";

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $get = mysqli_query($koneksi, "SELECT * FROM admin WHERE username= '$username' and password= '$password' ");
    $row = mysqli_fetch_array($get);

    if (isset($row['id']) && $row['id'] <> "") {
        session_start();
        $_SESSION['id'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['nama'] = $row['nama'];
        echo "
        <script>
        alert('user di temukan');
        document.location.href='index.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('user tidak sesuai');
        document.location.href='login.php';
        </script>
        ";
    }
}
if (isset($_GET['pesan']) && $_GET['pesan'] == 'logout') {
    echo "<script> alert('Anda telah berhasil logout.'); </script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <form action="" method="POST">
        <ul>
            <li>
                <label for="username">Username</label>
                <input type="text" name="username" id="username" placeholder="Username" required autofocus>
            </li>
            <li>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Password" required>
            </li>
            <li class="btn">
                <button type="submit" name="login">login</button>
            </li>
        </ul>
    </form>
</body>

</html>