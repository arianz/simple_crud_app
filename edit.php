<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['telp'];
    $link = $_POST['link'];

    $sql = "UPDATE biodata SET nama='$nama', alamat='$alamat', telp='$telp', link='$link' WHERE id=$id";

    if ($koneksi->query($sql) === TRUE) {
        header('Location: index.php');
    } else {
        echo 'Error updating record: ' . $koneksi->error;
    }

    $koneksi->close();
}
?>
