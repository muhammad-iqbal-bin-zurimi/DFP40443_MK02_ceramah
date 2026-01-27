<?php
$nama     = $_POST['nama'] ?? '';
$email    = $_POST['email'] ?? '';
$telefon  = $_POST['telefon'] ?? '';
$kategori = $_POST['kategori'] ?? '';
$slot     = $_POST['bil_slot'] ?? 0;
$bukti    = $_FILES['bukti']['name'] ?? '';

$harga  = 500;
$jumlah = $slot * $harga;

$penceramah = "Mas Guieta binti Aton";
$tarikh     = "1 Februari 2026";
$masa       = "9:00 pagi – 5:00 petang";
$lokasi     = "Dewan Utama, Politeknik Tuanku Syed Sirajuddin";
$yuran      = "RM 500.00";
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
        <img src="penceramah.jpg" alt="Penceramah" class="penceramah">
        <h3>Maklumat Ceramah</h3>
        <p><b>Penceramah:</b> <?= $penceramah ?></p>
        <p><b>Tarikh:</b> <?= $tarikh ?></p>
        <p><b>Masa:</b> <?= $masa ?></p>
        <p><b>Lokasi:</b> <?= $lokasi ?></p>
        <p><b>Yuran:</b> <?= $yuran ?></p>
        <hr>
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
