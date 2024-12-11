<?php
// Koneksi database
require_once 'config.php';

// Ambil parameter ID dari URL
$id = $_GET['id'] ?? null;
$ekstrakulikuler = null;

// Periksa apakah parameter ID ada
if ($id) {
    $stmt = $koneksi->prepare("SELECT * FROM ekstrakulikuler WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $ekstrakulikuler = $result->fetch_assoc();
    $stmt->close();
}

// Proses form ketika data di-submit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nama = $_POST['nama_ekstrakulikuler'];
    $deskripsi = $_POST['deskripsi'];
    $jadwal_hari = $_POST['jadwal_hari'];
    $jadwal_waktu = $_POST['jadwal_waktu'];
    $pembimbing = $_POST['pembimbing'];

    $stmt = $koneksi->prepare("UPDATE ekstrakulikuler SET 
        nama_ekstrakulikuler = ?, 
        deskripsi = ?, 
        jadwal_hari = ?, 
        jadwal_waktu = ?, 
        pembimbing = ? 
        WHERE id = ?");
    $stmt->bind_param("sssssi", $nama, $deskripsi, $jadwal_hari, $jadwal_waktu, $pembimbing, $id);

    if ($stmt->execute()) {
        $stmt->close();
        header('Location: ekstrakulikuler.php');
        exit();
    } else {
        echo "Error: " . $stmt->error;
        $stmt->close();
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data Ekstrakulikuler</title>
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

        <h1>Update Data Ekstrakulikuler</h1>

    <?php if ($ekstrakulikuler): ?>
            <form method="POST" action="">
                <input type="hidden" name="id" value="<?= htmlspecialchars($ekstrakulikuler['id']); ?>">
                <label><b>Nama Ekstrakulikuler:</b></label><br>
                <input type="text" name="nama_ekstrakulikuler"
                    value="<?= htmlspecialchars($ekstrakulikuler['nama_ekstrakulikuler']); ?>" required><br>
                <label><b>Deskripsi:</b></label><br>
                <input type="text" name="deskripsi" value="<?= htmlspecialchars($ekstrakulikuler['deskripsi']); ?>" required><br>
                <label><b>Jadwal Hari:</b></label><br>
                <input type="text" name="jadwal_hari" value="<?= htmlspecialchars($ekstrakulikuler['jadwal_hari']); ?>"><br>
                <label><b>Jadwal Waktu:</b></label><br>
                <input type="text" name="jadwal_waktu" value="<?= htmlspecialchars($ekstrakulikuler['jadwal_waktu']); ?>"><br>
                <label><b>Pembimbing:</b></label><br>
                <input type="text" name="pembimbing" value="<?= htmlspecialchars($ekstrakulikuler['pembimbing']); ?>"><br>
                <button type="submit">Update</button>
                <a href="ekstrakulikuler.php" class="batal-button">Batal</a>
            </form>
        <?php else: ?>
            <p>Data tidak ditemukan.</p>
        <?php endif; ?>