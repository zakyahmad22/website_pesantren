<?php

include 'config.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Profile Pondok Modern Al-Muflihin</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="icon" href="image/logo.png" type="image/icon">


<body class="dashboard-page">

    <body>

        <style>
            /* Tampilan terang untuk seluruh halaman */
            body {
                background-color: #ffffff;
                /* Latar belakang putih */
                color: #000000;
                /* Teks hitam */
            }

            /* Styling untuk container utama */
            .container {
                background-color: #f9f9f9;
                /* Latar belakang kontainer putih terang */
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                /* Efek bayangan */
            }

            /* Styling untuk input */
            .form-control {
                background-color: #e9e9e9;
                /* Latar belakang input abu muda */
                color: #000000;
                /* Teks input hitam */
                border: 1px solid #cccccc;
                /* Border abu muda */
            }

            /* Styling saat input dalam kondisi fokus */
            .form-control:focus {
                background-color: #d9d9d9;
                /* Latar belakang saat fokus */
                color: #000000;
                border-color: #007bff;
                /* Warna biru saat fokus */
            }

            /* Styling untuk tombol utama */
            .btn-primary {
                background-color: #007bff;
                border: none;
                color: white;
            }

            .btn-primary:hover {
                background-color: #0056b3;
            }
        </style>

        <div class="container mt-5">
            <h2 class="text-center">Form Pendaftaran Santri</h2>
            <form action="data.php" method="POST">
                <div class="form-group">
                    <label>Id Santri</label>
                    <input type="text" name="id_santri" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="alamat" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </body>

</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>