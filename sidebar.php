<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="icon" href="image/logo.png" type="image/icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <style>
        /* Reset beberapa gaya dasar */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Gaya dasar untuk navigasi */
        nav {
            background-color: #333;
            width: 250px;
            height: 100vh;
            padding: 20px;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
        }

        /* Gaya untuk daftar item di navigasi */
        nav ul {
            list-style-type: none;
            padding: 0;
        }

        /* Gaya untuk item navigasi */
        nav ul li {
            margin: 20px 0;
        }

        /* Gaya untuk tautan di navigasi */
        nav ul li a {
            display: flex;
            align-items: center;
            text-decoration: none;
            color: #fff;
            padding: 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        /* Gaya ketika hover pada item navigasi */
        nav ul li a:hover {
            background-color: #444;
        }

        /* Gaya untuk logo */
        nav .logo {
            display: flex;
            align-items: center;
            margin-bottom: 30px;
        }

        nav .logo img {
            width: 50px;
            height: 50px;
            margin-right: 10px;
        }

        /* Gaya untuk nama admin */
        nav .nav-item {
            font-size: 18px;
            font-weight: bold;
        }

        /* Ikon di dalam navigasi */
        nav ul li a i {
            margin-right: 10px;
        }

        /* Gaya untuk tombol logout */
        nav .logout {
            margin-top: auto;
        }

        /* Responsif untuk layar lebih kecil */
        @media (max-width: 768px) {
            nav {
                width: 200px;
            }

            nav .logo img {
                width: 40px;
                height: 40px;
            }

            nav .nav-item {
                font-size: 16px;
            }
        }
    </style>
</head>

<body>

    <!-- sidebar awal -->
    <nav>
        <ul>
            <li><a href="#" class="logo">
                    <img src="image/logo.png" alt="logo" width="250" height="150">
                    <span class="nav-item">Admin
            <li><a href="dashboard.php">
                    <i class="fas fa-home"></i>
                    <span class="nav-item">Dashboard</span>
                </a></li>
            <li><a href="data.php">
                    <i class="fas fa-solid fa-graduation-cap"></i>
                    <span class="nav-item">Data Santri</span>
                </a></li>
            <li><a href="data_guru.php">
                    <i class="fas fa-solid fa-user"></i>
                    <span class="nav-item">Data Guru</span>
                </a></li>
            <li><a href="logout.php" class="logout">
                    <i class="fas fa-sign-out-alt"></i>
                    <span class="nav-item">Log out</span>
                </a></li>
        </ul>
    </nav>
    <!-- sidebar awal -->

</body>