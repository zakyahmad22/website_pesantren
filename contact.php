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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
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

    <!-- <div class="container-fluid background2">
        <div class="container text-center">
            <h1 class="display-7 font-family-sans-serif fw-bold">Info Pendaftaran</h1>
            <h2 class="display-5 font-family-sans-serif fw-bold text-warning">Hubungi Contact Person</h2>
        </div>
    </div> -->

    <!-- kontak awal -->

    <div class="container-fluid mt-5 pt-5 pb-5">
        <div class="container text-center">
            <h2 class="display-6 font-family-sans-serif fw-bold" id="contact">Hubungi Kami</h2>
            <p>Al Muflihin adalah Pondok Pesantren Modern dengan manhaj Darunnajah dan Gontor yang menyelenggarakan
                pendidikan untuk
                megembangkan seluruh poetensi para santri secara menyeluruh meliputi pembinaan skill, keserdasan,
                intelektual,
                kematangan emosi, dan sikap yang taat kepada Allah SWT.</p>
            <div class="row pt-4 gx-4 gy-4">
                <div class="col-md-4 text-center tim">
                    <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" fill="currentColor"
                        class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                        <path fill-rule="evenodd"
                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                    </svg>
                    <h4>Lamine Yamal</h4>
                    <p>Web Desaigner</p>
                    <p>
                        <a href="" class="social">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-twitter" viewBox="0 0 16 16">
                                <path
                                    d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334q.002-.211-.006-.422A6.7 6.7 0 0 0 16 3.542a6.7 6.7 0 0 1-1.889.518 3.3 3.3 0 0 0 1.447-1.817 6.5 6.5 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.32 9.32 0 0 1-6.767-3.429 3.29 3.29 0 0 0 1.018 4.382A3.3 3.3 0 0 1 .64 6.575v.045a3.29 3.29 0 0 0 2.632 3.218 3.2 3.2 0 0 1-.865.115 3 3 0 0 1-.614-.057 3.28 3.28 0 0 0 3.067 2.277A6.6 6.6 0 0 1 .78 13.58a6 6 0 0 1-.78-.045A9.34 9.34 0 0 0 5.026 15" />
                            </svg>
                            </i></a>
                        <a href="" class="social">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-youtube" viewBox="0 0 16 16">
                                <path
                                    d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z" />
                            </svg>
                            </i></a>
                        <a href="" class="social">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-facebook" viewBox="0 0 16 16">
                                <path
                                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                            </svg>
                            </i></a>
                    </p>
                </div>
                <div class="col-md-4 text-center tim">
                    <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" fill="currentColor"
                        class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                        <path fill-rule="evenodd"
                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                    </svg>
                    <h4>Lionel Zakyy</h4>
                    <p>Programmer</p>
                    <p>
                        <a href="" class="social">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-twitter" viewBox="0 0 16 16">
                                <path
                                    d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334q.002-.211-.006-.422A6.7 6.7 0 0 0 16 3.542a6.7 6.7 0 0 1-1.889.518 3.3 3.3 0 0 0 1.447-1.817 6.5 6.5 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.32 9.32 0 0 1-6.767-3.429 3.29 3.29 0 0 0 1.018 4.382A3.3 3.3 0 0 1 .64 6.575v.045a3.29 3.29 0 0 0 2.632 3.218 3.2 3.2 0 0 1-.865.115 3 3 0 0 1-.614-.057 3.28 3.28 0 0 0 3.067 2.277A6.6 6.6 0 0 1 .78 13.58a6 6 0 0 1-.78-.045A9.34 9.34 0 0 0 5.026 15" />
                            </svg>
                            </i></a>
                        <a href="" class="social">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-youtube" viewBox="0 0 16 16">
                                <path
                                    d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z" />
                            </svg>
                            </i></a>
                        <a href="" class="social">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-facebook" viewBox="0 0 16 16">
                                <path
                                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                            </svg>
                            </i></a>
                    </p>
                </div>
                <div class="col-md-4 text-center tim">
                    <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" fill="currentColor"
                        class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                        <path fill-rule="evenodd"
                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                    </svg>
                    <h4>El-Dowsky</h4>
                    <p>Front End Developer</p>
                    <p>
                        <a href="" class="social">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-twitter" viewBox="0 0 16 16">
                                <path
                                    d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334q.002-.211-.006-.422A6.7 6.7 0 0 0 16 3.542a6.7 6.7 0 0 1-1.889.518 3.3 3.3 0 0 0 1.447-1.817 6.5 6.5 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.32 9.32 0 0 1-6.767-3.429 3.29 3.29 0 0 0 1.018 4.382A3.3 3.3 0 0 1 .64 6.575v.045a3.29 3.29 0 0 0 2.632 3.218 3.2 3.2 0 0 1-.865.115 3 3 0 0 1-.614-.057 3.28 3.28 0 0 0 3.067 2.277A6.6 6.6 0 0 1 .78 13.58a6 6 0 0 1-.78-.045A9.34 9.34 0 0 0 5.026 15" />
                            </svg>
                            </i></a>
                        <a href="" class="social">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-youtube" viewBox="0 0 16 16">
                                <path
                                    d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z" />
                            </svg>
                            </i></a>
                        <a href="" class="social">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-facebook" viewBox="0 0 16 16">
                                <path
                                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                            </svg>
                            </i></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- <hr class="my-4" style="border: 2px solid #333;"> -->


    <!-- Tampilan peta awal -->
    <div class="container text-center mt-4 mb-4">
        <h2 class="font-family-sans-serif">Lokasi Kami</h2>
        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.998469105525!2d106.7413542!3d-6.3209784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f8e88b32a651%3A0x2c64a045d4b9c5f8!2sPondok%20Modern%20Al-Muflihin!5e0!3m2!1sen!2sid!4v1635366286045!5m2!1sen!2sid"
                width="900" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
    <!-- Tampilan peta akhir -->

    <!-- kontak akhir -->

    <!-- footer awal -->
    <!-- <footer class="bg-light text-white text-center py-4">
        <footer id="sticky-footer">
            <div class="container text-center">
                <p class="mb-0"></p>
        </footer>
        </div>
    </footer>
    <footer class="footer d-flex flex-column bg-success text-center text-light pt-5 pb-5">
        <div class="container text-center text-md-left footer">
            <div class="row text-center text-md-left">
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h7 class="text-uppercase mb-4 fw-bold text-light text-start">Pondok Modern Al Muflihin</h7>
                    <p class="pt-4 text-start">Jl. Soekarno, Gebang Ilir, Kec. Gebang, Kab. Cirebon Prov. Jawa
                        Barat.</p>
                </div>
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h7 class="text-uppercase mb-3 fw-bold text-light">Menu</h7>
                    <p class="pt-3">
                        <a href="#home" class="text-light" style="text-decoration: none;">Home</a>
                    </p>
                    <p>
                        <a href="#" class="text-light" style="text-decoration: none;">Program</a>
                    </p>
                    <p>
                        <a href="#" class="text-light" style="text-decoration: none;">Profile</a>
                    </p>
                    <p>
                        <a href="#" class="text-light" style="text-decoration: none;">Activity</a>
                    </p>
                    <p>
                        <a href="#" class="text-light" style="text-decoration: none;">Contact</a>
                    </p>
                </div>
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h7 class="text-uppercase mb-3 fw-bold text-light">Program</h7>
                    <p class="pt-3">
                        <a href="#" class="text-light" style="text-decoration: none;">Pidato 3 Bahasa</a>
                    </p>
                    <p>
                        <a href="#" class="text-light" style="text-decoration: none;">Jurnalistik</a>
                    </p>
                    <p>
                        <a href="#" class="text-light" style="text-decoration: none;">Pramuka</a>
                    </p>
                    <p>
                        <a href="#" class="text-light" style="text-decoration: none;">Praktek Mengajar</a>
                    </p>
                    <p>
                        <a href="#" class="text-light" style="text-decoration: none;">Manasik Haji</a>
                    </p>
                </div>
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h7 class="text-uppercase mb-3 fw-bold text-light">Activity</h7>
                    <p class="pt-3">
                        <a href="#" class="text-light" style="text-decoration: none;">Home</a>
                    </p>
                    <p>
                        <a href="#" class="text-light" style="text-decoration: none;">Program</a>
                    </p>
                    <p>
                        <a href="#" class="text-light" style="text-decoration: none;">Profile</a>
                    </p>
                    <p>
                        <a href="#" class="text-light" style="text-decoration: none;">Activity</a>
                    </p>
                    <p>
                        <a href="#" class="text-light" style="text-decoration: none;">Contact</a>
                    </p>
                </div>
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h7 class="text-uppercase mb-3 fw-bold text-light">Contact</h7>
                    <p class="pt-3">
                        <a href="#" class="text-light" style="text-decoration: none;">Home</a>
                    </p>
                    <p>
                        <a href="#" class="text-light" style="text-decoration: none;">Program</a>
                    </p>
                </div>
                <hr class="my-4" style="border: 2px solid #fff">
                <p class="mt-4 mb-0">@ Pondok Pesantren Modern Al Muflihin Tahun Ajaran 2024</p>
            </div>
        </div>
    </footer> -->

    <!-- <footer class="bg-light text-white text-center py-4">
        <div class="container text-center">
            <p class="mb-0">Footer Header Text Here</p>
        </div>
    </footer> -->

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