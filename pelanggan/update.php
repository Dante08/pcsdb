<?php

require_once 'koneksi.php';

// cek id
if (isset($_GET['id'])) {
  $id = $_GET['id'];

  // ambil data berdasarkan id_produk
  $q = $conn->query("SELECT * FROM pelanggan WHERE id_plg = '$id'");

  foreach ($q as $dt) :
  ?>
  <!DOCTYPE html>
<html lang="en" dir="ltr">
      <meta charset="utf-8">
    <title>pcstore</title>
<style>
  html{
  margin: 0;
  padding: 0;
  width: 100%;
}
body{
  margin: 0;
  padding: 0;
  width: 100%;
  height: 100%;
background: -webkit-linear-gradient(bottom, #212121, #F06292);
       background-repeat: no-repeat;
  background-size: cover;
  display: block;
}
.logo{
  float: left;
  color: #08596A;
  margin-left: 46px;
  padding: 0px 38px;
  font-family: 'Raleway', sans-serif;
  font-size: 25px;
  font-weight: bold;
}
.logo a{
  text-decoration: none;
  color: #FFFFFF;
}
.nav{
  position: absolute;
  top: 0;
  left:  0;
  margin: 0;
  padding: 0;
  height: 80px;
  width: 100%;
}
.nav ul{
  list-style: none;
  cursor: pointer;
  float: right;
  margin-right: 140px;
}
.nav ul li {
  list-style: none;
  display: inline-block;
  color:#FFFFFF;
  font-family: 'Raleway', sans-serif;
  padding: 15px 15px;
  font-weight: 400;
}
.nav ul li:hover{
  border-bottom: 3px solid #08596A;
  transition: all .3s ease;
}
.logo h1{
  color: #fff;
  font-family: 'Fredericka the Great', cursive;
}

.card-image {
  width: 100%;
  height: 110px;
  position: relative;
  overflow: hidden;
}

.tagline{
  position: absolute;
  transform: translate(-50%,-50%);
  text-align: center;
  top: 55%;
  left: 73%;
}
.tagline p{
  color: #fff;
  font-family: 'Raleway', sans-serif;
  font-size: 16px;
  text-align: left;
  color:  #08596A;
}

#card {
        background: #fbfbfb;
        border-radius: 8px;
        box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
        height: 410px;
        margin: 10rem auto 8.1rem auto;
        width: 1010px;
}

#signup {
    color: #2dbd6e;
    font-family: "Raleway", sans-serif;
    font-size: 10pt;
    margin-top: 16px;
    text-align: center;
}
#submit-btn {
    background: -webkit-linear-gradient(right, #212121, #F06292);
    border: none;
    border-radius: 21px;
    box-shadow: 0px 1px 8px #212121;
    cursor: pointer;
    color: white;
    font-family: "Raleway SemiBold", sans-serif;
    height: 42.3px;
    margin: 0 auto;
    margin-top: 30px;
    transition: 0.25s;
    width: 153px;
}
#submit-btn:hover {
    box-shadow: 0px 1px 18px #212121;
}

#card-content {
      padding: 12px 60px;
}
#card-title {
      font-family: "Raleway Thin", sans-serif;
      letter-spacing: 4px;
      padding-bottom: 13px;
      padding-top: 13px;
      text-align: center;
}
.underline-title {
      background: -webkit-linear-gradient(right, #212121, #F06292);
      height: 2px;
      margin: -1.1rem auto 0 auto;
      width: 89px;
}

</style>
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
        </div>
     </div>
     <br>
<br>
<br>
  <!-- Read atau menampilkan data dari database -->
  <div id="card">
    <div id="card-content">
      <div id="card-content">
  <div id="card-title">
    <h2>UBAH DATA</h2>
    <div class="underline-title"></div>
  </div>
</div>
  <form action="proses_update.php" method="post">
    <input type="hidden" name="id_plg" value="<?= $dt['id_plg'] ?>">
    <input type="text" name="nama" value="<?= $dt['nama'] ?>">
    <input type="text" name="alamat" value="<?= $dt['alamat'] ?>">
    <input type="varchar" name="username" value="<?= $dt['username'] ?>">
    <input type="varchar" name="pass" value="<?= $dt['pass'] ?>">
    <input id="submit-btn" type="submit" name="submit" value="Ubah Data">
  </form>

  <?php
  endforeach;
}