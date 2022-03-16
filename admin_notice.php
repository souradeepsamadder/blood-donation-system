<?php
include("../project/admin_header.php");

include('../project/database/db_conn.php');
// $sql = "select * from aadmin where email='" . $e . "'";
// $s = mysqli_query($conn, $sql);
// $rps = mysqli_fetch_assoc($s);
// $na = $rps["Name"];
// $aid = $rps["Aid"];
date_default_timezone_set('Asia/Kolkata');
$dt = date("Y-m-d");
$ti = date("H:i:s");
?>
<script>
    function showdata(str) {
        // if (str == "") {
        //     document.getElementById("").innerHTML = "";
        //     return;
        // }
        if (str == "select Opction") {
            document.getElementById("sas").style.display = "none";
        } else if (str == "All") {
            document.getElementById("sas").style.display = "none";
        } else {
            document.getElementById("sas").style.display = "block";
        }
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("course").innerHTML = this.responseText;
            }
        }
        xhttp.open("GET", "get_data.php?q=" + str, true);
        xhttp.send();


    }


    function selects() {
        if (document.getElementById("sas1").checked) {
            document.getElementById("course").style.display = "none";
            // document.getElementById("course").style.display = "checked";

        } else {
            document.getElementById("course").style.display = "block";
        }
    }
</script>
<div class="card card-register mx-auto mt-5">
    <div class="card-header"><b>
            <center>NOTICE</center>
        </b></div>
    <div class="card-body">
        <form name="form" method="post" onSubmit="return check(this)">

            <div class="form-group">
                <div class="form-row">
                    <div class="col-md-12">
                        <div class="form-label-group">
                            <input type="text" id="title" class="form-control" placeholder="title" required="required" name="title" autofocus>
                            <label for="title">Title</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-md-12">
                        <div class="form-label-group">
                            <textarea type="text" id="notice" class="form-control" placeholder="notice" required="required" name="noti"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-md-12">
                        <div class="form-label-group">
                            <select class="form-control" name="cou" onchange="showdata(this.value)" id="cou_name">
                                <option>select Option</option>
                                <option>All</option>
                                <?php
                                $sql = "select distinct(C_name) from course";
                                $res = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_assoc($res)) {
                                    $cou = $row['C_name'];
                                    // echo $cou;
                                ?>
                                    <option><?php echo $cou; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                            <div id="sas" style="display: none;">
                                <input type="checkbox" name="select_all" id="sas1" onclick="selects()">&nbsp;<label for="vehicle3">select all</label></br>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div id="course">
            </div>
    </div>
    <div class="form-group">
        <div class="col-md-12">

            <div class="form-label-group">
                <input type="submit" class="btn btn-primary btn-block" value="Add Notice" name="add">
            </div>
        </div>

    </div>
    </form>
</div>
</div>
<br><br><br>
<?php
if (isset($_POST['add'])) {
    $title = $_POST['title'];
    $course = $_POST['cou'];
    $noti = $_POST['noti'];
    // $val2 = $_POST['select_all_student'];

    // echo $course;
    // echo $val;

    if ($course == 'All') {
        $val = $_POST["check"];
        $co = count($val);
        for ($i = 0; $i < $co; $i++) {
            // echo $val[$i];
            $co1 = "select * from donner where Sid='$val[$i]'";
            $rco = mysqli_query($conn, $co1);
            $roco = mysqli_fetch_assoc($rco);
            // $cou = $roco["cenc"];
            // echo $cou;
            // echo $val[$i];
            $sql = "insert into notice values('','$aid','$dt','$ti','$title','$noti','$cou','$val[$i]')";

            if (mysqli_query($conn, $sql)) {
                // $message = "Adding successful ";
                // echo "<script type='text/javascript'>alert('$message');</script>";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }

        $sqlstu = "select Email from student";
        $rowstu = mysqli_query($conn, $sqlstu);
        while ($rstu = mysqli_fetch_assoc($rowstu)) {
            // ini_set('max_execution_time', '300'); 
            // echo $restu;n
            set_time_limit(300);
            $to_email = $rstu['Email'];
            $subject = "Admin notice";
            $body = $noti;
            $headers = "From: souradeepsamadder@gmail.com";
            if (mail($to_email, $subject, $body, $headers)) {
            } else {
                echo "<script type='text/javascript'>alert('mail not send');</script>";
            }
        }
        $sqltea = "select Email from teacher";
        $rowtea = mysqli_query($conn, $sqltea);
        while ($rtea = mysqli_fetch_assoc($rowtea)) {
            set_time_limit(300);
            $to_email = $rtea['Email'];
            $subject = "Admin notice";
            $body = "$noti";
            $headers = "From: souradeepsamadder@gmail.com";
            if (mail($to_email, $subject, $body, $headers)) {
            } else {
                echo "<script type='text/javascript'>alert('mail not send');</script>";
            }
        }
    } else {

        if (isset($_POST['select_all_student'])) {

            // echo $val[$i];
            // $val = $_POST["check"];
            // $co = count($val);
            $co1 = "select * from student where cenc='$course'";
            $rco = mysqli_query($conn, $co1);
            $roco = mysqli_fetch_assoc($rco);
            $cou = $roco["cenc"];
            // echo $cou;
            // echo $val[$i];
            $sql = "insert into notice values('','$aid','$dt','$ti','$title','$noti','$cou','')";

            if (mysqli_query($conn, $sql)) {
                // $message = "Adding successful ";
                // echo "<script type='text/javascript'>alert('$message');</script>";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            $sqlstu = "select Email from student where cenc='$course'";
            $rowstu = mysqli_query($conn, $sqlstu);
            while ($rstu = mysqli_fetch_assoc($rowstu)) {
                // ini_set('max_execution_time', '300'); 
                // echo $rstu['Email'];
                set_time_limit(300);
                $to_email = $rstu['Email'];
                $subject = "Admin notice";
                $body = $noti;
                $headers = "From: souradeepsamadder@gmail.com";
                if (mail($to_email, $subject, $body, $headers)) {
                } else {
                    echo "<script type='text/javascript'>alert('mail not send');</script>";
                }
            }
            $sqltea = "select Email from teacher where cenc='$course'";
            $rowtea = mysqli_query($conn, $sqltea);
            while ($rtea = mysqli_fetch_assoc($rowtea)) {
                set_time_limit(300);
                $to_email = $rtea['Email'];
                $subject = "Admin notice";
                $body = "$noti";
                $headers = "From: souradeepsamadder@gmail.com";
                if (mail($to_email, $subject, $body, $headers)) {
                } else {
                    echo "<script type='text/javascript'>alert('mail not send');</script>";
                }
            }
        } else {
            $val = $_POST["check"];
            $co = count($val);
            // echo $co;
            for ($i = 0; $i < $co; $i++) {
                $sql = "insert into notice values('','$aid','$dt','$ti','$title','$noti','$course','$val[$i]')";

                if (mysqli_query($conn, $sql)) {
                    // $message = "Adding successful ";
                    // echo "<script type='text/javascript'>alert('$message');</script>";
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
                $sqlstu = "select Email from student where Sid='$val[$i]'";
                $rowstu = mysqli_query($conn, $sqlstu);
                $rstu = mysqli_fetch_assoc($rowstu);
                // ini_set('max_execution_time', '300');
                // echo $rstu['Email'];
                set_time_limit(300);
                $to_email = $rstu['Email'];
                $subject = "Admin notice";
                $body = $noti;
                $headers = "From: souradeepsamadder@gmail.com";
                if (mail($to_email, $subject, $body, $headers)) {
                } else {
                    echo "<script type='text/javascript'>alert('mail not send');</script>";
                }
                $sqltea = "select Email from teacher where cenc='$course'";
                $rowtea = mysqli_query($conn, $sqltea);
                $rtea = mysqli_fetch_assoc($rowtea);
                set_time_limit(300);
                $to_email = $rtea['Email'];
                $subject = "Admin notice";
                $body = "$noti";
                $headers = "From: souradeepsamadder@gmail.com";
                if (mail($to_email, $subject, $body, $headers)) {
                } else {
                    echo "<script type='text/javascript'>alert('mail not send');</script>";
                }
            }
        }
    }
}

?>
