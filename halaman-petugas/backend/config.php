<?php
$conn = mysqli_connect("localhost", "root", "", "pendataan_tamu");


if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}

// Cek jika form di-submit
if (isset($_POST['addpengunjung'])) {
    // Ambil data dari form
    $nama = $_POST['nama'];
    $nomor_id = $_POST['nomor_id'];
    $jumlah_kendaraan = $_POST['jumlah_kendaraan'];
    $perusahaan = $_POST['perusahaan'];
    $nomor_kendaraan = $_POST['nomor_kendaraan'];
    $jenis_kendaraan = $_POST['jenis_kendaraan'];
    $bertemu = $_POST['bertemu'];
    $janji = $_POST['janji'];
    $keperluan = $_POST['keperluan'];

    // Generate nomor otomatis (YYYYMMDD-XXX)
    $tanggal = date('Ymd'); // Format tanggal hari ini (YYYYMMDD)

    // Hitung jumlah tamu untuk hari ini
    $sql_count = "SELECT COUNT(*) AS jumlah FROM tamu WHERE DATE(tanggal_masuk) = CURDATE()";
    $result = $conn->query($sql_count);
    $row = $result->fetch_assoc();
    $urutan = str_pad($row['jumlah'] + 1, 3, '0', STR_PAD_LEFT); // Tambahkan 001, 002, dst.

    $nomor = $tanggal . '-' . $urutan; // Format nomor lengkap

    // Masukkan data ke database
    $sql_insert = "INSERT INTO tamu 
    (no, nama, no_id, jumlah, perusahaan, nomor_kendaraan, jenis_kendaraan, bertemu_dengan, sudah_buat_janji, keperluan, status, tanggal_keluar) 
    VALUES 
    ('$nomor', '$nama', '$nomor_id', '$jumlah_kendaraan', '$perusahaan', '$nomor_kendaraan', '$jenis_kendaraan', '$bertemu', '$janji', '$keperluan', 'in', NULL)";

    if ($conn->query($sql_insert) === TRUE) {
        header("Location: success.php?no=" . urlencode($nomor));
        exit();
    } else {
        echo "Error: " . $sql_insert . "<br>" . $conn->error;
    }
}
