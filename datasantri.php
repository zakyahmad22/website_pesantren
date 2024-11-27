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
            /* Tema Dark untuk seluruh halaman */
            body {
                background-color: #121212;
                /* Latar belakang hitam */
                color: #ffffff;
                /* Teks putih */
            }

            .container {
                background-color: #1f1f1f;
                /* Latar belakang kontainer */
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                /* Efek bayangan */
            }

            .form-control {
                background-color: #2a2a2a;
                /* Latar belakang input */
                color: #ffffff;
                /* Teks input */
                border: 1px solid #444444;
                /* Border abu gelap */
            }

            .form-control:focus {
                background-color: #333333;
                /* Latar belakang saat fokus */
                color: #ffffff;
                border-color: #007bff;
                /* Warna biru saat fokus */
            }

            .btn-primary {
                background-color: #007bff;
                border: none;
            }

            .btn-primary:hover {
                background-color: #0056b3;
            }
        </style>

        <div class="container mt-5">
            <h2 class="text-center">Form Pendaftaran Santri</h2>
            <form action="simpan_santri.php" method="POST">
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