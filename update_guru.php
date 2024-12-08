<?php
// Koneksi database
require_once 'config.php';

$id = $_GET['id'] ?? null;
$guru = null;

if ($id) {
    $guru = $koneksi->query("SELECT * FROM guru WHERE id = $id")->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['Id'];
    $nama = $_POST['Nama'];
    $email = $_POST['Email'];
    $telepon = $_POST['Telepon'];
    $alamat = $_POST['Alamat'];
    $tanggal_lahir = $_POST['Tanggal_lahir'];
    $jenis_kelamin = $_POST['Jenis_kelamin'];
    $mata_pelajaran = $_POST['Mata_pelajaran'];

    $sql = "UPDATE guru SET 
            Nama = '$nama', 
            Email = '$email', 
            Telepon = '$telepon', 
            Alamat = '$alamat', 
            Tanggal_lahir = '$tanggal_lahir', 
            Jenis_kelamin = '$jenis_kelamin', 
            Mata_pelajaran = '$mata_pelajaran'
            WHERE Id = $id";

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
    <title>Update Data Guru</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <style>
        /* styles.css */

        /* Umum */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
            color: #333;
        }

        /* Formulir */
        form {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        label {
            font-size: 1rem;
            margin-bottom: 8px;
            display: block;
            color: #555;
        }

        input[type="text"],
        input[type="email"],
        input[type="date"],
        textarea,
        select {
            width: 100%;
            padding: 10px;
            margin: 10px 0 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        textarea {
            height: 100px;
            resize: vertical;
        }

        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 12px 20px;
            text-align: center;
            font-size: 1rem;
            cursor: pointer;
            border-radius: 4px;
            /* width: 100%; */
            margin-top: 10px;
        }

        button:hover {
            background-color: #45a049;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 10px;
            color: #555;
            text-decoration: none;
            font-size: 0.9rem;
        }

        a:hover {
            text-decoration: underline;
            color: #333;
        }

        /* Responsivitas */
        @media (max-width: 600px) {
            form {
                padding: 15px;
            }

            button {
                font-size: 1.1rem;
            }
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

    <h1>Update Data Guru</h1>

    <?php if ($guru): ?>
        <form method="POST" action="update_guru.php">
            <input type="hidden" name="Id" value="<?= $guru['Id']; ?>">
            <label><b>Nama:</b></label><br>
            <input type="text" name="Nama" value="<?= htmlspecialchars($guru['Nama']); ?>" required><br>
            <label><b>Email:</b></label><br>
            <input type="email" name="Email" value="<?= htmlspecialchars($guru['Email']); ?>" required><br>
            <label><b>Telepon:</b></label><br>
            <input type="text" name="Telepon" value="<?= htmlspecialchars($guru['Telepon']); ?>"><br>
            <label><b>Alamat:</b></label><br>
            <textarea name="Alamat"><?= htmlspecialchars($guru['Alamat']); ?></textarea><br>
            <label><b>Tanggal Lahir:</b></label><br>
            <input type="date" name="Tanggal_lahir" value="<?= htmlspecialchars($guru['Tanggal_lahir']); ?>"><br>
            <label><b>Jenis Kelamin:</b></label><br>
            <select name="Jenis_kelamin" required>
                <option value="Laki-laki" <?= $guru['Jenis_kelamin'] == 'Laki-laki' ? 'selected' : ''; ?>>Laki-laki</option>
                <option value="Perempuan" <?= $guru['Jenis_kelamin'] == 'Perempuan' ? 'selected' : ''; ?>>Perempuan</option>
            </select><br>
            <label><b>Mata Pelajaran:</b></label><br>
            <input type="text" name="Mata_pelajaran" value="<?= htmlspecialchars($guru['Mata_pelajaran']); ?>"><br><br>
            <button type="submit">Update</button>
            <a href="data_guru.php" class="batal-button">Batal</a>
        </form>
    <?php else: ?>
        <p>Data tidak ditemukan.</p>
    <?php endif; ?>