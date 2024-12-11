<?php
// Konfigurasi koneksi database
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'pondok';

// Membuat koneksi ke database
$koneksi = new mysqli($host, $user, $password, $database);

// Cek koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Proses penghapusan data
$id = $_GET['id'] ?? null;

if ($id) {
    $sql = "DELETE FROM pelajaran WHERE id = $id";

    if ($koneksi->query($sql) === TRUE) {
        header("Location: data_pelajaran.php");
        echo "Data berhasil dihapus!";
    } else {
        echo "Error: " . $koneksi->error;
    }
}

$koneksi->close();
?>