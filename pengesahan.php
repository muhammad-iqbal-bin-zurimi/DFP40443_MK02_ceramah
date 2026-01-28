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
        <table border="1" cellpadding="10" cellspacing="0" style="width: 100%; border-collapse: collapse;">
            <tr>
                <td><b>Penceramah:</b></td>
                <td><?= $penceramah ?></td>
            </tr>
            <tr>
                <td><b>Tarikh:</b></td>
                <td><?= $tarikh ?></td>
            </tr>
            <tr>
                <td><b>Masa:</b></td>
                <td><?= $masa ?></td>
            </tr>
            <tr>
                <td><b>Lokasi:</b></td>
                <td><?= $lokasi ?></td>
            </tr>
            <tr>
                <td><b>Yuran:</b></td>
                <td><?= $yuran ?></td>
            </tr>
        </table>
        <hr>
        <h3>Maklumat Peserta</h3>
        <table>
            <tr>
                <td><b>Nama:</b></td>
                <td><?= htmlspecialchars($nama) ?></td>
            </tr>
            <tr>
                <td><b>Email:</b></td>
                <td><?= htmlspecialchars($email) ?></td>
            </tr>
            <tr>
                <td><b>No Telefon:</b></td>
                <td><?= htmlspecialchars($telefon) ?></td>
            </tr>
            <tr>
                <td><b>Kategori Peserta:</b></td>
                <td><?= htmlspecialchars($kategori) ?></td>
            </tr>
            <tr>
                <td><b>Bilangan Slot:</b></td>
                <td><?= htmlspecialchars($slot) ?></td>
            </tr>
            <tr>
                <td><b>Harga Seunit:</b></td>
                <td>RM <?= $harga ?></td>
            </tr>
        </table>
        <hr>
        <h3>Jumlah Bayaran: RM <?= $jumlah ?></h3>
        <p>Status: Pendaftaran Berjaya</p>
    </div>
    <a href="index.php"><button type="button">Isi Borang Baharu</button></a>
</section>
</body>
</html>
