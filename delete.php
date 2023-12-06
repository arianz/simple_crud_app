<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM biodata WHERE id=$id";

    if ($koneksi->query($sql) === TRUE) {
        header('Location: index.php');
    } else {
        echo 'Error deleting record: ' . $koneksi->error;
    }

    $koneksi->close();
}
?>
