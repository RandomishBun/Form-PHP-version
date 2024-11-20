<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Karyawan Indomaret</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="logo indomaret.png" alt="Logo Indomaret" width="300">
        </div>
        <h2>Form Pendaftaran Karyawan</h2>
        <form action="submit-pendaftaran.php" method="get" enctype="multipart/form-data">
            <label for="nama">Nama Lengkap</label>
            <input type="text" id="nama" name="nama" placeholder="Masukkan nama lengkap Anda" required><br></br>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Masukkan email Anda" required><br></br>

            <label for="no_hp">Nomor HP</label>
            <input type="tel" id="no_hp" name="no_hp" placeholder="Masukkan nomor HP Anda" required><br></br>

            <label for="jk">Jenis Kelamin</label>
            <select id="jk" name="jk" required><br></br>
                <option value="">-- Pilih --</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select><br></br>

            <label for="posisi">Posisi yang Dilamar</label>
            <select id="posisi" name="posisi" required>
                <option value="">-- Pilih Posisi --</option>
                <option value="Kasir">Kasir</option>
                <option value="Pramuniaga">Pramuniaga</option>
                <option value="Staff Gudang">Staff Gudang</option>
            </select><br></br>

            <label for="pendidikan">Pendidikan Terakhir</label>
            <select id="pendidikan" name="pendidikan" required>
                <option value="">-- Pilih Pendidikan --</option>
                <option value="SMA/SMK">SMA/SMK</option>
                <option value="Diploma">Diploma</option>
                <option value="Sarjana">Sarjana</option>
            </select><br></br>

            <label for="alamat">Alamat Lengkap</label>
            <textarea id="alamat" name="alamat" rows="4" placeholder="Masukkan alamat lengkap Anda" required></textarea><br></br>

            <label for="cv">Upload CV</label>
            <input type="file" id="cv" name="cv" accept=".pdf,.doc,.docx" required><br></br>

            <p class="note">* Pastikan semua data terisi dengan benar sebelum mengirimkan.</p>

            <button type="submit">Kirim Pendaftaran</button>
        </form>
    </div>
</body>
</html>

