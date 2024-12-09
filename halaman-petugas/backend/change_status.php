<?php
require_once("config.php");

// Cek jika form dikirimkan
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $action = $_POST['action'];

    if ($action === 'out') {
        // Dapatkan timestamp saat ini
        $current_timestamp = date("Y-m-d H:i:s");

        // Perbarui status dan tanggal keluar
        $update_query = "UPDATE tamu 
        SET status = 'Out', tanggal_keluar = '$current_timestamp' 
        WHERE id = '$id' AND status = 'In'";

        if (mysqli_query($conn, $update_query)) {
            echo "Status berhasil diupdate!";
        } else {
            echo "Error: " . mysqli_error($conn);
        }


        if (mysqli_query($conn, $update_query)) {
            // Redirect ke halaman utama
            header("Location: ../index.php");
            exit();
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}
