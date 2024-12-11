<?php
// Koneksi database
require_once 'config.php';
include 'cek_auth.php';
// include 'sidebar.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama_ekstrakulikuler'];
    $deskripsi = $_POST['deskripsi'];
    $jadwal_hari = $_POST['jadwal_hari'];
    $jadwal_waktu = $_POST['jadwal_waktu'];
    $pembimbing = $_POST['pembimbing'];

    var_dump($_POST);

    $sql = "INSERT INTO ekstrakulikuler (nama_ekstrakulikuler, deskripsi, jadwal_hari, jadwal_waktu, pembimbing)
            VALUES ('$nama', '$deskripsi', '$jadwal_hari', '$jadwal_waktu', '$pembimbing')";

    if ($koneksi->query($sql) === TRUE) {
        header('Location: ekstrakulikuler.php');
        exit();
    } else {
        echo "Error: " . $koneksi->error;
    }
}
?>

<?php
// var_dump($_SESSION);
// exit; 
if ($_SESSION['role'] !== 'admin') {
    echo "<div style=\"text-align:center\">";
    echo "Anda tidak berhak mengakses halaman ini.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Ekstrakulikuler</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <style>
        /* Reset default margin dan padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Set font untuk seluruh halaman */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            padding: 20px;
        }

        /* Wrapper untuk judul dan form */
        h1 {
            text-align: center;

            margin-bottom: 20px;
        }

        /* Form styling */
        form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
            margin-bottom: 8px;
            display: inline-block;
        }

        input[type="text"],
        input[type="email"],
        input[type="date"],
        textarea,
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }

        textarea {
            height: 100px;
            resize: vertical;
        }

        /* Button dan link */
        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 15px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 4px;
            /* width: 100%; */
        }

        button:hover {
            background-color: #45a049;
        }

        a {
            display: inline-block;
            text-align: center;
            color: #4CAF50;
            text-decoration: none;
            margin-top: 10px;
            font-size: 16px;
        }

        a:hover {
            text-decoration: underline;
        }

        /* Styling untuk link 'Batal' agar terlihat seperti tombol */
        a.batal-button {
            display: inline-block;
            text-align: center;
            color: white;
            background-color: #f44336;
            /* Merah */
            padding: 10px 15px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 4px;
            text-decoration: none;
            margin-top: 10px;

            transition: background-color 0.3s ease;
        }

        a.batal-button:hover {
            background-color: #e53935;
            /* Merah sedikit lebih gelap pada hover */
        }
    </style>

    <h1>Tambah Data Ekstrakulikuler</h1>

    <form method="POST" action="tambah_ekstra.php">
        <label>Nama Ekstrakulikuler:</label><br>
        <input type="text" name="nama_ekstrakulikuler" required><br>
        <!-- <label>Deskripsi:</label><br>
        <input type="text" name="deskripsi" required><br> -->
        <label for="deskripsi">Deskripsi:</label><br>
        <textarea id="deskripsi" name="deskripsi" rows="4" cols="50" placeholder=""
            required></textarea><br>
        <label>Jadwal Hari:</label><br>
        <input type="text" name="jadwal_hari"><br>
        <label>Jadwal Waktu:</label><br>
        <input type="text" name="jadwal_waktu" required><br>
        <label>Pembimbing:</label><br>
        <input type="text" name="pembimbing"><br>
        <button type="submit">Tambah</button>
        <a href="ekstrakulikuler.php" class="batal-button">Batal</a>
    </form>
</body>

</html>