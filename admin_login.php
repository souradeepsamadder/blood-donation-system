<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="icon" href="./image/187-suitcase-outline.gif">

  <meta charset="utf-8">
  <?php
  session_start();
  $_SESSION["admin"] = "";
  ?>

  <?php

  include('../TCW/db_conn.php');
  ?>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Student Management System - Admin Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

  </style>
</head>

<body class="bg-dark">

  <div class="container ">
    <div class="card card-login mx-auto mt-5 ">
      <div class="card-header">Admin Login</div>
      <div class="card-body">
        <form action="" method="post" name="form">
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="required" autofocus="autofocus" name="eid" autocomplete="off" value="<?php
                                                                                                                                                                                  if (isset($_COOKIE["eid"])) {
                                                                                                                                                                                    echo $_COOKIE['eid'];
                                                                                                                                                                                  }
                                                                                                                                                                                  ?>">

              <label for="inputEmail">Email address</label>

            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="inputPassword" class="form-control" placeholder="OTP" required="required" name="pw" value="">
              <label for="inputPassword">OTP</label>

            </div>
          </div>
          <div class="text-center">
            <input type="submit" class="btn btn-primary btn-block" value="Login" name="login">
          </div>

          <?php
          if (isset($_POST["login"])) {
            $un = $_POST["eid"];
            $pwd = $_POST["pw"];
            $sql = "select * from aadmin where Email='$un'";
            $result = mysqli_query($conn, $sql);
            $r = mysqli_num_rows($result);

            if ($r == 1) {
              while ($row = mysqli_fetch_assoc($result)) {
                if (password_verify($pwd, $row['Password'])) {
                  if (isset($_POST["rem"])) {
                    setcookie("eid", $un, time() + (86400 * 30), "/");
                    setcookie("aps", $pwd, time() + (86400 * 30), "/");
                  }
                  $eid = $row['Email'];
                  $_SESSION['admin'] = $eid;
                  header("location:admin.php");
                }
              }
            } else {
              echo "<script type='text/javascript'>alert('please check Email-id or Password');</script>";
            }
          }

          ?>
          <br> <a class="d-block small" href="forgot-password_admin.php">Forgot Password?</a> <br>
          <input type="checkbox" name="rem"><label>Remember Me</label>
      </div>
    </div>
  </div>
  </form>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>