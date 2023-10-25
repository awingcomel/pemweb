<?php
  require "koneksi.php";

  if (isset($_POST["tambah"])) {

    $nama = $_POST["nama"];
    $nohp = $_POST["nohp"];
    $alamat = $_POST["alamat"];
    $gambar = $_FILES["foto"]["name"];
    $tmp = $_FILES["foto"]["tmp_name"];

    $tanggal_hari_ini = date("Y-m-d");

    $info = pathinfo($gambar);
    $ekstensi = $info['extension'];
    $gambarBaru = $tanggal_hari_ini . $nama . '.' . $ekstensi;


    if (move_uploaded_file($tmp, 'databaseImages/'.$gambarBaru)){
      $sql = "INSERT INTO tb_karyawan VALUES(NULL, '$nama', '$nohp', '$alamat', '$gambarBaru' )";

      $result = mysqli_query($koneksi, $sql);
      if ($result) {
        echo "
          <script>
            alert('Data berhasil ditambah');
            document.location.href = 'test.php';
          </script>
        ";
      } else {
        echo "
          <script>
            alert('Data gagal ditambah');
            document.location.href = 'test.php';
          </script>
        ";
      }
    }
  }
?>