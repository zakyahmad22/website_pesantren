<?php
// Koneksi database
require_once 'config.php';

$id = $_GET['id'] ?? null;
$pelajaran = null;

// var_dump($_POST);

if ($id) {
    $pelajaran = $koneksi->query("SELECT * FROM pelajaran WHERE id = $id")->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nama = $_POST['nama_pelajaran'];
    $kelas = $_POST['kelas'];
    $kode_pelajaran = $_POST['kode_pelajaran'];
    $jam_pelajaran = $_POST['jam_pelajaran'];
    $tingkat_pendidikan = $_POST['tingkat_pendidikan'];
    $guru_pengajar = $_POST['guru_pengajar'];

    $sql = "UPDATE pelajaran SET 
            nama_pelajaran = '$nama', 
            kelas = '$kelas', 
            kode_pelajaran= '$kode_pelajaran', 
            jam_pelajaran = '$jam_pelajaran', 
            tingkat_pendidikan = '$tingkat_pendidikan', 
            guru_pengajar = '$guru_pengajar' 
            WHERE id = $id";

    if ($koneksi->query(query: $sql) === TRUE) {
        header('Location: data_pelajaran.php');
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
    <title>Update Data Pelajaran</title>
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

    <h1>Update Data Pelajaran</h1>

    <?php if ($pelajaran): ?>
        <form method="POST" action="update_pelajaran.php">
            <input type="hidden" name="id" value="<?= $pelajaran['id']; ?>">
            <label><b>Nama Pelajaran:</b></label><br>
            <input type="text" name="nama_pelajaran" value="<?= htmlspecialchars($pelajaran['nama_pelajaran']); ?>"
                required><br>
            <label><b>Kelas:</b></label><br>
            <input type="text" name="kelas" value="<?= htmlspecialchars($pelajaran['kelas']); ?>" required><br>
            <label><b>Kode Pelajaran:</b></label><br>
            <input type="text" name="kode_pelajaran" value="<?= htmlspecialchars($pelajaran['kode_pelajaran']); ?>"><br>
            <label><b>Jam Pelajaran:</b></label><br>
            <input type="text" name="jam_pelajaran" value="<?= htmlspecialchars($pelajaran['jam_pelajaran']); ?>"><br>
            <label><b>Tingkat Pendidikan:</b></label><br>
            <input type="text" name="tingkat_pendidikan"
                value="<?= htmlspecialchars($pelajaran['tingkat_pendidikan']); ?>"><br>
            <label><b>Guru Pengajar:</b></label><br>
            <input type="text" name="guru_pengajar" value="<?= htmlspecialchars($pelajaran['guru_pengajar']); ?>"><br><br>
            <button type="submit">Update</button>
            <a href="data_pelajaran.php" class="batal-button">Batal</a>
        </form>
    <?php else: ?>
        <p>Data tidak ditemukan.</p>
    <?php endif; ?>