<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['telp'];
    $link = $_POST['link'];

    $sql = "INSERT INTO biodata (nama, alamat, telp, link) VALUES ('$nama', '$alamat', '$telp', '$link')";

    if ($koneksi->query($sql) === TRUE) {
        header('Location: index.php');
    } else {
        echo 'Error: ' . $sql . '<br>' . $koneksi->error;
    }

    $koneksi->close();
}
?>
