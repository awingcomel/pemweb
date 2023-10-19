<?php
  require "koneksi.php";

  if (isset($_POST["ubah"])) {

    $id = $_GET["id"];
    $nama = $_POST["nama"];
    $nohp = $_POST["nohp"];
    $alamat = $_POST["alamat"];
    $gambar = $_FILES["foto"]["name"];
    $gambarBaru = "$nama.png";
    $tmp = $_FILES["foto"]["tmp_name"];

    if (move_uploaded_file($tmp, 'databaseImages/' . $gambarBaru)){
      $sql = "UPDATE tb_karyawan SET nama = '$nama', nohp = '$nohp', alamat = '$alamat',  foto = '$gambarBaru' WHERE id = '$id' ";

      $result = mysqli_query($koneksi, $sql);
      if ($result) {
        echo "
            <script>
              alert('Data berhasil diubah');
              document.location.href = 'test.php';
            </script>
          ";
      } else {
        echo "
          <script>
            alert('Data gagal diubah');
            document.location.href = 'test.php';
          </script>
          ";
      }
    }
  }
?>