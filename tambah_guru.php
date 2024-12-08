<?php
// Koneksi database
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['Nama'];
    $email = $_POST['Email'];
    $telepon = $_POST['Telepon'];
    $alamat = $_POST['Alamat'];
    $tanggal_lahir = $_POST['Tanggal_lahir'];
    $jenis_kelamin = $_POST['Jenis_kelamin'];
    $mata_pelajaran = $_POST['Mata_pelajaran'];

    $sql = "INSERT INTO guru (Nama, Email, Telepon, Alamat, Tanggal_lahir, Jenis_kelamin, Mata_pelajaran)
            VALUES ('$nama', '$email', '$telepon', '$alamat', '$tanggal_lahir', '$jenis_kelamin', '$mata_pelajaran')";

    if ($koneksi->query($sql) === TRUE) {
        header('Location: data_guru.php');
        exit();
    } else {
        echo "Error: " . $koneksi->error;
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Guru</title>
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

    <h1>Tambah Data Guru</h1>

    <form method="POST" action="tambah_guru.php">
        <label>Nama:</label><br>
        <input type="text" name="Nama" required><br>
        <label>Email:</label><br>
        <input type="email" name="Email" required><br>
        <label>Telepon:</label><br>
        <input type="text" name="Telepon"><br>
        <label>Alamat:</label><br>
        <textarea name="Alamat"></textarea><br>
        <label>Tanggal Lahir:</label><br>
        <input type="date" name="Tanggal_lahir"><br>
        <label>Jenis Kelamin:</label><br>
        <select name="Jenis_kelamin" required>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select><br>
        <label>Mata Pelajaran:</label><br>
        <input type="text" name="Mata_pelajaran"><br><br>
        <button type="submit">Tambah</button>
        <a href="data_guru.php" class="batal-button">Batal</a>
        <!-- <a href="data_guru.php">Batal</a> -->
    </form>
</body>

</html>