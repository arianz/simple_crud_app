<?php
include 'koneksi.php';
?>

<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Link</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $result = $koneksi->query("SELECT * FROM biodata");

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<tr>
                            <td>' . $row['id'] . '</td>
                            <td>' . $row['nama'] . '</td>
                            <td>' . $row['alamat'] . '</td>
                            <td>' . $row['telp'] . '</td>
                            <td>' . $row['link'] . '</td>
                            <td>
                                <a href="detail.php?id=' . $row['id'] . '" class="btn btn-info btn-sm">Detail</a>
                                <a href="update.php?id=' . $row['id'] . '" class="btn btn-primary btn-sm">Edit</a>
                                <a href="delete.php?id=' . $row['id'] . '" class="btn btn-danger btn-sm">Hapus</a>
                            </td>
                        </tr>';
                }
            } else {
                echo '<tr><td colspan="6">Tidak ada data.</td></tr>';
            }

            $koneksi->close();
            ?>
        </tbody>
    </table>
</div>
