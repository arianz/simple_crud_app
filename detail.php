<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
    <title>Detail Data - CRUD Biodata</title>
</head>
<body>
    <?php
    include 'koneksi.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $result = $koneksi->query("SELECT * FROM biodata WHERE id=$id");

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $nama = $row['nama'];
            $alamat = $row['alamat'];
            $telp = $row['telp'];
            $link = $row['link'];
        } else {
            echo 'Data tidak ditemukan.';
            exit();
        }
    } else {
        echo 'ID tidak diberikan.';
        exit();
    }
    ?>

    <div class="container mt-5">
        <h2>Detail Data</h2>
        <table class="table">
            <tbody>
                <tr>
                    <th>ID</th>
                    <td><?php echo $id; ?></td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <td><?php echo $nama; ?></td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td><?php echo $alamat; ?></td>
                </tr>
                <tr>
                    <th>Telepon</th>
                    <td><?php echo $telp; ?></td>
                </tr>
                <tr>
                    <th>Link</th>
                    <td><?php echo $link; ?></td>
                </tr>
            </tbody>
        </table>
        <a href="home.php" class="btn btn-primary">Kembali</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js"></script>
</body>
</html>
