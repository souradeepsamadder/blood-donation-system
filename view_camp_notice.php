<?php
include("../project/donner_header.php");
// include("../project/database/db_conn.php");
$donor = $_SESSION["d"];
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
                            <th>Camp Name</th>
                            <th>Title</th>
                            <th>Notice</th>
                            <th>Held Time</th>
                            <th>held Date</th>
                            <th>Venue</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $c = 1;
                        $sq = "select * from camp_notice ";
                        $cres = mysqli_query($conn, $sq);
                        while ($row = mysqli_fetch_assoc($cres)) {
                            // $dat = strtotime($row["Date"]);
                            // $dat1 = date("d-m-Y", $dat);
                        $name = $row["Cid"];
                        ?>
                            <tr>
                                <td><?php echo $c ?></td>
                                <td>
                                    <?php 
                                    $sqli="select Name from camp where Slno='$name'";
                                    $row1=mysqli_query($conn,$sqli);
                                    $result=mysqli_fetch_assoc($row1);
                                    echo $result["Name"]; ?>
                                </td>
                                <td><?php echo $row["Title"]; ?></td>
                                <td><?php echo $row["Notice"]; ?></td>
                                <td><?php echo $row["Held_date"]; ?></td>
                                <td><?php echo $row["Held_time"]; ?></td>
                                <td><?php echo $row["venue"]; ?></td>
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