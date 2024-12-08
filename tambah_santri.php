<?php
// Koneksi ke database
include 'config.php';

// Cek apakah form telah di-submit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['Id'];
    $nama = $_POST['Nama'];
    $alamat = $_POST['Alamat'];
    $email = $_POST['Email'];

    // Query untuk menambahkan data baru
    $query = "INSERT INTO santri (Nama, Alamat, Email, Id) VALUES ('$nama', '$alamat', '$email', '$id')";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "<script>
                alert('Data berhasil ditambahkan!');
                window.location.href = 'data.php';
                </script>";
    } else {
        echo "<script>
                alert('Gagal menambahkan data: " . mysqli_error($koneksi) . "');
                </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Santri</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>

    <style>
        /* CSS untuk form tambah data santri */
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
        }

        h2 {
            font-size: 24px;
            color: #343a40;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
            /* Kolom untuk input */
            gap: 15px;
            /* Jarak antar elemen */
        }

        .form-actions {
            display: flex;
            justify-content: flex-start; /* Tombol di sisi kiri */
            gap: 10px; /* Jarak antara tombol */
        }

        .form-label {
            font-weight: bold;
            color: #495057;
        }

        .form-control {
            /* background-color: #e9e9e9; */
            /* Latar belakang input abu muda */
            border-radius: 5px;
            border: 1px solid #ced4da;
            padding: 10px;
        }

        .form-control:focus {
            border-color: #80bdff;
            box-shadow: 0 0 5px rgba(128, 189, 255, 0.5);
        }

        textarea.form-control {
            resize: none;
        }

        button {
            margin-top: 0;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button.btn-primary {
            background-color: #007bff;
            color: #fff;
        }

        button.btn-primary:hover {
            background-color: #0056b3;
        }

        button.btn-secondary {
            background-color: #6c757d;
            color: #fff;
        }

        button.btn-secondary:hover {
            background-color: #5a6268;
        }
    </style>

    <div class="container mt-3">
        <h2 class="text-center fw-bold fs-3">Tambah Data Santri</h2>
        <form method="POST" action="tambah_santri.php">
            <div class="mb-3">
                <label for="Id" class="form-label">Id Santri</label>
                <input type="text" name="Id" id="Id" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="Nama" class="form-label">Nama</label>
                <input type="text" name="Nama" id="Nama" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="Alamat" class="form-label">Alamat</label>
                <textarea name="Alamat" id="Alamat" class="form-control" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label for="Email" class="form-label">Email</label>
                <input type="email" name="Email" id="Email" class="form-control" required>
            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="data.php" class="btn btn-danger">Batal</a>
            </div>
        </form>
    </div>
</body>

</html>