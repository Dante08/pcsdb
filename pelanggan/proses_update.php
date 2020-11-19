<?php

require_once 'koneksi.php';

if (isset($_POST['submit'])) {
  $id = $_POST['id_plg'];
  $n_produk = $_POST['nama'];
  $j_produk = $_POST['alamat'];
  $harga = $_POST['username'];
  $qty = $_POST['pass'];
  
  // update data berdasarkan id_produk yg dikirimkan
  $q = $conn->query("UPDATE pelanggan SET nama = '$n_produk', alamat = '$j_produk', username = '$harga', pass = '$qty' WHERE id_plg = '$id'");

  if ($q) {
    // pesan jika data berubah
    echo "<script>alert('Data produk berhasil diubah'); window.location.href='index.php'</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>alert('Data produk gagal diubah'); window.location.href='index.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: index.php');
}