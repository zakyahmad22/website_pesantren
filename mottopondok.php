<?php
include 'navbar.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Profile Pondok Modern Al-Muflihin</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="styles.css">
<link rel="icon" href="image/logo.png" type="image/icon">

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



    <!-- motto pondok awal -->
    <div class="container-fluid mt-5 pt-5 pb-2">
        <div class="container">
            <div class="clearfix pt-5">
                <h1 class="font-family-sans-serif fw-bold fs-2">Motto Pondok</h1>
                <p style="text-align: justify;">
                    Pendidikan Pondok Modern Darussalam Gontor menekankan pada pembentukan pribadi mukmin muslim yang
                    berbudi tinggi,
                    berbadan sehat, berpengetahuan luas dan berpikiran bebas. Kriteria atau sifat-sifat utama ini
                    merupakan moto pendidikan
                    di Pondok Modern Darussalam Gontor.
                </p>
                <img src="image/foto4.JPG" class="rounded-4" alt="foto4" width="800" height="400">
                <h3 class="font-family-sans-serif fw-bold pt-5 fs-4">Motto Pondok dalam kehidupan Pondok Modern
                    Al-Muflihin:</h3>
                <h1 class="font-family-sans-serif fs-5">1. Berbudi tinggi</h1>
                <p style="text-align: justify;">Berbudi tinggi merupakan landasan paling utama yang ditanamkan oleh
                    Pondok ini kepada seluruh
                    santrinya dalam semua
                    tingkatan; dari yang paling rendah sampai yang paling tinggi. Realisasi penanaman moto ini dilakukan
                    melalui seluruh
                    unsur pendidikan yang ada.</p>
                <h2 class="font-family-sans-serif fs-5">2. Berbadan Sehat</h2>
                <p style="text-align: justify;">Tubuh yang sehat adalah sisi lain yang dianggap penting dalam pendidikan
                    di Pondok ini. Dengan tubuh
                    yang sehat para
                    santri akan dapat melaksanakan tugas hidup dan beribadah dengan sebaik-baiknya. Pemeliharaan
                    kesehatan dilakukan melalui
                    berbagai kegiatan olahraga, dan bahkan ada olahraga rutin yang wajib diikuti oleh seluruh santri
                    sesuai dengan jadwal
                    yang telah ditetapkan.</p>
                <h3 class="font-family-sans-serif fs-5">3. Berpengetahuan Luas</h3>
                <p style="text-align: justify;">Para santri di Pondok ini dididik melalui proses yang telah dirancang
                    secara sistematik untuk dapat
                    memperluas wawasan
                    dan pengetahuan mereka. Santri tidak hanya diajari pengetahuan, lebih dari itu mereka diajari cara
                    belajar yang dapat
                    digunakan untuk membuka gudang pengetahuan. Kyai sering berpesan bahwa pengetahuan itu luas, tidak
                    terbatas, tetapi
                    tidak boleh terlepas dari berbudi tinggi, sehingga seseorang itu tahu untuk apa ia belajar serta
                    tahu prinsip untuk apa
                    ia manambah ilmu.</p>
                <h4 class="font-family-sans-serif fs-5">4. Berpikiran Bebas</h4>
                <p style="text-align: justify;">Berpikiran bebas tidaklah berarti bebas sebebas-bebasnya (liberal).
                    Kebebasan di sini tidak boleh
                    menghilangkan prinsip,
                    teristimewa prinsip sebagai muslim mukmin. Justru kebebasan di sini merupakan lambang kematangan dan
                    kedewasaan dari
                    hasil pendidikan yang telah diterangi petunjuk ilahi (hidayatullah). Moto ini ditanamkan sesudah
                    santri memiliki budi
                    tinggi atau budi luhur dan sesudah ia berpengetahuan luas.</p>
            </div>
        </div>
    </div>
    <!-- motto pondok akhir -->

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
                        <a href="https://www.google.com/maps?q=Jl.+Soekarno,+Gebang+Ilir,+Kec.+Gebang,+Kab.+Cirebon,+Jawa+Barat"
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