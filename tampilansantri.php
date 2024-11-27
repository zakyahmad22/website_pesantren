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
        /* Tema dark untuk body */
        body {
            background-color: #121212;
            /* Warna latar hitam */
            color: #ffffff;
            /* Teks putih */
        }

        .container {
            background-color: #1f1f1f;
            /* Latar kontainer abu gelap */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            /* Efek bayangan */
        }

        table.dataTable {
            color: #ffffff;
            /* Warna teks tabel */
            background-color: #2a2a2a;
            /* Latar belakang tabel */
        }

        table.dataTable thead th {
            background-color: #333333;
            /* Latar belakang header tabel */
            color: #ffffff;
            /* Warna teks header */
        }

        table.dataTable tbody tr {
            background-color: #2a2a2a;
            /* Latar belakang baris tabel */
        }

        table.dataTable tbody tr:hover {
            background-color: #444444;
            /* Warna baris tabel saat hover */
            color: #121212;
        }

        /* Tetap gelap saat diklik */
        table.dataTable tbody tr:focus,
        table.dataTable tbody tr:active,
        table.dataTable tbody td:focus,
        table.dataTable tbody td:active {
            background-color: #444444 !important;
            color: #ffffff !important;
        }

        /* Mencegah teks di kolom tabel berubah warna */
        table.dataTable tbody td {
            user-select: none;
            /* Mencegah seleksi teks */
        }

        /* Warna tetap untuk tautan */
        a {
            color: #ffffff;
        }

        a:hover {
            color: #121212;
            /* Warna biru saat hover */
            text-decoration: none;
        }

        /* Tombol dengan tema gelap */
        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .btn-success {
            background-color: #28a745;
            border: none;
        }

        .btn-danger {
            background-color: #dc3545;
            border: none;
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