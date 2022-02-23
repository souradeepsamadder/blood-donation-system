<?php
include('../project/database/db_conn.php');
// session_start();
// $donner = $_SESSION["donner"];
// if (empty($_SESSION["amdin"])) {
//   echo "<script type='text/javascript'> alert('Please Login'); </script>";
// 
?>
<script type="text/javascript">
    //     window.location.href = 'home_page.php';
    //   
</script>
<?php
// }
// 
?>
<script>
    // function add_admin() {
    //   var xhttp = new XMLHttpRequest();
    //   xhttp.onreadystatechange = function() {
    //     if (this.readyState == 4 && this.status == 200) {
    //       document.getElementById("demo").innerHTML =
    //         this.responseText;
    //     }
    //   };
    //   xhttp.open("GET", "add_admin_php", true);
    //   xhttp.send();
    // }
</script>
<!DOCTYPE html>
<html lang="en">
<style type="text/css">
    .back {
        background: #cccccc;
    }
</style>

<head>
    <link rel="icon" href="./image/187-suitcase-outline.gif">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blood Donation Camp Organiser </title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top" class="back">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

        <a class="navbar-brand mr-1" href="donner.php">WELCOME donner</a>

        <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Navbar Search -->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div class="input-group">

                <div class="input-group-append">


                </div>
            </div>
        </form>
        <?php
        // $sq = "select * from aadmin where Email='" . $e . "' ";
        // $r = mysqli_query($conn, $sq);
        // $rps = mysqli_fetch_assoc($r);
        // $na = $rps["Name"];
        ?>
        <!-- Navbar -->
        <font color="white">
            <?php
            echo $na;
            ?>
        </font>
        <ul class="navbar-nav ml-auto ml-md-0">


            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img width="25px" src="./image/people.gif">
                </a>
                <!-- gghdshf -->

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">

                    <!-- <a class="dropdown-item" href="changepassword.php">Change Password</a> -->
                    <a class="dropdown-item" href="adminlogin.php">Logout</a>
                </div>

            </li>
        </ul>
        <!-- <div class="hi"></div> -->

    </nav>

    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="sidebar navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="donner.php">
                    <img width="25px" src="./image/dashbord2.gif">
                    <span><b>DASHBOARD</b></span>
                </a>
            </li>
            <li class="nav-item active">
                <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown"><img width="25px" src="./image/add.gif"><span><b>&nbsp;NOTICE</b></span></a>
                <div class="dropdown-menu">
                    <a href="hospital_notice.php" class="dropdown-item">
                        <img width="25px" src="./image/people2.gif">
                        <span><b>&nbsp;HOSPITAL</b></span></a>
                    <a href="camp_notice.php" class="dropdown-item">
                        <img width="25px" src="./image/people2.gif">
                        <span><b>&nbsp;CAMP</b></span></a>
                    <a href="notice_admin.php" class="dropdown-item">
                        <img width="25px" src="./image/people2.gif">
                        <span><b>&nbsp;ADMIN</b></span></a>
                </div>
            </li>
        </ul>

        <div id="content-wrapper">

            <div class="container-fluid">

                <!-- Breadcrumbs-->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="donner.php">DASHBOARD</a>
                    </li>
                    <li class="breadcrumb-item active">OVERVIEW</li>
                </ol>
                <a class="scroll-to-top rounded" href="#page-top">
                    <i class="fas fa-angle-up"></i>
                </a>
                <!-- Logout Modal-->
                <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">�</span>
                                </button>
                            </div>
                            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                <a class="btn btn-primary" href="facultylogin.php">Logout</a>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bootstrap core JavaScript-->
                <script src="vendor/jquery/jquery.min.js"></script>
                <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

                <!-- Core plugin JavaScript-->
                <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

                <!-- Page level plugin JavaScript-->
                <!-- <script src="vendor/chart.js/Chart.min.js"></script> -->
                <script src="vendor/datatables/jquery.dataTables.js"></script>
                <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

                <!-- Custom scripts for all pages-->
                <script src="js/sb-admin.min.js"></script>

                <!-- Demo scripts for this page-->
                <script src="js/demo/datatables-demo.js"></script>
                <!-- <script src="js/demo/chart-area-demo.js"></script> -->