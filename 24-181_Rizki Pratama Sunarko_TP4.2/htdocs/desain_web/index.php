<!DOCTYPE html>
<html>
<head>
  <title>Desain Website</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php
include('header.php');
include('menu.php');
?>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2>Selamat Datang</h2>
      <p>Ini adalah halaman beranda website silahkan pilih menu untuk mengakses halaman web.</p>
      <div class="fakeimg" style="height:200px;">Gambar</div>
      <p>Deskripsi gambar nya</p>
    </div>
  </div>

  <?php include('konten_kanan.php'); ?>
</div>

<?php include('footer.php'); ?>

</body>
</html>
