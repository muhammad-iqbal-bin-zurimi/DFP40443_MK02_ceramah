<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ceramah Profesional IT</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<section>
    <h2>Ceramah Profesional Teknologi Maklumat</h2>
    <img src="penceramah.jpg" alt="Penceramah" class="penceramah">
    <p><b>Nama:</b> Mas Guieta binti Aton</p>
    <p><b>Jawatan:</b> Pensyarah</p>
    <p><b>Institusi:</b> Politeknik Tuanku Syed Sirajuddin</p>
    <p><b>Bidang Kepakaran:</b> Teknologi Maklumat (Pangkalan Data)</p>
</section>

<section>
    <h2>Sinopsis & Logistik</h2>
    <p>
        Ceramah ini memberi pendedahan kepada pelajar mengenai asas teknologi maklumat
        dengan fokus kepada pengurusan pangkalan data dan aplikasinya dalam pekerjaan.
    </p>
    <p><b>Tarikh:</b> 1 Februari 2026</p>
    <p><b>Masa:</b> 9:00 pagi – 5:00 petang</p>
    <p><b>Lokasi:</b> Dewan Utama, Politeknik Tuanku Syed Sirajuddin</p>
    <p><b>Yuran:</b> RM500.00 seorang</p>
</section>

<section>
    <h2>Borang Pendaftaran</h2>
    <form action="pengesahan.php" method="POST" enctype="multipart/form-data">

        <label>Nama Penuh</label>
        <input type="text" name="nama" required>

        <label>Email</label>
        <input type="email" name="email" required>

        <label>No Telefon</label>
        <input type="tel" name="telefon" required>

        <label>Kategori Peserta</label>
        <select name="kategori" required>
            <option value="">-- Pilih --</option>
            <option>Pelajar</option>
            <option>Pensyarah</option>
            <option>Orang Awam</option>
            <option>Korporat</option>
        </select>

        <label>Bilangan Slot</label>
        <input type="number" name="bil_slot" min="1" required>

        <label>Bukti Pembayaran</label>
        <input type="file" name="bukti" required>

        <label class="center-checkbox">
        <input type="checkbox" required>
        Saya bersetuju dengan Terma & Syarat
        </label>


        <button type="submit">Hantar</button>
    </form>
</section>

<footer>
    <p>Politeknik Tuanku Syed Sirajuddin &copy; 2026</p>
</footer>

</body>
</html>
