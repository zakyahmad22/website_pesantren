<?php
include 'cek_auth.php';
include 'sidebar.php';
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Guru</title>

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
            background-color: #f4f4f9;
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
            /* color: #4CAF50; */
        }

        /* Tombol untuk tambah data */
        .btn-primary {
            margin: 5px;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            font-size: 16px;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .table-wrapper {
            border: 1px solid #ddd;
            overflow-y: auto;
            max-height: 400px;
            -webkit-overflow-scrolling: touch;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f4f4f4;
            font-weight: bold;
            position: sticky;
            top: 0;
            z-index: 2;
        }

        /* Gaya untuk tombol dalam tabel */
        .btn-success {
            background-color: #28a745;
            color: white;
            text-decoration: none;
            padding: 5px 10px;
            border-radius: 4px;
        }

        .btn-success:hover {
            background-color: #218838;
        }

        .btn-danger {
            background-color: #dc3545;
            color: white;
            text-decoration: none;
            padding: 5px 10px;
            border-radius: 3px;
        }

        .btn-danger:hover {
            background-color: #c82333;
        }

        /* Menambahkan styling untuk button-group agar tombol berada di kiri dan kanan */
        .btn-group {
            display: flex;
            justify-content: space-between;
        }

        .btn-group .btn {
            width: 48%;
        }

        /* Responsif untuk tampilan mobile */
        @media (max-width: 768px) {
            .container {
                margin-left: 0;
                padding: 10px;
            }

            table {
                font-size: 12px;
            }

            /* Menyesuaikan tombol di tampilan mobile */
            .btn-group .btn {
                width: 100%;
                margin-bottom: 5px;
            }
        }
    </style>
</head>

<body>
    <div class="container mt-3">
        <h2 class="text-center">Data Guru</h2>
        <a href="tambah_guru.php" class="btn-primary mb-3">+ Tambah Data Guru</a>
        <div class="table-wrapper mt-4">
            <!-- Tabel data guru -->
            <table id="dataGuru" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Telepon</th>
                        <th>Alamat</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Mata Pelajaran</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Koneksi ke database
                    require_once 'config.php';

                    // Query untuk mengambil semua data dari tabel guru
                    $sql = "SELECT * FROM guru";
                    $result = $koneksi->query($sql);

                    if ($result->num_rows > 0) {
                        $no = 1;
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>
                                <td>{$no}</td>
                                <td>" . htmlspecialchars($row['Nama']) . "</td>
                                <td>" . htmlspecialchars($row['Email']) . "</td>
                                <td>" . htmlspecialchars($row['Telepon']) . "</td>
                                <td>" . htmlspecialchars($row['Alamat']) . "</td>
                                <td>" . htmlspecialchars($row['Tanggal_lahir']) . "</td>
                                <td>" . htmlspecialchars($row['Jenis_kelamin']) . "</td>
                                <td>" . htmlspecialchars($row['Mata_pelajaran']) . "</td>
                                <td>
                                    <div class='btn-group'>
                                        <a href='update_guru.php?id={$row['Id']}' class='btn-success btn-sm'>Edit</a>
                                        <a href='delete_guru.php?id={$row['Id']}' class='btn-danger btn-sm' onclick=\"return confirm('Yakin ingin menghapus?');\">Hapus</a>
                                    </div>
                                </td>
                            </tr>";
                            $no++;
                        }
                    } else {
                        echo "<tr><td colspan='9'>Tidak ada data guru.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            // Inisialisasi DataTables
            $('#dataGuru').DataTable({
                paging: true,          // Aktifkan pagination
                searching: true,       // Aktifkan pencarian
                scrollCollapse: true,  // Collapse jika data sedikit
                language: {
                    search: "Cari Guru:", // Ubah label pencarian
                    lengthMenu: "Tampilkan _MENU_ data",
                    info: "Menampilkan _START_ hingga _END_ dari _TOTAL_ data",
                    infoFiltered: "(difilter dari _MAX_ total data)"
                }
            });
        });
    </script>
</body>

</html>