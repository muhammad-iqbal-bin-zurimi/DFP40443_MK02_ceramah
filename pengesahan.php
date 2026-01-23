<?php
$nama     = $_POST['nama'] ?? '';
$email    = $_POST['email'] ?? '';
$telefon  = $_POST['telefon'] ?? '';
$kategori = $_POST['kategori'] ?? '';
$slot     = $_POST['bil_slot'] ?? 0;
$bukti    = $_FILES['bukti']['name'] ?? '';

$harga  = 500;
$jumlah = $slot * $harga;
?>
<!DOCTYPE html>
<html lang="ms">
<head>
<meta charset="UTF-8">
<title>Pengesahan Pendaftaran</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<section>
    <h2>Pengesahan Pendaftaran</h2>
    <div class="card">
        <p><b>Nama:</b> <?= htmlspecialchars($nama) ?></p>
        <p><b>Email:</b> <?= htmlspecialchars($email) ?></p>
        <p><b>No Telefon:</b> <?= htmlspecialchars($telefon) ?></p>
        <p><b>Kategori Peserta:</b> <?= htmlspecialchars($kategori) ?></p>
        <p><b>Bilangan Slot:</b> <?= htmlspecialchars($slot) ?></p>
        <p><b>Harga Seunit:</b> RM <?= $harga ?></p>
        <hr>
        <h3>Jumlah Bayaran: RM <?= $jumlah ?></h3>
        <p>Status: Pendaftaran Berjaya ✅</p>
    </div>
    <a href="index.php"><button type="button">Isi Borang Baharu</button></a>
</section>
</body>
</html>
