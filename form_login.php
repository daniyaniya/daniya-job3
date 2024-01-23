<?php
// Validasi form login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Validasi input
    if (empty($email) || empty($password)) {
        echo "Harap masukkan email dan password.";
    } else {
        // Proses autentikasi (contoh sederhana)
        // Di sini Anda dapat menambahkan logika autentikasi sesuai kebutuhan aplikasi Anda
        $user_credentials = array("daniya@example.com" => "daniya123");

        if (array_key_exists($email, $user_credentials) && $user_credentials[$email] == $password) {
            // Redirect ke halaman jadwal diet dengan menggunakan GET
            header("Location: jadwal_diet.php?email=" . urlencode($email));
            exit(); // Penting untuk memastikan tidak ada output setelah ini
        } else {
            echo "Email atau password salah.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
</head>
<body>
    <style>
         body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .error {
            color: #ff0000;
            margin-bottom: 16px;
        }
    </style>
    <h2>Form Login</h2>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label>Email:</label>
        <input type="text" name="email" required>
        <br>
        <label>Password:</label>
        <input type="password" name="password" required>
        <br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
