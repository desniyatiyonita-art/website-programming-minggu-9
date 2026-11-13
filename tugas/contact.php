<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Kontak - Tugas 9</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 40px;">
    <h2>Form Kontak / Pendaftaran (Metode POST)</h2>
    <form action="process.php" method="POST">
        <label for="nama">Nama Lengkap:</label><br>
        <input type="text" id="nama" name="nama" required style="padding: 6px; width: 300px; margin-top: 5px;"><br><br>

        <label for="email">Email Aktif:</label><br>
        <input type="email" id="email" name="email" required style="padding: 6px; width: 300px; margin-top: 5px;"><br><br>

        <label for="proyek">Judul Proyek / Keterangan:</label><br>
        <input type="text" id="proyek" name="proyek" required style="padding: 6px; width: 300px; margin-top: 5px;"><br><br>

        <button type="submit" style="padding: 6px 12px;">Kirim Data</button>
    </form>
    <br><a href="index.php">&larr; Kembali ke Menu Utama</a>
</body>
</html>