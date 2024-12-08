<?php
include 'config.php'; // config.php di-include untuk menyertakan file konfigurasi yang biasanya berisi koneksi ke database MySQL.


// Data diambil dari form HTML menggunakan metode POST

$Id = $_POST['id_santri'];
$Nama = $_POST['nama'];
$Alamat = $_POST['alamat'];
$Email = $_POST['email'];

// INSERT INTO digunakan untuk menambahkan data baru ke tabel
// VALUES: nilai yang dimasukkan berasal dari variabel PHP ($Id, $Nama, $Alamat, $Email)
// mysqli_query: menjalankan query ke database
// mysqli_close: digunakan untuk menutup koneksi database yang terbuka

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    var_dump($_POST); // Untuk melihat data yang dikirim
    // Lakukan proses query setelah ini
}


$sql = "INSERT INTO santri (id, nama, alamat, email) VALUES ('$Id', '$Nama', '$Alamat', '$Email')";
if (mysqli_query($koneksi, $sql)) {
    header("Location: pendaftaran.html");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);