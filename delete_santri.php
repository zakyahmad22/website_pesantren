<?php
// Sambungkan ke database
// Konfigurasi koneksi ke database

include 'config.php';

// Periksa apakah parameter 'id' dikirimkan
// isset($_GET['Id']): memeriksa apakah parameter Id dikirim melalui URL menggunakan metode GET
// !empty($_GET['Id']): memastikan nilai Id yang dikirim tidak kosong
// Parameter: variabel yang digunakan untuk menyediakan input ke fungsi, metode, atau skrip agar dapat menjalankan tugas tertentu
// Fungsi utama parameter yaitu menyediakan data untuk di proses
// Fungsi isset yaitu memastikan Variabel atau Parameter Ada
// Fungsi $GET memeriksa apakah data dikirim melalui metode GET atau POST

if (isset($_GET['Id']) && !empty($_GET['Id'])) {
    $Id = $_GET['Id'];  

    // Amankan ID santri

    $Id = mysqli_real_escape_string($koneksi, $Id);

    // Query untuk menghapus data berdasarkan ID santri
    
    $query = "DELETE FROM santri WHERE Id = '$Id'";

    if (mysqli_query($koneksi, $query)) {
        // Redirect kembali ke halaman utama setelah berhasil menghapus data
        header("Location: data.php"); 
        exit(); // Pastikan skrip berhenti setelah redirect
    } else {
        echo "Error menghapus data: " . mysqli_error(mysql: $koneksi);
    }
} else {
    echo "ID santri tidak valid.";
}

// Tutup koneksi
mysqli_close($koneksi);
?>