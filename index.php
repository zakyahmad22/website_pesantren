<?php
include 'navbar.php';

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

<body>

    <style>
        /* Efek hover untuk semua teks di navbar */
        .navbar-nav .nav-link:hover,
        .navbar-nav .dropdown-toggle:hover,
        .dropdown-menu .dropdown-item:hover {
            color: #343434 !important;
            /* Warna teks berubah menjadi hitam */
            /* text-decoration: underline; */
            /* Garis bawah muncul saat hover */
            transition: color 0.3s ease, text-decoration 0.3s ease;
            /* Efek transisi */
        }

        /* Hover khusus pada dropdown menu */
        .dropdown-menu .dropdown-item:hover {
            background-color: #e1e1e1;
            /* Latar belakang biru saat hover */
            color: #ffffff;
            /* Warna teks menjadi putih */
            transition: background-color 0.3s ease, color 0.3s ease;
            /* Transisi lembut */
        }
    </style>
    <!-- navbar start -->

    <!-- navbar-expand-lg, akan menyesuaikan tampilan navbar sesuai dengan ukuran layar -->
    <!-- fixed-top, untuk menetapkan posisi navbar ketika di scrol ke atas -->
    <!-- div class, tag HTML yang digunakan untuk membuat elemen atau kontainer di dalam halaman web -->
    <!-- class, atribut yang menambahkan kelas CSS tertentu pada elemen tersebut -->
    <!-- container, kelas umum yang digunakan untuk mengatur lebar dan tata letak konten pada halaman web -->
    <!-- a href, tag yang digunakan untuk membuat hyperlink, yaitu tautan yang dapat diklik untuk membuka halaman atau dokumen lain -->
    <!-- expanded diperluas, collapse ditutup -->

    <nav class="navbar navbar-expand-lg bg-success fixed-top shadow-lg">
        <div class="container">
            <!-- width itu lebar, height itu tinggi -->
            <!-- src, source untuk menentukan sumber atau lokasi gambar yang akan ditampilkan -->
            <!-- alt, teks alternatif yang menjelaskan gambar -->
            <a href="index.html" class="navbar-expand-lg">
                <a href="#top">
                    <img src="image/logo1.png" alt="logo1" width="150" height="65">
                </a>
            </a>
            <!-- navbar-toogler, kelas bootstrap yang digunakan pada tombol button untuk mengaktifkan fitur
            "collapse" atau buka-tutup menu pada navbar, terutama pada tampilan layar kecil seperti ponsel -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- collapse untuk membuat konten di dalam elemen tersebut untuk diperluas (expanded) atau ditutup (collapsed) secara dinamis -->
            <!-- ms-auto digunakan untuk mendorong elemen ke kanan -->
            <!-- ms itu margin-start -->
            <!-- nav link ketika dipencet maka akan menuju sesuai dengan nama link nya (responsif) -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link text-light" aria-current="page" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light text-decoration-none" href="profile.php">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="activity.php">Kegiatan</a>
                    </li>
                    <div class="dropdown nav-item">
                        <a class="dropdown-toggle nav-link text-light text-decoration-none" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Pendaftaran
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="pendaftaran.php">Info Pendaftaran</a></li>
                            <li><a class="dropdown-item" href="tesujian.php">Tes Ujian</a></li>
                        </ul>
                    </div>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="contact.php">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="login.php">Login</a>
                    </li>
                    <!-- <button type="button" class="btn btn-outline-light">Login Admin</button> -->
                </div>
            </div>
        </div>
    </nav>
    <!-- navbar end -->

    <!-- background -->
    <div class="container-fluid background">
        <div class="container text-center">
            <h1 class="display-7 font-family-sans-serif fw-bold">Pondok Pesantren</h1>
            <h2 class="display-5 font-family-sans-serif fw-bold text-light">MODERN AL MUFLIHIN</h2>
            <h3 class="display-6 font-family-sans-serif fw-bold pb-3">Cirebon</h3>
            <a href="form.php">
                <button type="button" class="btn btn-success text-light">Daftar Sekarang</button>
            </a>
        </div>
    </div>
    <!-- background End-->

    <!-- bagian penerimaan awal -->

    <!-- pt digunakan untuk memberi jarak di bagian atas suatu elemen -->
    <!-- pb digunakan untuk memberikan padding-bottom jarak bagian bawah, jarak teks profile dengan navbar -->
    <!-- mt digunakan untuk memberikan margin-top jarak bagian atas, jara teks profile dengan foto background -->
    <!-- ps padding start untuk memberikan jarak dari sisi kiri -->
    <!-- col-md-5 yaitu kelas yang digunakan untuk menentukan lebar kolom dalam sistem grid Bootstrap -->
    <!-- fw-bold, font weight digunakan untuk membuat teks menjadi tebal -->
    <!-- id, untuk memberikan pengenal unik pada elemen -->

    <!-- <nav class="navbar bg-warning pb-3"> -->

    <div class="container mt-5 text-left">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h4 class="display-6 font-family-sans-serif fw-bold pt-5" id="profile">Penerimaan</h4>
                <h5 class="display-6 font-family-sans-serif fw-bold">Santri Baru Tahun 2024</h5>
                <p style="text-align: justify;">Al Muflihin adalah Pondok Pesantren Modern dengan manhaj Darunnajah dan
                    Gontor yang menyelenggarakan pendidikan untuk mengembangkan seluruh potensi para santri secara
                    menyeluruh meliputi pembinaan skill, kecerdasan, intelektual, kematangan emosi, dan sikap yang taat
                    kepada Allah SWT.</p>
            </div>
            <div class="col-lg-6 text-center">
                <img src="image/foto8.jpg" alt="foto8" width="400" height="250" class="rounded-3 class=" img-fluid
                    rounded-3">
            </div>
        </div>

        <div class="container-fluid pt-4 pb-4">
            <div class="d-flex flex-wrap justify-content-start">
                <a href="profile.php" class="me-3">
                    <button type="button" class="btn btn-success rounded-4 fs-6 px-5 text-light">Profile</button>
                </a>
                <a href="pendaftaran.php">
                    <button type="button" class="btn btn-outline-success border-1 rounded-4 fs-6 px-4">Info
                        Pendaftaran</button>
                </a>
            </div>
        </div>
    </div>
    <!-- bagian penerimaan akhir -->

    <!-- profile awal -->

    <div class="container-fluid profile pt-5 pb-5">
        <div class="container text-center">
            <h1 class="display-6 font-family-sans-serif fw-bold">Falsafah Pondok</h1>
            <p>Al Muflihin adalah Pondok Pesantren Modern dengan manhaj Darunnajah dan Gontor yang
                menyelenggarakan pendidikan untuk
                megembangkan seluruh poetensi para santri secara menyeluruh.</p>
            <div class="row pt-4">
                <div class="col-md-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                        class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16">
                        <path
                            d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1z" />
                    </svg>
                    <h2 class="display-7 mt-3 font-family-sans-serif fw-bold">Panca Jiwa</h2>
                    <p>Seluruh kehidupan di Pondok Modern Al Muflihin
                        didasarkan pada nilai-nilai kehidupan dalam
                        Panca Jiwa.</p>
                    <a href="pancajiwa.php">
                        <button type="button" class="btn btn-success text-light">Baca Selengkapnya</button>
                    </a>
                </div>
                <div class="col-md-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                        class="bi bi-chat-square-text-fill" viewBox="0 0 16 16">
                        <path
                            d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-2.5a1 1 0 0 0-.8.4l-1.9 2.533a1 1 0 0 1-1.6 0L5.3 12.4a1 1 0 0 0-.8-.4H2a2 2 0 0 1-2-2zm3.5 1a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1zm0 2.5a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1zm0 2.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1z" />
                    </svg>
                    <h2 class="display-7 mt-3 font-family-sans-serif fw-bold">Motto Pondok</h2>
                    <p>Pendidikan Pondok Modern Al Muflihin
                        menekankan pada pembentukan pribadi mukmin
                        muslim.
                    </p>
                    <a href="mottopondok.php">
                        <button type="button" class="btn btn-success text-light">Baca Selengkapnya</button>
                    </a>
                </div>
                <div class="col-md-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                        class="bi bi-bag-dash-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0M6 9.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1z" />
                    </svg>
                    <h2 class="display-7 mt-3 font-family-sans-serif fw-bold">Visi & Misi</h2>
                    <p>Panca Jangka merupakan program kerja Pondok untuk
                        mewujudkan upaya pengembangan dan pemajuan.</p>
                    <a href="visimisi.php">
                        <button type="button" class="btn btn-success text-light">Baca Selengkapnya</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- <hr class="my-4" style="border: 2px solid #333;"> -->

    <!-- profile akhir -->

    <!-- activity awal -->

    <div class="container-fluid pt-5 pb-5">
        <div class="container text-center">
            <h2 class="display-6 font-family-sans-serif fw-bold" id="activity">Pusat Informasi</h2>
            <p>Pendidikan Pondok Modern Al Muflihin
                menekankan pada pembentukan pribadi mukmin
                muslim.</p>
            <div class="row pt-4 gx-4 gy-4">
                <div class="col-md-4">
                    <div class="card crop-img" style="width: 18rem;">
                        <img src="image/ujian4.jpg" class="card-img-top" alt="foto1" width="200" height="200">
                        <div class="card-body">
                            <h5 class="card-title">Pendaftaran & Ujian</h5>
                            <p class="card-text">Informasi Pendaftaran Santri Baru Pondok Modern
                                Al Muflihin</p>
                            <a href="ujian.php" class="btn btn-success text-light">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card crop-img" style="width: 18rem;">
                        <img src="image/foto6.jpg" class="card-img-top" alt="foto1" width="200" height="200">
                        <div class="card-body">
                            <h5 class="card-title">SMP Al Muflihin</h5>
                            <p class="card-text">Informasi Pendaftaran Santri Baru Pondok Modern
                                Al Muflihin</p>
                            <a href="smp.php" class="btn btn-success text-light">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card crop-img" style="width: 18rem;">
                        <img src="image/foto11.JPG" class="card-img-top" alt="foto11" width="200" height="200">
                        <div class="card-body">
                            <h5 class="card-title">MA Al Muflihin</h5>
                            <p class="card-text">Informasi Pendaftaran Santri Baru Pondok Modern
                                Al Muflihin</p>
                            <a href="ma.php" class="btn btn-success text-light">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- activity akhir -->

    <!-- tentang awal -->

    <div class="container-fluid pt-4 pb-5">
        <div class="container">
            <h2 class="display-6 text-center font-family-sans-serif fw-bold" id="about">About</h2>
            <p class="text-center">
                Pondok Pesantren Modern Al Muflihin Gebang Ilir, Gebang, Cirebon, Jawa Barat
            </p>
            <div class="clearfix pt-5">
                <img src="image/foto9.JPG" class="col-md-6 float-md-end mb-3 crop-img rounded-4" width="300"
                    height="300">
                <div class="col-md-5">
                    <p style="text-align: justify;">
                        Al Muflihin adalah Pondok Pesantren Modern dengan manhaj Darunnajah dan Gontor yang
                        menyelenggarakan pendidikan untuk
                        megembangkan seluruh poetensi para santri secara menyeluruh meliputi pembinaan skill,
                        keserdasan, intelektual,
                        kematangan emosi, dan sikap yang taat kepada Allah SWT. Al Muflihin adalah Pondok Pesantren
                        Modern
                        dengan manhaj Darunnajah dan Gontor yang
                        menyelenggarakan pendidikan untuk
                        megembangkan seluruh poetensi para santri secara menyeluruh meliputi pembinaan skill,
                        keserdasan, intelektual,
                        kematangan emosi, dan sikap yang taat kepada Allah SWT.
                        Al Muflihin adalah Pondok Pesantren Modern dengan manhaj Darunnajah dan Gontor yang
                        menyelenggarakan pendidikan untuk
                        megembangkan seluruh poetensi para santri secara menyeluruh meliputi pembinaan skill,
                        keserdasan, intelektual,
                        kematangan emosi, dan sikap yang taat kepada Allah SWT. Al Muflihin adalah Pondok Pesantren
                        Modern
                    </p>
                </div>
                <a href="profile">
                    <a
                        href="https://linktr.ee/PonpesAlMuflihin?fbclid=PAZXh0bgNhZW0CMTEAAabDU66tspVrauWdqlMfGioZyxTRvANI6OMDwmlOztI1cBWVb8tOVZA1Tmg_aem_LPNlcE5n85TAWALiMnfc5w">
                        <button type="button" class="btn btn-success border-1 rounded-4 fs-6 px-4 text-light">Social
                            Media</button>
                    </a>
                </a>
            </div>
        </div>
    </div>

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
                        <li><a href="home.php" class="text-light text-decoration-none">Home</a></li>
                        <li><a href="profile.php" class="text-light text-decoration-none">Profile</a></li>
                        <li><a href="activity.php" class="text-light text-decoration-none">Activity</a></li>
                        <li><a href="contact.php" class="text-light text-decoration-none">Contact</a></li>
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

    <!-- footer akhir -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>