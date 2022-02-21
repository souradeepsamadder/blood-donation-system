 <?php
    // include(.)
    // include('../project/database/db_conn.php');
    include("../project/admin_header.php");

    ?>

 <form name="form1" method="post" onSubmit="return check(this)">

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
                                    <button><a href="donner_approve.php?c=<?php echo $row["Sno"]; ?>">Approve</a></button>
                                </td>
                                <td>
                                    <button><a href="donner_reject.php?c=<?php echo $row["Sno"]; ?>">Rejected</a></button>

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