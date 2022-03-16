<?php
include("../project/donner_header.php");
// include("../project/database/db_conn.php");
$donor = $_SESSION["d"];
?>
<form name="form2" class="" method="post">

    <!-- Area Chart Example-->

    <!-- DataTables Example -->
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
                            <th>Date</th>
                            <th>Time</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $c = 1;
                        $sq = "select * from camp_notice order by Date desc,Time desc";
                        $cres = mysqli_query($conn, $sq);
                        while ($row = mysqli_fetch_assoc($cres)) {
                            $dat = strtotime($row["Date"]);
                            $dat1 = date("d-m-Y", $dat);
                        ?>
                            <tr>
                                <td><?php echo $c ?></td>
                                <!-- <td><?php echo $na ?></td> -->
                                <td><?php echo $row[""]; ?></td>
                                <td><?php echo $row[""]; ?></td>
                                <td><?php echo $row[""]; ?></td>
                                <td><?php echo $row[""]; ?></td>
                                <td><?php echo $row[""]; ?></td>
                                <td><?php echo $row[""]; ?></td>
                                <td><?php echo $row[""]; ?></td>
                                <td><?php echo $row[""]; ?></td>

                                <!-- <td><?php echo $dat1; ?></td> -->
                                <!-- <td><?php echo $row[""]; ?></td> -->
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