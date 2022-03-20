

<?php
// include(.)

// include('../project/database/db_conn.php');
include("../project/admin_header.php");

?>

<form name="form1">

    <!-- Area Chart Example-->

    <!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header">
            <center><b>CAMP</b></center>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>

                        <th>Sl No</th>
                            <th>CAMP NAME</th>
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
                        $sq = "select * from camp where Status='pending'";
                        $cres = mysqli_query($conn, $sq);
                        while ($row = mysqli_fetch_assoc($cres)) { ?>
                            <tr>
                                <td><?php echo $c; ?></td>
                                <td><?php echo $row["Name"]; ?></td>
                                <td><?php echo $row["Email"]; ?></td>
                                <td><?php echo $row["Phone"]; ?></td>
                                <td><?php echo $row["Date"] ?></td>
                                <td>
                                    <button><a href="camp_approve.php?c=<?php echo $row["Slno"]; ?>">Approve</a></button>
                                </td>
                                <td>
                                    <button><a href="camp_reject.php?c=<?php echo $row["Slno"]; ?>">Rejected</a></button>

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