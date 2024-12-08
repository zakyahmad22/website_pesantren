<?php
include 'sidebar.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Santri</title>

    <!-- CDN untuk DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    <style>
        /* Gaya dasar untuk body */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            overflow-x: hidden;
        }

        /* Mengatur container utama agar tidak tertutup sidebar */
        .container {
            margin-left: 250px;
            /* Sesuaikan dengan lebar sidebar */
            padding: 20px;
            width: calc(100% - 250px);
        }

        /* Header styling */
        h2.text-center {
            margin-bottom: 20px;
            font-size: 24px;
            font-weight: bold;
        }

        /* Tombol untuk tambah data */
        .btn {
            margin: 5px;
        }

        .table-wrapper {
            border: 1px solid #ddd;
            /* Border pembatas */
            overflow-y: auto;
            /* Scroll hanya vertikal */
            max-height: 400px;
            /* Tinggi maksimal area tabel */
            -webkit-overflow-scrolling: touch;
            /* Smooth scrolling */
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f4f4f4;
            font-weight: bold;
            position: sticky;
            /* Membuat header tetap di atas */
            top: 0;
            /* Posisi tetap */
            z-index: 2;
            /* Pastikan header tidak tertutupi */
        }


        /* Gaya untuk tombol dalam tabel */
        .btn-success {
            background-color: #28a745;
            color: white;
            text-decoration: none;
            padding: 5px 10px;
            border-radius: 4px;
        }

        .btn-danger {
            background-color: #dc3545;
            color: white;
            text-decoration: none;
            padding: 5px 10px;
            border-radius: 4px;
        }

        /* Responsif untuk tampilan mobile */
        @media (max-width: 768px) {
            .container {
                margin-left: 0;
                padding: 10px;
            }

            table {
                font-size: 12px;
                z-index: 500;
            }
        }
    </style>
</head>

<body>
    <div class="container mt-3">
        <h2 class="text-center">Data Santri Baru</h2>
        <a href="tambah_santri.php" class="btn btn-primary mb-3">+ Tambah Data</a>
        <div class="table-wrapper">
            <!-- Tabel data santri -->
            <table id="dataSantri" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Id Santri</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Koneksi ke database
                    include 'config.php';

                    // Query untuk mengambil semua data dari tabel santri
                    $query = "SELECT * FROM santri";
                    $result = mysqli_query($koneksi, $query);

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
                                    <a href='edit_santri.php?id={$row['Id']}' class='btn btn-success btn-sm'>Edit</a>
                                    <a href='delete_santri.php?Id={$row['Id']}' class='btn btn-danger btn-sm'>Hapus</a>
                                </td>
                                </tr>";
                        $no++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            // Inisialisasi DataTables
            $('#dataSantri').DataTable({
                paging: true,          // Aktifkan pagination
                searching: true,       // Aktifkan pencarian
                scrollCollapse: true,  // Collapse jika data sedikit
                language: {
                    search: "Cari Santri:", // Ubah label pencarian
                    lengthMenu: "Tampilkan _MENU_ data",
                    info: "Menampilkan _START_ hingga _END_ dari _TOTAL_ data",
                    infoFiltered: "(difilter dari _MAX_ total data)"
                }
            });
        });
    </script>
</body>

</html>