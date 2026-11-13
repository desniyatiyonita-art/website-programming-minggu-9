<?php
declare(strict_types=1);

$query = trim($_GET["query"] ?? "");
?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Pencarian GET</title>
</head>
<body>
    <h1>Form Pencarian</h1>
    <form method="get">
        <label for="query">Kata kunci</label>
        <input id="query" name="query" value="<?= htmlspecialchars($query, ENT_QUOTES, "UTF-8") ?>">
        <button type="submit">Cari</button>
    </form>
    <p>Hasil untuk: <?= htmlspecialchars($query, ENT_QUOTES, "UTF-8") ?></p>
    
</body>
</html>