<?php
session_start();

require 'config.php';

if (isset($_SESSION['username'])) {
    header("location: dashboard.php");
    exit();
}

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = md5($_POST['password']); // Hashing password

    $stmt = $koneksi->prepare("SELECT * FROM admin WHERE username = ? AND password = ?");
    $stmt->bind_param('ss', $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
    } else {
        $error = "Username atau password salah.";
    }
    $stmt->close();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <style>
        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        /* Background */
        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #1F509A, #D4EBF8);
            /* background: url("image/foto3.jpg") no-repeat center center; */
            background-size: cover;
            backdrop-filter: blur(7px);
        }

        /* Container */
        .login-container {
            width: 100%;
            max-width: 400px;
            padding: 20px;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        /* Heading */
        .login-box h1 {
            font-size: 1.5rem;
            color: #198754;
            margin-bottom: 10px;
        }

        .login-box p {
            color: #666;
            margin-bottom: 20px;
        }

        /* Input group */
        .input-group {
            margin-bottom: 15px;
            text-align: left;
        }

        .input-group label {
            font-size: 0.9rem;
            color: #555;
            margin-bottom: 5px;
            display: block;
        }

        .input-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .input-group input:focus {
            border-color: #198754;
            box-shadow: 0 0 5px rgba(108, 99, 255, 0.5);
        }

        /* Button */
        button {
            width: 100%;
            padding: 10px;
            background: #198754;
            color: #fff;
            font-size: 1rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        button:hover {
            background: #1A4D2E;
        }

        /* Error message */
        .error {
            color: red;
            font-size: 0.9rem;
            margin-bottom: 10px;
        }
    </style>

    <div class="login-container">
        <div class="login-box">
            <img src="image/logo.png" alt="Logo" width="90" height="90">
            <h1>Pondok <br> Modern Al Muflihin</h1>
            <?php if ($error): ?>
                <p class="error"><?php echo $error; ?></p>
            <?php endif; ?>
            <form method="POST" action="">
                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit">Login</button>
            </form>
        </div>
    </div>

</body>

</html>