<?php
require_once("halaman-petugas/backend/config.php");
?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Form Pengunjung - PT. Elastomix Indonesia</title>
  <link href="../css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <style>
    body {
      background-image: url(../assets/img/WhatsApp\ Image\ 2024-12-04\ at\ 08.39.56_4fb37ef0.jpg);
      background-size: cover;
      background-repeat: no-repeat;
      height: 100vh;
    }

    form {
      max-width: 400px;
    }
  </style>
</head>

<body>
  <div class="d-flex justify-content-center align-items-center vh-100">
    <form action="halaman-petugas/backend/config.php" method="POST">
      <h2 class="text-center mb-4">Form Data Pengunjung</h2>
      <div class="mb-3">
        <input
          type="text"
          placeholder="No:"
          class="form-control"
          id="nomor"
          name="nomor"
          readonly />
      </div>
      <div class="mb-3">
        <input
          type="text"
          class="form-control"
          id="nama"
          name="nama"
          placeholder="Nama:"
          required />
      </div>
      <div class="mb-3">
        <input
          type="text"
          class="form-control"
          id="nomor_id"
          name="nomor_id"
          placeholder="Nomor Id:"
          required />
      </div>
      <div class="mb-3">
        <input
          type="number"
          placeholder="Jumlah "
          class="form-control"
          id="jumlah_kendaraan"
          name="jumlah_kendaraan"
          required />
      </div>
      <div class="mb-3">
        <input
          type="text"
          placeholder="Perusahaan"
          class="form-control"
          id="perusahaan"
          name="perusahaan"
          required />
      </div>
      <div class="mb-3">
        <input
          type="text"
          placeholder="No Kendaraan"
          class="form-control"
          id="nomor_kendaraan"
          name="nomor_kendaraan"
          required />
      </div>
      <div class="mb-3">
        <input
          type="text"
          placeholder="Jenis Kendaraan"
          class="form-control"
          id="jenis_kendaraan"
          name="jenis_kendaraan"
          required />
      </div>
      <div class="mb-3">
        <input
          type="text"
          placeholder="Bertemu Dengan"
          class="form-control"
          id="bertemu"
          name="bertemu"
          required />
      </div>
      <div class="mb-3">
        <select name="janji" class="form-control" required>
          <option value="" hidden selected>Sudah Membuat Janji?</option>
          <option value="Ya">Ya</option>
          <option value="Tidak">Tidak</option>
        </select>
      </div>
      <div class="mb-3">
        <textarea
          placeholder="Keperluan"
          class="form-control"
          id="keperluan"
          name="keperluan"
          required
          style="resize: none;"></textarea>
      </div>
      <button type="submit" class="btn btn-primary w-100" name="addpengunjung">Kirim Data</button>
    </form>
  </div>
  <script src="../js/bootstrap.bundle.min.js"></script>
</body>

</html>