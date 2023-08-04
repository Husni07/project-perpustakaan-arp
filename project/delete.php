<?php
include "koneksi.php";
$id = $_GET["id"];
$result = mysqli_query($koneksi, "DELETE FROM perpustakaan WHERE id = '$id'");
if ($result) {
  echo "
      <script>
      alert('berhasil hapus buku');
      document.location.href='index.php';
      </script>
      ";
} else {
  echo "
      <script>
      alert('buku gagal dihapus');
      document.location.href='index.php';
      </script>
      ";
}
