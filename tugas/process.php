<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit("<div style='font-family: Arial; margin: 40px;'><h2 style='color:#d9534f;'>405 Method Tidak Diizinkan</h2>
    <p>Endpoint POST ini tidak boleh diakses menggunakan metode GET.</p><a href='contact.php'>Kembali ke Form</a></div>");
}

$nama = trim($_POST['nama'] ?? '');
$email = trim($_POST['email'] ?? '');
$proyek = trim($_POST['proyek'] ?? '');

$errors = [];


if (empty($nama) || empty($email) || empty($proyek)) {
    $errors[] = "Semua field wajib diisi dan tidak boleh kosong.";
}


if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Format alamat email tidak valid.";
}


if (!empty($errors)) {
    http_response_code(422);
    echo "<div style='font-family: Arial; margin: 40px;'>";
    echo "<h2 style='color: #d9534f;'>Kesalahan Validasi (Status 422)</h2><ul>";
    foreach ($errors as $err) {
        
        echo "<li>" . htmlspecialchars($err, ENT_QUOTES, 'UTF-8') . "</li>";
    }
    echo "</ul><br><a href='contact.php'>Kembali ke Form</a></div>";
    exit;
}

header("Location: success.php", true, 303);
exit;
?>