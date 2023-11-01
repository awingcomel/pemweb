<?php
  require "koneksi.php";
  




?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="test.css">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
</head>

<body>
  <div class="bg">
    <div class="container">
      <div class="head">
        <div class="title">
        <h2>Dashboard Karyawan</h2>
        <p><?php date_default_timezone_set("Asia/Makassar"); echo date("l, d F Y, H:i:s") ?></p>
      </div>
      </div>
      <div class="table-box">
        <table>
          <tr>
            <td class="">id</td>
            <td class="">Nama Karyawan</td>
            <td class="">No HP</td>
            <td class="">Alamat</td>
            <td class="">Foto</td>
            <td class="">Action</td>
          </tr>
          <?php
          $query = mysqli_query($koneksi, "SELECT * FROM tb_karyawan");
          $no = 1;

          while ($row = mysqli_fetch_assoc($query)) {
            echo "<tr>";
            echo "<td>$no</td>";
            echo "<td>$row[nama]</td>";
            echo "<td>$row[nohp]</td>";
            echo "<td>$row[alamat]</td>";       
            echo "<td>
                <img src = 'databaseImages/$row[foto]' class = 'gambar-cover' alt = 'Gambar';
            </td>";
            echo "<td class='action'>
                <a href='editData.php?id=$row[id]' class='kuning'><i class='uil uil-edit'></i></a>
                <a href='deleteDataaksi.php?id=$row[id]' class='merah'><i class='uil uil-trash-alt'></i></a>
                </td>";
            echo "</tr>";
            $no++;
          }
          ?>
        </table>
        <div class="tombol">
          <a href="addData.php">Tambah Data</a>
        </div>
        <a href="logout.php"><button>LOGOUT</button></a>
      </div>
    </div>
  </div>
</body>
</html>