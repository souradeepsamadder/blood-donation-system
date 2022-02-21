<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* * {
            margin: 0;
            padding: 0;
        } */

        body {
            background-color: gray;
            /* opacity: ; */
        }

        header {
            background-color: black;
            opacity: .5;
            padding: 30px;
            color: white;
            height: auto;
            width: 600px;
            /* margin-left: auto;
            margin-top: auto; */
            margin: auto;
            border-radius: 40px;
            border: 1px solid greenyellow;
            box-shadow: 3px 4px 15px 2px rgb(11, 118, 118);
            /* font-: ; */

        }

        .hr {
            /* border:10px solid ; */

            height: 2px;
            border-radius: 40px;
            background: linear-gradient(to right, #cc99ff 46%, #ff99cc 100%);
        }

        .otp {
            margin: 0px 40%;
            border: 2px solid green;
            border-radius: 30px;
            padding: 10px;
            font-size: 2rem;
        }

        p {
            color: #ffffff;
            font-size: 20px
        }

        @media only screen and (max-width: 600px) {
            header {
                height: auto;
                width: auto;
            }

            .otp {
                padding: 0px;
            }
        }
    </style>
</head>

<body>
    <header>
        <center>
            <h1>Blood Donation Camp </br> Login Code</h1>
            <div class="hr">
                <!-- sourad -->
            </div>
            <p>
                This is your otp dont shear with no one
            </p>
            <p>
                use the code to log in your account:
            <p class="otp">
                <?php
                echo $number = mt_rand(1111, 9999);
                ?>
            </p>
            <p>
                this code will expried in 2 min.
            </p>
        </center>

    </header>

</body>

</html>




<!-- for the app -->
<form name="form1">

    <!-- Area Chart Example-->

    <!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header">
            <center><b>DONNER DETAILS</b></center>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>

                            <th>Sl No</th>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Blood Group</th>
                            <th>Gender</th>
                            <th>Email</th>
                            <th>Phone number</th>
                            <th>Date</th>
                            <th>Approval</th>
                            <th>Rejected</th>

                        </tr>
                    </thead>

                    <tbody>

                        <?php
                        $c = 1;
                        $sq = "select * from donner where Status='pending'";
                        $cres = mysqli_query($conn, $sq);
                        while ($row = mysqli_fetch_assoc($cres)) { ?>
                            <tr>
                                <td><?php echo $c; ?></td>
                                <td><?php echo $row["Name"]; ?></td>
                                <td><?php echo $row["Age"]; ?></td>
                                <td><?php echo $row["Blood"]; ?></td>
                                <td><?php echo $row["Gender"]; ?></td>
                                <td><?php echo $row["Email"]; ?></td>
                                <td><?php echo $row["Phone"]; ?></td>
                                <td><?php echo $row["Date"] ?></td>
                                <td>
                                    <button><a href="approve_all.php?c=<?php echo $row["Sno"]; ?>">Approve</a></button>
                                </td>
                                <td>
                                    <button><a href="reject_all.php?c=<?php echo $row["Sno"]; ?>">Rejected</a></button>

                                </td>
                            </tr>
                        <?php
                            $c++;
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</form>
<form name="form1">

    <!-- Area Chart Example-->

    <!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header">
            <center><b>DONNER DETAILS</b></center>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>

                            <th>Sl No</th>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Blood Group</th>
                            <th>Gender</th>
                            <th>Email</th>
                            <th>Phone number</th>
                            <th>Date</th>
                            <th>Approval</th>
                            <th>Rejected</th>

                        </tr>
                    </thead>

                    <tbody>

                        <?php
                        $c = 1;
                        $sq = "select * from donner where Status='pending'";
                        $cres = mysqli_query($conn, $sq);
                        while ($row = mysqli_fetch_assoc($cres)) { ?>
                            <tr>
                                <td><?php echo $c; ?></td>
                                <td><?php echo $row["Name"]; ?></td>
                                <td><?php echo $row["Age"]; ?></td>
                                <td><?php echo $row["Blood"]; ?></td>
                                <td><?php echo $row["Gender"]; ?></td>
                                <td><?php echo $row["Email"]; ?></td>
                                <td><?php echo $row["Phone"]; ?></td>
                                <td><?php echo $row["Date"] ?></td>
                                <td>
                                    <button><a href="approve_all.php?c=<?php echo $row["Sno"]; ?>">Approve</a></button>
                                </td>
                                <td>
                                    <button><a href="reject_all.php?c=<?php echo $row["Sno"]; ?>">Rejected</a></button>

                                </td>
                            </tr>
                        <?php
                            $c++;
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</form