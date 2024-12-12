<?php
$servername = "minforma.my.id"; // Nama server database, dalam hal ini adalah localhost, yang berarti servernya berada di komputer yang sama dengan kode ini dijalankan.
$username = "minx6158"; // Username untuk mengakses database, yaitu root (akun default untuk MySQL).
$password = "3mWu4aqNzEFQ81"; // Password untuk username tersebut Kosong (""), karena akun root di komputer lokal biasanya tidak memiliki password secara default.
$databasename = "pondok"; // Nama database yang digunakan, yaitu pondok.

// Membuat koneksi
// new mysqli, untuk membuat instance dari kelas MySQLi untuk menginisialisasi koneksi ke database

$koneksi = new mysqli($servername, $username, $password, $databasename);

// Memeriksa koneksi
// $koneksi->connect_error, Memeriksa apakah terjadi kesalahan ketika membuat koneksi.
// die, fungsinya untuk menghentikan eksekusi skrip dan mencetak pesan kesalahan "Connection failed: [pesan error]"

if ($koneksi->connect_error) {
    die("Connection failed: " . $koneksi->connect_error);   
}

?>