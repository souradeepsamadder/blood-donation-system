<?php
include("../project/hospital_header.php");
$hospital = $_SESSION["hospital"];
date_default_timezone_set('Asia/Kolkata');
$dt = date("Y-m-d");
$ti = date("H:i:s");
?>

<form name="form2" class="" method="post">
    <div class="card mb-3 ">
        <div class="card-header ">
            <center><b>NOTICE DETAILS</b></center>
        </div>
        <div class="card-body ">
            <div class="table-responsive ">
                <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Sl No</th>
                            <th>Hospital Name</th>
                            <th>Title</th>
                            <!-- <th>Notice</th> -->
                            <th>Held Time</th>
                            <th>Held Date</th>
                            <th>Venue</th>
                            <th>Department</th>
                            <!-- <th>Blood Group</th> -->

                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $c = 1;
                        $sq = "select * from hospital_notice ";
                        $cres = mysqli_query($conn, $sq);
                        while ($row = mysqli_fetch_assoc($cres)) {
                            // $dat = strtotime($row["Held_date"]);
                            // $date1 = date("d-m-Y", $dat);
                            // $name = $row["Cid"];
                        ?>
                            <tr>
                                <td><?php echo $c ?></td>
                                <td>
                                    <?php
                                    $sqli = "select Name from hospital where Slno='$hospital'";
                                    $row1 = mysqli_query($conn, $sqli);
                                    $result = mysqli_fetch_assoc($row1);
                                    echo $result["Name"]; ?>
                                </td>
                                <td><?php echo $row["Title"]; ?></td>
                                <!-- <td><?php echo $row["Notice"]; ?></td> -->
                                <td><?php echo $row["Held_date"]; ?></td>
                                <td><?php echo $row["Held_time"]; ?></td>
                                <td><?php echo $row["Venue"]; ?></td>
                                <td><?php echo $row["Department"]; ?></td>
                                <!-- <td><?php echo $row["Blood_group"]; ?></td> -->
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