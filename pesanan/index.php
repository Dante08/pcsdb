<?php
// panggil koneksinya
require_once 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>pcstore</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link href="https://fonts.googleapis.com/css?family=Hanalei+Fill" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great|Hanalei+Fill|Noto+Serif+JP|Raleway" rel="stylesheet">
  </head>
  <body>
    <div class="wrapper">
      <div class="nav">
        <div class="logo">
          <a href="#">
            <br>
          <p>PCSTORE DATA CENTER</p>
          </a>
        </div>
        <br>
          <form method="post" action="add.php">
    <input type="text" name="nama" placeholder="Nama Pemesan">
    <input type="varchar" name="tanggal" placeholder="tanggal pemesanan">
    <input type="varchar" name="alamat" placeholder="Alamat Tujuan">
    <input type="varchar" name="kurir" placeholder="Kurir">
    <input id="submit-btn" type="submit" name="submit" value="Tambah Data">
</form>
      </div>
     </div>
<br>
<br>
<br>
<center>

  </center>
  <div id="card">
    <div id="card-content">
      <div class="table-wrapper">
    <table class="fl-table">

    <tr>
      <th>No.</th> <th>Nama</th>
      <th>Tanggal Pesan</th>
      <th>Alamat Tujuan</th>
      <th>Kurir</th>
      <th colspan="2">Aksi</th>
    </tr>

    <?php
    // Tampilkan semua data
    $q = $conn->query("SELECT * FROM pesanan");

    $no = 1; // nomor urut
    while ($dt = $q->fetch_assoc()) :
    ?>

    <tr>  
      <td><?= $no++ ?></td>
      <td><?= $dt['nama'] ?></td>
      <td><?= $dt['tanggal'] ?></td>
      <td><?= $dt['alamat'] ?></td>
      <td><?= $dt['kurir'] ?></td>
      <td><a href="update.php?id=<?= $dt['id_psn'] ?>">Ubah</a></td>
      <td><a href="delete.php?id=<?= $dt['id_psn'] ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a></td>
    </tr>

    <?php
    endwhile;
    ?> 

  </table>
  </div>
</div>
</body>
</html>