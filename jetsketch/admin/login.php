<?php require "includes/conn.php";

require 'includes/conn.php';

session_start();

if(isset($_SESSION['admin_email'])){
    echo "<script> location.href='/jetsketch/admin'; </script>";
    exit();
}

?>


<<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Login Page</title>
    <link rel="stylesheet" href="css/loginstyle.css">
  </head>
  <body>
    <div class="logo_container">
      <div class="logo_inside_dive">
        <img id="logo" src="assets/images/adminlogof.png">
      </div>
    </div>
    <div class="center">
      <h1>Login</h1>
      <form class="row g-3" action="scripts/login_script.php" method="POST">
        <div class="txt_field">
        <input type="text" name="email" class="form-control" id="email">
          <span></span>
          <label>Email</label>
        </div>
        <div class="txt_field">
        <input type="password" name="password" class="form-control" id="password">
          <span></span>
          <label>Password</label>
        </div>
        <button type="submit" class="btn btn-primary" id="login-btn">Submit</button>
      </form>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>