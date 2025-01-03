<?php
include 'navbar.php';
include 'script.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Profile Pondok Modern Al-Muflihin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="image/logo.png" type="image/icon">
</head>

<div class="container-fluid background1">
    <div class="container text-center">
        <h1 class="display-7 font-family-sans-serif fw-bold">Kegiatan di Pondok</h1>
        <h2 class="display-5 font-family-sans-serif fw-bold">MODERN AL MUFLIHIN</h2>
        <h3 class="display-6 font-family-sans-serif fw-bold">Cirebon</h3>
    </div>
</div>

<!-- kegiatan awal -->

<style>
    .card {
        border-radius: 10px;
        /* Membulatkan sudut card */
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        /* Animasi transformasi dan bayangan */
    }

    .card:hover {
        transform: translateY(-10px);
        /* Card terangkat sedikit saat di-hover */
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        /* Bayangan lebih besar saat hover */
    }

    .card img {
        object-fit: cover;
        /* Menjaga agar gambar tetap proporsional dan memenuhi ruang card */
        height: 200px;
        /* Ukuran gambar tetap konsisten */
    }

    .card-body {
        padding: 20px;
        /* Memberikan padding pada konten dalam card */
    }

    .card-title {
        font-size: 1.2rem;
        /* Menyesuaikan ukuran font judul */
    }

    .card-text {
        font-size: 1rem;
        /* Ukuran font deskripsi */
    }

    .btn {
        margin-top: 10px;
        /* Memberi jarak antara teks dan tombol */
    }
</style>

<div class="container-fluid mt-4 pt-4 pb-3 fade-up">
    <div class="container text-center">
        <h2 class="display-6 font-family-sans-serif fw-bold" id="activity">Kegiatan</h2>
        <p>Pondok Pesantren Modern Al Muflihin Cirebon</p>
    </div>
</div>

<div class="container fade-up">
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card shadow-sm h-100">
                <img src="image/foto6.jpg" class="card-img-top" alt="foto6">
                <div class="card-body">
                    <h5 class="card-title">Kegiatan Belajar Mengajar</h5>
                    <p class="card-text">Proses pendidikan yang berlangsung di lingkungan pesantren, di mana santri dan
                        ustadz/ustadzah berinteraksi untuk mengembangkan ilmu agama.</p>
                    <a href="kbm.php" class="btn btn-success text-light">Read More</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm h-100">
                <img src="image/foto9.JPG" class="card-img-top" alt="Haul Almagfurlah">
                <div class="card-body">
                    <h5 class="card-title">Haul Almagfurlah</h5>
                    <p class="card-text">Memperingati haul Almagfurlah Kyai. M. Rohmat Romdlon, S.Ag sebagai pimpinan
                        Pondok Modern Al Muflihin.</p>
                    <a href="haul.php" class="btn btn-success text-light">Read More</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm h-100">
                <img src="image/foto7.jpg" class="card-img-top" alt="Perpustakaan">
                <div class="card-body">
                    <h5 class="card-title">Perpustakaan</h5>
                    <p class="card-text">Fasilitas yang menyediakan buku untuk mendukung proses belajar santri, termasuk
                        kitab kuning, Al-Qur'an, hadist, dan lain-lainnya.</p>
                    <a href="perpus.php" class="btn btn-success text-light">Read More</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm h-100">
                <img src="image/foto1.JPG" class="card-img-top" alt="Tari Kombinasi">
                <div class="card-body">
                    <h5 class="card-title">Tari Kombinasi</h5>
                    <p class="card-text">Biasanya melibatkan penggabungan gerakan tari tradisional dengan unsur-unsur
                        nilai keagamaan atau budaya lokal yang diajarkan di lingkungan pesantren.</p>
                    <a href="tarkom.php" class="btn btn-success text-light">Read More</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm h-100">
                <img src="image/kegiatan1.jpg" class="card-img-top" alt="Praktek Khitobah">
                <div class="card-body">
                    <h5 class="card-title">Praktek Khitobah</h5>
                    <p class="card-text">Kegiatan latihan berpidato atau berbicara di depan umum yang dilakukan oleh
                        santri untuk mengasah kemampuan komunikasi dan penyampaian dakwah.</p>
                    <a href="khitobah.php" class="btn btn-success text-light">Read More</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm h-100">
                <img src="image/mengajar.jpg" class="card-img-top" alt="Praktek Mengajar">
                <div class="card-body">
                    <h5 class="card-title">Praktek Mengajar</h5>
                    <p class="card-text">Kegiatan di mana santri atau calon pengajar di pesantren melakukan pembelajaran
                        di hadapan teman-teman mereka atau kelompok santri lainnya.</p>
                    <a href="praktek_mengajar.php" class="btn btn-success text-light">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- kegiatan akhir -->

<!-- footer awal -->

<footer class="bg-light text-white text-center py-4">
    <footer id="sticky-footer">
        <div class="container text-center">
            <p class="mb-0"></p>
    </footer>
    </div>
</footer>
<footer class="bg-success text-light py-5">
    <div class="container">
        <div class="row">
            <!-- Section 1: Info -->
            <div class="col-md-3 mb-4">
                <h5 class="text-uppercase fw-bold">Pondok Modern <br> Al Muflihin</h5>
                <p class="pt-3">
                    <a href="https://www.google.com/maps/place/Pondok+Pesantren+Al+Muflihin/@-6.8244713,108.7404479,17z/data=!3m1!4b1!4m6!3m5!1s0x2e6f0751d17aefcd:0x1c32cd5446d53dd9!8m2!3d-6.8244713!4d108.7430228!16s%2Fg%2F11g2s1stjx?entry=ttu&g_ep=EgoyMDI0MTIwOC4wIKXMDSoASAFQAw%3D%3D"
                        class="text-light mx-2 text-decoration-none" target="_blank">
                        <i class="fas fa-map-marker-alt fa-lg"></i>
                        Jl. Soekarno, Gebang Ilir, Kec. Gebang, Kab. Cirebon, Jawa Barat.
                    </a>
                </p>
                <!-- Social Media Icons -->
                <div class="mt-0">
                    <a href="https://twitter.com/almuflihin_crb" class="text-light mx-2"><i
                            class="fab fa-twitter fa-lg"></i></a>
                    <a href="https://www.tiktok.com/@almuflihin_cirebon?lang=id-id&is_from_webapp=1&sender_device=mobile&sender_web_id=7192400905366537729"
                        class="text-light mx-2"><i class="fab fa-tiktok fa-lg"></i></a>
                    <a href="https://www.facebook.com/Pesantrenalmuflihin" class="text-light mx-2"><i
                            class="fab fa-facebook fa-lg"></i></a>
                    <a href="https://www.instagram.com/almuflihin_cirebon?igshid=MzRlODBiNWFlZA%3D%3D"
                        class="text-light mx-2"><i class="fab fa-instagram fa-lg"></i></a>
                    <a href="https://web.whatsapp.com/+62 882-0060-16690" class="text-light mx-2" target="_blank"><i
                            class="fab fa-whatsapp fa-lg"></i></a>
                    <a href="https://www.youtube.com/@almuflihincirebon7929" class="text-light mx-2"><i
                            class="fab fa-youtube fa-lg"></i></a>
                </div>
            </div>
            <!-- Section 2: Menu -->
            <div class="col-md-2 mb-4">
                <h5 class="text-uppercase fw-bold">Menu</h5>
                <ul class="list-unstyled mt-3">
                        <li><a href="index.php" class="text-light text-decoration-none">Beranda</a></li>
                        <li><a href="profile.php" class="text-light text-decoration-none">Tentang</a></li>
                        <li><a href="activity.php" class="text-light text-decoration-none">Kegiatan</a></li>
                        <li><a href="pendaftaran.php" class="text-light text-decoration-none">Pendaftaran</a></li>
                        <li><a href="contact.php" class="text-light text-decoration-none">Kontak</a></li>
                        <li><a href="login.php" class="text-light text-decoration-none">Login</a></li>
                    </ul>
            </div>
            <!-- Section 3: Program -->
            <div class="col-md-2 mb-4">
                <h5 class="text-uppercase fw-bold">Program</h5>
                <ul class="list-unstyled mt-3">
                    <li><a href="#" class="text-light text-decoration-none">Pidato 3 Bahasa</a></li>
                    <li><a href="#" class="text-light text-decoration-none">Jurnalistik</a></li>
                    <li><a href="#" class="text-light text-decoration-none">Pramuka</a></li>
                    <li><a href="#" class="text-light text-decoration-none">Praktek Mengajar</a></li>
                    <li><a href="#" class="text-light text-decoration-none">Manasik Haji</a></li>
                </ul>
            </div>
            <!-- Section 4: Activity -->
            <div class="col-md-2 mb-4">
                <h5 class="text-uppercase fw-bold">Activity</h5>
                <ul class="list-unstyled mt-3">
                    <li><a href="kbm.php" class="text-light text-decoration-none">Kegiatan Belajar</a></li>
                    <li><a href="haul.php" class="text-light text-decoration-none">Haul Almagfurlah</a></li>
                    <li><a href="perpus.php" class="text-light text-decoration-none">Perpustakaan</a></li>
                    <li><a href="tarkom.php" class="text-light text-decoration-none">Tari Kombinasi</a></li>
                    <li><a href="khitobah.php" class="text-light text-decoration-none">Praktek Khitobah</a></li>
                </ul>
            </div>
            <!-- Section 5: Contact -->
            <div class="col-md-3 mb-4">
                <h5 class="text-uppercase fw-bold">Contact</h5>
                <ul class="list-unstyled mt-3">
                    <li>Email: <a href="https://ponpesalmuflihincirebon@gmail.com"
                            class="text-light text-decoration-none">ponpesalmuflihincirebon@gmail.com</a></li>
                    <li>Phone: <br>- Ust. Riswandi Bahuwa, S.H <br> 081234567890</li>
                    <li>- Ustadzah Fitri, S.H <br> 081234567890</li>
                </ul>
            </div>
        </div>
        <!-- Footer Bottom -->
        <hr class="text-light">
        <div class="text-center">
            <p class="mb-0">&copy; 2024 Pondok Modern Al Muflihin | Gebang Ilir, Gebang, Cirebon, Jawa Barat</p>
        </div>
    </div>
</footer>

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>