<?php
declare(strict_types=1);
?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Form Profil POST</title>
</head>
<body>
    <h1>Form Input Profil</h1>
    <form action="process.php" method="post">
        <div>
            <label for="name">Nama</label><br>
            <input id="name" name="name" required maxlength="100">
        </div>
        <br>
        <div>
            <label for="email">Email</label><br>
            <input id="email" name="email" type="email" required>
        </div>
        <br>
        <div>
            <label for="major">Program Studi</label><br>
            <select id="major" name="major" required>
                <option value="">Pilih program studi</option>
                <option value="Sistem Informasi">Sistem Informasi</option>
                <option value="Teknologi Informasi">Teknologi Informasi</option>
            </select>
        </div>
        <br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>