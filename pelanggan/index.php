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
    <input type="text" name="nama" placeholder="Nama user">
    <input type="varchar" name="alamat" placeholder="alamat user">
    <input type="varchar" name="username" placeholder="Username">
    <input type="varchar" name="pass" placeholder="password">
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
      <th>Alamat</th>
      <th>Username</th>
      <th>Password</th>
      <th colspan="2">Aksi</th>
    </tr>
     <?php
    // Tampilkan semua data
    $q = $conn->query("SELECT * FROM pelanggan");

    $no = 1; // nomor urut
    while ($dt = $q->fetch_assoc()) :
    ?>

    <tr>  
      <td><?= $no++ ?></td>
      <td><?= $dt['nama'] ?></td>
      <td><?= $dt['alamat'] ?></td>
      <td><?= $dt['username'] ?></td>
      <td><?= $dt['pass'] ?></td>
      <td><a href="update.php?id=<?= $dt['id_plg'] ?>">Ubah</a></td>
      <td><a href="delete.php?id=<?= $dt['id_plg'] ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a></td>
    </tr>

    <?php
    endwhile;
    ?> 

  </table>
</div>
</div>
  </body>
</html>