<?php
// Ambil data email dari parameter GET
$email = isset($_GET['email']) ? $_GET['email'] : '';

// Simulasi data jadwal diet (bisa digantikan dengan data sesuai kebutuhan)
$jadwal_diet = array(
    "daniya@example.com" => array(
        "Senin" => "Makan sehat pagi, siang, malam",
        "Selasa" => "Minum air putih banyak",
        "Rabu" => "Olahraga 30 menit",
        // ... tambahkan jadwal untuk hari-hari lain
    )
);

// Cek apakah email ada dalam data jadwal diet
if (array_key_exists($email, $jadwal_diet)) {
    $user_schedule = $jadwal_diet[$email];
} else {
    // Jika email tidak ditemukan, beri nilai default atau berikan pesan kesalahan
    $user_schedule = array("Data jadwal tidak ditemukan");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Diet</title>
</head>
<body>
    <h2>Jadwal Diet</h2>
    <p>Selamat datang, <?php echo $email; ?>!</p>
    <h3>Jadwal Diet Anda:</h3>
    <ul>
        <?php
        foreach ($user_schedule as $day => $schedule) {
            echo "<li><strong>$day:</strong> $schedule</li>";
        }
        ?>
    </ul>
</body>
</html>
