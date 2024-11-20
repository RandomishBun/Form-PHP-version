<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>DATA YANG AKAN DIKIRIM</h1>

    <?php
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Ambil data dari form
    $nama = $_GET['nama'];
    $email = $_GET['email'];
    $no_hp = $_GET['no_hp'];
    $jk = $_GET['jk'];
    $posisi = $_GET['posisi'];
    $pendidikan = $_GET['pendidikan'];
    $alamat = $_GET['alamat'];

    // Proses upload CV
    $cv_name = $_FILES['cv']['name'];
    $cv_tmp_name = $_FILES['cv']['tmp_name'];
    $cv_folder = "uploads/" . $cv_name;

    if (move_uploaded_file($cv_tmp_name, $cv_folder)) {
        echo "CV berhasil diupload!<br>";
    } else {
        echo "Gagal mengupload CV.<br>";
    }

    // Tampilkan data
    echo "<h3>Data Pendaftaran:</h3>";
    echo "Nama: $nama<br>";
    echo "Email: $email<br>";
    echo "Nomor HP: $no_hp<br>";
    echo "Jenis Kelamin: $jk<br>";
    echo "Posisi yang Dilamar: $posisi<br>";
    echo "Pendidikan Terakhir: $pendidikan<br>";
    echo "Alamat: $alamat<br>";
}
?>

    ?>

</body>
</html>