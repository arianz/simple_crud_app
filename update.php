<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
    <title>Edit Data - CRUD Biodata</title>
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
        }
    }
    ?>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="mb-3">Edit Data</h2>
                <form action="edit.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama:</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat:</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $alamat; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="telp" class="form-label">Telepon:</label>
                        <input type="text" class="form-control" id="telp" name="telp" value="<?php echo $telp; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="link" class="form-label">Link:</label>
                        <input type="text" class="form-control" id="link" name="link" value="<?php echo $link; ?>" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </form>
            </div>
            <a href="home.php" class="mt-3 text-center">Kembali</a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js"></script>
</body>
</html>
