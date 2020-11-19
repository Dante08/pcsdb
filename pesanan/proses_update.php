<?php

require_once 'koneksi.php';

if (isset($_POST['submit'])) {
  $id = $_POST['id_psn'];
  $n_produk = $_POST['nama'];
  $j_produk = $_POST['tanggal'];
  $harga = $_POST['alamat'];
  $qty = $_POST['kurir'];
  
  // update data berdasarkan id_produk yg dikirimkan
  $q = $conn->query("UPDATE pesanan SET nama = '$n_produk', tanggal = '$j_produk', alamat = '$harga', kurir = '$qty' WHERE id_psn = '$id'");

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