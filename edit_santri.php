<?php
include 'config.php';

// Cek apakah id ada di URL
// isset($_GET['id']): memastikan bahwa parameter id ada di URL
// 

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // Ambil data santri berdasarkan id
    $result = mysqli_query($koneksi, "SELECT * FROM santri WHERE id=$id");
    $row = mysqli_fetch_assoc($result);
} else {
    // Jika id tidak ada, arahkan ke halaman data santri
    header("Location: datasantri.php");
    exit;
}

// Cek jika form telah disubmit untuk melakukan update
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $Id = $_POST['Id'];
    $Nama = $_POST['Nama'];
    $Alamat = $_POST['Alamat'];
    $Email = $_POST['Email'];

    // Query untuk memperbarui data santri
    $query = "UPDATE santri SET Id='$Id', Nama='$Nama', Alamat='$Alamat', Email='$Email' WHERE id='$id'";

    // Eksekusi query
    if (mysqli_query($koneksi, $query)) {
        // Jika berhasil, arahkan kembali ke halaman data santri
        header("Location: tampilansantri.php");
        exit;
    } else {
        // Jika gagal, tampilkan pesan error
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Santri</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="icon" href="image/logo.png" type="image/icon">

</head>

<body>

    <style>
        /* Tampilan gelap untuk seluruh halaman */
        body {
            background-color: #121212;
            /* Latar belakang hitam */
            color: #ffffff;
            /* Teks putih */
        }

        .container {
            background-color: #1f1f1f;
            /* Latar belakang kontainer */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            /* Efek bayangan */
        }

        .form-control {
            background-color: #2a2a2a;
            /* Latar belakang input */
            color: #ffffff;
            /* Teks input */
            border: 1px solid #444444;
            /* Border abu gelap */
        }

        .form-control:focus {
            background-color: #333333;
            /* Latar belakang saat fokus */
            color: #ffffff;
            border-color: #007bff;
            /* Warna biru saat fokus */
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>

    <div class="container mt-5">
        <h2 class="text-center">Edit Data Santri Baru</h2>
        <form action="edit_santri.php?id=<?php echo $id; ?>" method="POST">
            <div class="form-group">
                <label>Id Santri</label>
                <input type="text" name="Id" class="form-control" value="<?php echo $row['Id']; ?>" required>
            </div>
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="Nama" class="form-control" value="<?php echo $row['Nama']; ?>" required>
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="Alamat" class="form-control" value="<?php echo $row['Alamat']; ?>" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="Email" class="form-control" value="<?php echo $row['Email']; ?>" required>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>

</html>