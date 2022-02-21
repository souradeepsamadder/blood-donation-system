<?php
include("../project/admin_header.php");
include("../project/database/db_conn.php");
?>

<!-- Icon Cards-->
<script src="check.js"></script>
<!-- <script language="javascript"> -->

<!-- </script> -->

<div class="card card-register mx-auto mt-5">
    <div class="card-header"><b>
            <center>ENTER DETAILS HERE</center>
        </b></div>
    <div class="card-body">
        <form name="form" method="post" onSubmit="return check(this)">

            <div class="form-group">
                <div class="form-row">
                    <div class="col-md-12">
                        <div class="form-label-group">
                            <input type="text" id="name" class="form-control" placeholder="Name" required="required" name="n" onkeyup="check_name(this.value)">
                            <label for="name">Name</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-md-12">
                        <div class="form-label-group">
                            <input type="email" id="email" class="form-control" placeholder="Email Id" required="required" name="eid" onkeyup="check_email(this.value)">
                            <label for="email">Email Id</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-md-12">
                        <div class="form-label-group">
                            <input type="text" id="phno" class="form-control" placeholder="Phone No" required="required" name="mob" maxlength="10" onkeyup="check_phone_number(this.value)">
                            <label for="phno">Mobile No</label>
                        </div>
                    </div>

                </div>
            </div>
            <label class="radio-inline">
                <lable>
                    Gender&nbsp;&nbsp;&nbsp;&nbsp;
                </lable>
                <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="Male" checked>&nbsp; Male&nbsp;&nbsp;
            </label>
            <label class="radio-inline">
                <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="Female">&nbsp; Female&nbsp;&nbsp;
            </label>
            <label class="radio-inline">
                <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline3" value="Other">&nbsp; Other
            </label>  
            <div class="form-group">
                <div class="form-label-group">
                    <input type="submit" class="btn btn-primary btn-block" value="Add New Admin" name="add_admin">

                </div>
            </div>
        </form>
    </div>
</div>
<br><br>
<?php
if (isset($_POST['add_admin'])) {
    $n = $_POST['n'];
    $eid = $_POST['eid'];
    $gen = $_POST['optionsRadiosInline'];
    $phno = $_POST['mob'];
    $cq = "select * from aadmin where Email='" . $eid . "' or Phno='" . $phno . "'";
    $result = mysqli_query($conn, $cq);
    $r = mysqli_num_rows($result);

    if ($r) {
        echo "<script type='text/javascript'>alert('Email Id or Mobile Number already Registered');</script>";
    } else {
        $query = "insert into admin values('','$n','$eid','$phno','$gen')";
        if (mysqli_query($conn, $query)) {
            echo "<script type='text/javascript'>alert('Adding successful');</script>";
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }
    }
}
?>
<form name="form2" method="post">

    <!-- Area Chart Example-->

    <!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header">
            <center><b>ADMIN DETAILS</b></center>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>

                            <th>Sl No</th>
                            <th>Name</th>
                            <th>Email id</th>
                            <th>Mobile no</th>
                            <th>Gender</th>
                            <th>Delete</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php
                        $c = 1;
                        $sq = "select * from admin order by Name";
                        $cres = mysqli_query($conn, $sq);
                        while ($row = mysqli_fetch_assoc($cres)) { ?>
                            <tr>
                                <td><?php echo $c ?></td>
                                <td><?php echo $row["Name"]; ?></td>
                                <td><?php echo $row["Email"] ?></td>
                                <td><?php echo $row["Phno"]; ?></td>
                                <td><?php echo $row["Gender"]; ?></td>
                                <td align="center"><a href="delete_admin.php?del=<?php echo $row["Email"]; ?>"><img height="25px" src="./image/delete-confirmation.gif"></i></a></td>
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
</div>