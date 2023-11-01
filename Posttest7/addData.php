<?php
  require "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add</title>
  <link rel="stylesheet" href="add-edit.css">
</head>

<body>
  <div class="bg">
    <div class="container">
      <form action="addDataaksi.php" method="POST" enctype="multipart/form-data">
        <h3>Tambah Data Karyawan</h3>
        <div class="inputBox">
          <label for="">Nama Karyawan</label>
          <input type="text" name="nama" placeholder="Isi Nama" required>
        </div>
        <div class="inputBox">
          <label for="">No HP</label>
          <input type="text" name="nohp" placeholder="Isi No HP" required>
        </div>
        <div class="inputBox">
          <label for="">Alamat</label>
          <input type="text" name="alamat" placeholder="Isi Alamat" required>
        </div>
        <div class="inputBox">
          <label for="">Foto Karyawan</label>
          <input type="file" name="foto"  required>
        </div>
        <input type="submit" value="Tambah Data" name="tambah">
        <a href="test.php">Kembali</a>
      </form>
    </div>
  </div>
</body>

</html>