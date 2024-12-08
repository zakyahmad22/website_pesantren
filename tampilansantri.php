<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Santri</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="icon" href="image/logo.png" type="image/icon">
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

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
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center">Data Santri Baru</h2>
        <a href="datasantri.php" class="btn btn-primary mb-3">+ Tambah Data</a>
        <table id="dataSantri" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Id Santri</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>Action</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php

                // Koneksi ke database
                include 'config.php';

                // Query untuk mengambil semua data dari tabel santri
                // mysqli_query: fungsi bawaan PHP untuk menjalankan query SQL ke database menggunakan koneksi MySQL
                // $koneksi: variabel yang menyimpan koneksi ke database, biasanya didefinisikan di file config.php
                // $query: query SQL yang akan dijalankan
                // $result: variabel yang menyimpan hasil eksekusi query
                
                $query = "SELECT * FROM santri";
                $result = mysqli_query($koneksi, $query);

                // Periksa apakah query berhasil
                if (!$result) {
                    die("Query gagal: " . mysqli_error($koneksi));
                }

                // Tampilkan data santri
                $no = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>  
                        <td>{$no}</td>
                        <td>{$row['Id']}</td>
                        <td>{$row['Nama']}</td>
                        <td>{$row['Alamat']}</td>
                        <td>{$row['Email']}</td>
                        <td>
                            <a href='edit_santri.php?id={$row['Id']}' class='btn btn-success'>Edit</a>
                            <a href='delete_santri.php?Id={$row['Id']}' class='btn btn-danger'>Hapus</a>
                        </td>
                    </tr>";
                    $no++;
                }
                ?>
            </tbody>
        </table>
    </div>

    <script>
        $(document).ready(function () {
            $('#dataSantri').DataTable();
        });
    </script>
</body>

</html>