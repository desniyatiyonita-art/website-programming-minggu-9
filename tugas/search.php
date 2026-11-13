<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pencarian - Tugas 9</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 40px;">
    <h2>Pencarian Data (Metode GET)</h2>
    <form action="search.php" method="GET">
        <label for="keyword">Kata Kunci:</label><br>
        <input type="text" id="keyword" name="keyword" required style="padding: 6px; width: 300px; margin-top: 5px;"><br><br>
        <button type="submit" style="padding: 6px 12px;">Cari</button>
    </form>

    <?php
    if (isset($_GET['keyword'])) {
        $keyword = htmlspecialchars($_GET['keyword'], ENT_QUOTES, 'UTF-8');
        echo "<hr><p>Hasil pencarian untuk: <strong>" . $keyword . "</strong></p>";
    }
    ?>
    <br><a href="index.php">&larr; Kembali ke Menu Utama</a>
</body>
</html>