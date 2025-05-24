<!DOCTYPE html>
<html>
<head>
  <title>Login Website Layout</title>
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
      <h2>Login Form</h2>
      <div class="container">
        <form action="/action_page.php">
          <div class="row">
            <div class="col-25">
              <label for="username">Username</label>
            </div>
            <div class="col-75">
              <input type="text" id="username" name="username" placeholder="Username...">
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="password">Password</label>
            </div>
            <div class="col-75">
              <input type="password" id="password" name="password" placeholder="Password...">
            </div>
          </div>
          <div class="row">
            <input type="submit" value="Login">
          </div>
        </form>
      </div>
    </div>
  </div>

  <?php include('konten_kanan.php'); ?>
</div>

<?php include('footer.php'); ?>

</body>
</html>
