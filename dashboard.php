
<?php
include 'cek_auth.php';
include 'sidebar.php';
?>
<span style="font-family:verdana,geneva,sans-serif">
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <title>Dashboard Admin</title>

        <style>
            /* Mengatur body agar tidak ada padding atau margin yang mengganggu */
            body {
                margin: 0;
                padding: 0;
                font-family: Arial, sans-serif;
                overflow-x: hidden;
                /* Menghindari scroll horizontal pada seluruh halaman */
            }

            /* Styling untuk container utama, dengan menambahkan margin-left untuk memberi ruang sidebar */
            .container {
                margin-left: 250px;
                /* Sesuaikan dengan lebar sidebar */
                padding: 20px;
                box-sizing: border-box;
                /* Menghindari overflow jika ada padding */
                width: calc(100% - 250px);
                /* Pastikan lebar container tidak melampaui ukuran layar */
            }

            /* Styling untuk section main */
            .main {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                padding: 20px;
            }

            /* Styling untuk judul di atas */
            .main-top h1 {
                font-size: 28px;
                font-weight: bold;
                margin-bottom: 20px;
                text-align: center;
            }

            /* Styling untuk card */
            .main-skills {
                display: flex;
                justify-content: space-between;
                gap: 20px;
                flex-wrap: wrap;
                margin-top: 20px;
                width: 100%;
                /* Memastikan main-skills tidak melampaui lebar container */
            }

            /* Setiap card */
            .card {
                background-color: #fff;
                padding: 20px;
                border-radius: 10px;
                width: 220px;
                box-sizing: border-box;
                /* Memastikan padding tidak mempengaruhi lebar card */
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
                text-align: center;
                transition: transform 0.3s ease;
            }

            .card:hover {
                transform: translateY(-5px);
                /* Efek hover agar card naik sedikit */
            }

            .card i {
                font-size: 40px;
                margin-bottom: 10px;
                color: #198754;
            }

            .card h3 {
                font-size: 18px;
                margin-bottom: 15px;
            }

            /* Styling untuk button dalam card */
            .card button {
                background-color: #198754;
                color: white;
                border: none;
                padding: 10px 15px;
                border-radius: 5px;
                cursor: pointer;
                font-weight: bold;
                transition: background-color 0.3s ease;
            }

            .card button:hover {
                background-color: #198754;
            }

            /* Responsif untuk perangkat kecil */
            @media (max-width: 768px) {
                .container {
                    margin-left: 0;
                    padding: 10px;
                }

                .main-skills {
                    flex-direction: column;
                    align-items: center;
                }

                .card {
                    width: 100%;
                    margin-bottom: 15px;
                }
            }
        </style>
    </head>

    <body>

        <div class="container">
            <section class="main">
                <div class="main-top">
                    <h1>Welcome to Pondok Modern Al Muflihin</h1>
                </div>
                <div class="main-skills">
                    <div class="card">
                        <i class="fas fa-solid fa-graduation-cap"></i>
                        <h3>Data Santri</h3>
                        <button class="fw-bold" href="data.php">More Info</button>
                    </div>
                    <div class="card">
                        <i class="fas fa-solid fa-user"></i>
                        <h3>Data Guru</h3>
                        <button>More Info</button>
                    </div>
                    <div class="card">
                        <i class="fas fa-solid fa-book-open"></i>
                        <h3>Data Pelajaran</h3>
                        <button>More Info</button>
                    </div>
                    <div class="card">
                        <i class="fas fa-solid fa-chart-line"></i>
                        <h3>Ekstrakurikuler</h3>
                        <button>More Info</button>
                    </div>
                </div>
            </section>
        </div>
    </body>

    </html>
</span>