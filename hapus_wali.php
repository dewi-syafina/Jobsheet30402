<?php
include 'koneksi.php';

if (isset($_GET['delete'])) {
    $id_kelas = mysqli_real_escape_string($koneksi, $_GET['delete']);

    $query = "DELETE FROM wali WHERE id_wali = '$id_waali'";
    if (mysqli_query($koneksi, $query)) {
        echo "<script>
                alert('Data berhasil dihapus!');
                window.location.href = 'wali.php';
              </script>";
    } else {
        echo "<script>
                alert('Gagal menghapus data.');
                window.location.href = 'wali.php';
              </script>";
    }
}
?>