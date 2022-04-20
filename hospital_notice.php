<?php
include("../project/hospital_header.php");
$hospital = $_SESSION["hospital"];

// $sql12 = "select * from hospital where Slno='$hospital'";
// $result3 = (mysqli_query($conn, $sql12));
// $data3 = mysqli_fetch_assoc($result3);
// $hospital = $data3['Slno'];
// echo $hospital;
date_default_timezone_set('Asia/Kolkata');
$dt = date("Y-m-d");
$ti = date("H:i:s");
?>

<div class="card card-register mx-auto mt-5 ">
    <div class="card-header "><b>
            <center>NOTICE</center>
        </b></div>
    <div class="card-body ">
        <form name="form" method="post" onSubmit="return check(this)">

            <div class="form-group">
                <div class="form-row">
                    <div class="col-md-12">
                        <div class="form-label-group">
                            <input type="text" id="title" class="form-control" placeholder="title" required="required" name="title">
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
                            <!-- <label for="notice">Add File</label> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-label-group">
                            <input type="date" id="f" class="form-control" placeholder="title" required="required" name="date">
                            <label for="date">Date</label>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-label-group">
                            <input type="time" id="time" class="form-control" placeholder="title" required="required" name="time">
                            <label for="time">Time</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-md-12">
                        <div class="form-label-group">
                            <textarea type="text" id="notice" class="form-control" placeholder="venue" required="required" name="venue"></textarea>
                            <!-- <label for="notice">Add File</label> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-md-12">
                        <div class="form-label-group">
                            <select class="form-control" name="place" onchange="showdata(this.value)" id="option">
                                <option>Select Option</option>
                                <option>Donor</option>
                                <option>Camp</option>
                            </select>
                        </div>
                    </div>

                </div>
            </div>
            <div id="blood_group" class="form-group">
                <div class="form-row">
                    <div class="col-md-12">
                        <div class="form-label-group">
                            <select class="form-control" name="blood_group" onchange="check_blood_group(this.value)" id="group">
                                <option>Select Blood Group</option>
                                <option>A+</option>
                                <option>A-</option>
                                <option>AB+</option>
                                <option>Ab-</option>
                                <option>B+</option>
                                <option>B-</option>
                                <option>O+</option>
                                <option>O-</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div id="course">
            </div>
            <div class="form-group">
                <div class="form-label-group">
                    <input type="submit" class="btn btn-primary btn-block" value="Add Notice " name="add">

                </div>
            </div>
        </form>
    </div>
</div>
<br><br><br>
<?php
if (isset($_POST['add'])) {
    $title = $_POST['title'];
    // $donor = $_POST['cou'];
    $noti = $_POST['noti'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $venue = $_POST['venue'];
    $department = $_POST['place'];
    $blood_group = $_POST['blood_group'];
    // echo ",noti:-$noti,date:-$date,time:-$time,vanue:-$venue,place$place,Blood_group$blood_group";
    $sql = "insert into hospital_notice values('','$hospital','$title','$noti','$date','$time','$venue','$department','$blood_group','$dt','$ti')";
    if (mysqli_query($conn, $sql)) {
        echo "<script type='text/javascript'>alert('The notice has been send');</script>";
    } else {
        echo "<script type='text/javascript'>alert('The notice has not been send');</script>";

    }
    if ($department == 'Donor') {
       
        // echo "<script type='text/javascript'>alert('name of the department is :- $department and the blood group is:- $blood_group');</script>";
        if ($blood_group == 'A+') {
            
            $sql3 = "select * from donner where User='donner' and Blood='A+'";
            $row3 = mysqli_query($conn, $sql3);
            $sum = mysqli_num_rows($row3);
            // $r3 = mysqli_fetch_assoc($row3);
            // $to_email = $r3['Email'];
            // echo "<script type='text/javascript'>alert('sum of the rows $to_email');</script>";
            while ($r3 = mysqli_fetch_assoc($row3)) {
                $to_email = $r3['Email'];
                $name = $r3['Name'];
                // echo "..$to_email..";
                // echo "<script type='text/javascript'>alert('sum of the rows $to_email');</script>";
                // $to_email = "souradeepsamadder1@gmail.com";
                $subject ="asking for the blood";
                set_time_limit(300);
                $headers = "From:send notification  <souradeepsamadder@gmail.com>\r\n";
                $headers .= "MIME-version: 1.0\r\n";
                $headers .= "content-Type:text/html;charset=IOS-8859-1\r\n";
                $massage = "<!DOCTYPE html>
        <html lang='en'>

        <head>

        <style>
            * {
                margin: 0;
                padding: 0;
            }

            body {
                background-color: gray;
            }

            header {
                background-color: black;
                color: white;
                opacity: .5;
                padding: 100px;
                height: auto;
                width: 600px;
                margin: auto;
                border-radius: 30px;
                border: 2px solid green;

            }
            p{
                color:#ffffff;
            }
            .hr {
                height: 2px;
                border-radius: 40px;
                background: linear-gradient(to right, #cc99ff 46%, #ff99cc 100%);
            }
            @media only screen and (max-width: 600px) {
                header {
                    height: 30%;
                    width: auto;
                    padding:25px;
                    font-size: 15px;

                }
            }
        </style>
        </head>

        <body>
            <header>
                <center>
                    <h1><b> Blood Donation Campaign</b></h1><br>
                    <div class='hr'></div>
                    <br>
                    <p>Hello <b>$name..</b> </p><br>
                    <p> We hope this mail finds you and your loved ones, safe and healthy. </p><br>
                    <p> We just wanted to give you some information about blood donation.</p><br>
                    <p> Let us together donate our blood to help the others. A little act goes a long way!</p><br>
                    <p> $noti</p></br>
                    <p><b><u> Date: $date</u></b></p><br>
                    <p><b><u>Time: $time onwards</u></b></p><br>
                    <p><b><u>Venue: $venue</u></b></p><br>

                    <div class='hr'></div>
                    <br>
                    <p>Contact: 8101008843,8637571875</p>
                    <p>Mail: snehamajumder12318@gmail.com,<br></p>
                    <p>souradeepsamadder1@gmail.com </p>
                    </div>
                </center>
            </header>
        </body>

        </html>";
                if (mail($to_email, $subject, $massage, $headers)) {
                    // echo "mail send success";
                } else {
                    echo "mail not send";
                }
            }
        } elseif ($blood_group == "A-") {
            // echo "<script type='text/javascript'>alert('name of the department is :- $department and the blood group is:- $blood_group');</script>";
            $sql3 = "select * from donner where User='donner' and Blood='A-'";
            $row3 = mysqli_query($conn, $sql3);
            $sum = mysqli_num_rows($row3);
            // $r3 = mysqli_fetch_assoc($row3);
            // $to_email = $r3['Email'];
            // echo "<script type='text/javascript'>alert('sum of the rows $to_email');</script>";
            while ($r3 = mysqli_fetch_assoc($row3)) {
                $to_email = $r3['Email'];
                $name = $r3['Name'];
                // echo "..$to_email..";
                // echo "<script type='text/javascript'>alert('sum of the rows $to_email');</script>";
                // $to_email = "souradeepsamadder1@gmail.com";
                $subject ="asking for the blood";
                set_time_limit(300);
                $headers = "From:send notification  <souradeepsamadder@gmail.com>\r\n";
                $headers .= "MIME-version: 1.0\r\n";
                $headers .= "content-Type:text/html;charset=IOS-8859-1\r\n";
                $massage = "<!DOCTYPE html>
        <html lang='en'>

        <head>

        <style>
            * {
                margin: 0;
                padding: 0;
            }

            body {
                background-color: gray;
            }

            header {
                background-color: black;
                color: white;
                opacity: .5;
                padding: 100px;
                height: auto;
                width: 600px;
                margin: auto;
                border-radius: 30px;
                border: 2px solid green;

            }
            p{
                color:#ffffff;
            }
            .hr {
                height: 2px;
                border-radius: 40px;
                background: linear-gradient(to right, #cc99ff 46%, #ff99cc 100%);
            }
            @media only screen and (max-width: 600px) {
                header {
                    height: 30%;
                    width: auto;
                    padding:25px;
                    font-size: 15px;

                }
            }
        </style>
        </head>

        <body>
            <header>
                <center>
                    <h1><b> Blood Donation Campaign</b></h1><br>
                    <div class='hr'></div>
                    <br>
                    <p>Hello <b>$name..</b> </p><br>
                    <p> We hope this mail finds you and your loved ones, safe and healthy. </p><br>
                    <p> We just wanted to give you some information about blood donation.</p><br>
                    <p> Let us together donate our blood to help the others. A little act goes a long way!</p><br>
                    <p> $noti</p></br>
                    <p><b><u> Date: $date</u></b></p><br>
                    <p><b><u>Time: $time onwards</u></b></p><br>
                    <p><b><u>Venue: $venue</u></b></p><br>

                    <div class='hr'></div>
                    <br>
                    <p>Contact: 8101008843,8637571875</p>
                    <p>Mail: snehamajumder12318@gmail.com,<br></p>
                    <p>souradeepsamadder1@gmail.com </p>
                    </div>
                </center>
            </header>
        </body>

        </html>";
                if (mail($to_email, $subject, $massage, $headers)) {
                    // echo "mail send success";
                } else {
                    echo "mail not send";
                }
            }
        
        } elseif ($blood_group == "B+") {
            // echo "<script type='text/javascript'>alert('name of the department is :- $department and the blood group is:- $blood_group');</script>";
   $sql3 = "select * from donner where User='donner' and Blood='B+'";
            $row3 = mysqli_query($conn, $sql3);
            $sum = mysqli_num_rows($row3);
            // $r3 = mysqli_fetch_assoc($row3);
            // $to_email = $r3['Email'];
            // echo "<script type='text/javascript'>alert('sum of the rows $to_email');</script>";
            while ($r3 = mysqli_fetch_assoc($row3)) {
                $to_email = $r3['Email'];
                $name = $r3['Name'];
                // echo "..$to_email..";
                // echo "<script type='text/javascript'>alert('sum of the rows $to_email');</script>";
                // $to_email = "souradeepsamadder1@gmail.com";
                $subject ="asking for the blood";
                set_time_limit(300);
                $headers = "From:send notification  <souradeepsamadder@gmail.com>\r\n";
                $headers .= "MIME-version: 1.0\r\n";
                $headers .= "content-Type:text/html;charset=IOS-8859-1\r\n";
                $massage = "<!DOCTYPE html>
        <html lang='en'>

        <head>

        <style>
            * {
                margin: 0;
                padding: 0;
            }

            body {
                background-color: gray;
            }

            header {
                background-color: black;
                color: white;
                opacity: .5;
                padding: 100px;
                height: auto;
                width: 600px;
                margin: auto;
                border-radius: 30px;
                border: 2px solid green;

            }
            p{
                color:#ffffff;
            }
            .hr {
                height: 2px;
                border-radius: 40px;
                background: linear-gradient(to right, #cc99ff 46%, #ff99cc 100%);
            }
            @media only screen and (max-width: 600px) {
                header {
                    height: 30%;
                    width: auto;
                    padding:25px;
                    font-size: 15px;

                }
            }
        </style>
        </head>

        <body>
            <header>
                <center>
                    <h1><b> Blood Donation Campaign</b></h1><br>
                    <div class='hr'></div>
                    <br>
                    <p>Hello <b>$name..</b> </p><br>
                    <p> We hope this mail finds you and your loved ones, safe and healthy. </p><br>
                    <p> We just wanted to give you some information about blood donation.</p><br>
                    <p> Let us together donate our blood to help the others. A little act goes a long way!</p><br>
                    <p> $noti</p></br>
                    <p><b><u> Date: $date</u></b></p><br>
                    <p><b><u>Time: $time onwards</u></b></p><br>
                    <p><b><u>Venue: $venue</u></b></p><br>

                    <div class='hr'></div>
                    <br>
                    <p>Contact: 8101008843,8637571875</p>
                    <p>Mail: snehamajumder12318@gmail.com,<br></p>
                    <p>souradeepsamadder1@gmail.com </p>
                    </div>
                </center>
            </header>
        </body>

        </html>";
                if (mail($to_email, $subject, $massage, $headers)) {
                    // echo "mail send success";
                } else {
                    echo "mail not send";
                }
            }
        } elseif ($blood_group == "B-") {
            // echo "<script type='text/javascript'>alert('name of the department is :- $department and the blood group is:- $blood_group');</script>";
   $sql3 = "select * from donner where User='donner' and Blood='B-'";
            $row3 = mysqli_query($conn, $sql3);
            $sum = mysqli_num_rows($row3);
            // $r3 = mysqli_fetch_assoc($row3);
            // $to_email = $r3['Email'];
            // echo "<script type='text/javascript'>alert('sum of the rows $to_email');</script>";
            while ($r3 = mysqli_fetch_assoc($row3)) {
                $to_email = $r3['Email'];
                $name = $r3['Name'];
                // echo "..$to_email..";
                // echo "<script type='text/javascript'>alert('sum of the rows $to_email');</script>";
                // $to_email = "souradeepsamadder1@gmail.com";
                $subject ="asking for the blood";
                set_time_limit(300);
                $headers = "From:send notification  <souradeepsamadder@gmail.com>\r\n";
                $headers .= "MIME-version: 1.0\r\n";
                $headers .= "content-Type:text/html;charset=IOS-8859-1\r\n";
                $massage = "<!DOCTYPE html>
        <html lang='en'>

        <head>

        <style>
            * {
                margin: 0;
                padding: 0;
            }

            body {
                background-color: gray;
            }

            header {
                background-color: black;
                color: white;
                opacity: .5;
                padding: 100px;
                height: auto;
                width: 600px;
                margin: auto;
                border-radius: 30px;
                border: 2px solid green;

            }
            p{
                color:#ffffff;
            }
            .hr {
                height: 2px;
                border-radius: 40px;
                background: linear-gradient(to right, #cc99ff 46%, #ff99cc 100%);
            }
            @media only screen and (max-width: 600px) {
                header {
                    height: 30%;
                    width: auto;
                    padding:25px;
                    font-size: 15px;

                }
            }
        </style>
        </head>

        <body>
            <header>
                <center>
                    <h1><b> Blood Donation Campaign</b></h1><br>
                    <div class='hr'></div>
                    <br>
                    <p>Hello <b>$name..</b> </p><br>
                    <p> We hope this mail finds you and your loved ones, safe and healthy. </p><br>
                    <p> We just wanted to give you some information about blood donation.</p><br>
                    <p> Let us together donate our blood to help the others. A little act goes a long way!</p><br>
                    <p> $noti</p></br>
                    <p><b><u> Date: $date</u></b></p><br>
                    <p><b><u>Time: $time onwards</u></b></p><br>
                    <p><b><u>Venue: $venue</u></b></p><br>

                    <div class='hr'></div>
                    <br>
                    <p>Contact: 8101008843,8637571875</p>
                    <p>Mail: snehamajumder12318@gmail.com,<br></p>
                    <p>souradeepsamadder1@gmail.com </p>
                    </div>
                </center>
            </header>
        </body>

        </html>";
                if (mail($to_email, $subject, $massage, $headers)) {
                    // echo "mail send success";
                } else {
                    echo "mail not send";
                }
            }
        } elseif ($blood_group == "O+") {
            // echo "<script type='text/javascript'>alert('name of the department is :- $department and the blood group is:- $blood_group');</script>";
   $sql3 = "select * from donner where User='donner' and Blood='O+'";
            $row3 = mysqli_query($conn, $sql3);
            $sum = mysqli_num_rows($row3);
            // $r3 = mysqli_fetch_assoc($row3);
            // $to_email = $r3['Email'];
            // echo "<script type='text/javascript'>alert('sum of the rows $to_email');</script>";
            while ($r3 = mysqli_fetch_assoc($row3)) {
                $to_email = $r3['Email'];
                $name = $r3['Name'];
                // echo "..$to_email..";
                // echo "<script type='text/javascript'>alert('sum of the rows $to_email');</script>";
                // $to_email = "souradeepsamadder1@gmail.com";
                $subject ="asking for the blood";
                set_time_limit(300);
                $headers = "From:send notification  <souradeepsamadder@gmail.com>\r\n";
                $headers .= "MIME-version: 1.0\r\n";
                $headers .= "content-Type:text/html;charset=IOS-8859-1\r\n";
                $massage = "<!DOCTYPE html>
        <html lang='en'>

        <head>

        <style>
            * {
                margin: 0;
                padding: 0;
            }

            body {
                background-color: gray;
            }

            header {
                background-color: black;
                color: white;
                opacity: .5;
                padding: 100px;
                height: auto;
                width: 600px;
                margin: auto;
                border-radius: 30px;
                border: 2px solid green;

            }
            p{
                color:#ffffff;
            }
            .hr {
                height: 2px;
                border-radius: 40px;
                background: linear-gradient(to right, #cc99ff 46%, #ff99cc 100%);
            }
            @media only screen and (max-width: 600px) {
                header {
                    height: 30%;
                    width: auto;
                    padding:25px;
                    font-size: 15px;

                }
            }
        </style>
        </head>

        <body>
            <header>
                <center>
                    <h1><b> Blood Donation Campaign</b></h1><br>
                    <div class='hr'></div>
                    <br>
                    <p>Hello <b>$name..</b> </p><br>
                    <p> We hope this mail finds you and your loved ones, safe and healthy. </p><br>
                    <p> We just wanted to give you some information about blood donation.</p><br>
                    <p> Let us together donate our blood to help the others. A little act goes a long way!</p><br>
                    <p> $noti</p></br>
                    <p><b><u> Date: $date</u></b></p><br>
                    <p><b><u>Time: $time onwards</u></b></p><br>
                    <p><b><u>Venue: $venue</u></b></p><br>

                    <div class='hr'></div>
                    <br>
                    <p>Contact: 8101008843,8637571875</p>
                    <p>Mail: snehamajumder12318@gmail.com,<br></p>
                    <p>souradeepsamadder1@gmail.com </p>
                    </div>
                </center>
            </header>
        </body>

        </html>";
                if (mail($to_email, $subject, $massage, $headers)) {
                    // echo "mail send success";
                } else {
                    echo "mail not send";
                }
            }
        } elseif ($blood_group == "O-") {
            // echo "<script type='text/javascript'>alert('name of the department is :- $department and the blood group is:- $blood_group');</script>";
   $sql3 = "select * from donner where User='donner' and Blood='O-'";
            $row3 = mysqli_query($conn, $sql3);
            $sum = mysqli_num_rows($row3);
            // $r3 = mysqli_fetch_assoc($row3);
            // $to_email = $r3['Email'];
            // echo "<script type='text/javascript'>alert('sum of the rows $to_email');</script>";
            while ($r3 = mysqli_fetch_assoc($row3)) {
                $to_email = $r3['Email'];
                $name = $r3['Name'];
                // echo "..$to_email..";
                // echo "<script type='text/javascript'>alert('sum of the rows $to_email');</script>";
                // $to_email = "souradeepsamadder1@gmail.com";
                $subject ="asking for the blood";
                set_time_limit(300);
                $headers = "From:send notification  <souradeepsamadder@gmail.com>\r\n";
                $headers .= "MIME-version: 1.0\r\n";
                $headers .= "content-Type:text/html;charset=IOS-8859-1\r\n";
                $massage = "<!DOCTYPE html>
        <html lang='en'>

        <head>

        <style>
            * {
                margin: 0;
                padding: 0;
            }

            body {
                background-color: gray;
            }

            header {
                background-color: black;
                color: white;
                opacity: .5;
                padding: 100px;
                height: auto;
                width: 600px;
                margin: auto;
                border-radius: 30px;
                border: 2px solid green;

            }
            p{
                color:#ffffff;
            }
            .hr {
                height: 2px;
                border-radius: 40px;
                background: linear-gradient(to right, #cc99ff 46%, #ff99cc 100%);
            }
            @media only screen and (max-width: 600px) {
                header {
                    height: 30%;
                    width: auto;
                    padding:25px;
                    font-size: 15px;

                }
            }
        </style>
        </head>

        <body>
            <header>
                <center>
                    <h1><b> Blood Donation Campaign</b></h1><br>
                    <div class='hr'></div>
                    <br>
                    <p>Hello <b>$name..</b> </p><br>
                    <p> We hope this mail finds you and your loved ones, safe and healthy. </p><br>
                    <p> We just wanted to give you some information about blood donation.</p><br>
                    <p> Let us together donate our blood to help the others. A little act goes a long way!</p><br>
                    <p> $noti</p></br>
                    <p><b><u> Date: $date</u></b></p><br>
                    <p><b><u>Time: $time onwards</u></b></p><br>
                    <p><b><u>Venue: $venue</u></b></p><br>

                    <div class='hr'></div>
                    <br>
                    <p>Contact: 8101008843,8637571875</p>
                    <p>Mail: snehamajumder12318@gmail.com,<br></p>
                    <p>souradeepsamadder1@gmail.com </p>
                    </div>
                </center>
            </header>
        </body>

        </html>";
                if (mail($to_email, $subject, $massage, $headers)) {
                    // echo "mail send success";
                } else {
                    echo "mail not send";
                }
            }
        } elseif ($blood_group == "AB+") {
            // echo "<script type='text/javascript'>alert('name of the department is :- $department and the blood group is:- $blood_group');</script>";
   $sql3 = "select * from donner where User='donner' and Blood='AB+'";
            $row3 = mysqli_query($conn, $sql3);
            $sum = mysqli_num_rows($row3);
            // $r3 = mysqli_fetch_assoc($row3);
            // $to_email = $r3['Email'];
            // echo "<script type='text/javascript'>alert('sum of the rows $to_email');</script>";
            while ($r3 = mysqli_fetch_assoc($row3)) {
                $to_email = $r3['Email'];
                $name = $r3['Name'];
                // echo "..$to_email..";
                // echo "<script type='text/javascript'>alert('sum of the rows $to_email');</script>";
                // $to_email = "souradeepsamadder1@gmail.com";
                $subject ="asking for the blood";
                set_time_limit(300);
                $headers = "From:send notification  <souradeepsamadder@gmail.com>\r\n";
                $headers .= "MIME-version: 1.0\r\n";
                $headers .= "content-Type:text/html;charset=IOS-8859-1\r\n";
                $massage = "<!DOCTYPE html>
        <html lang='en'>

        <head>

        <style>
            * {
                margin: 0;
                padding: 0;
            }

            body {
                background-color: gray;
            }

            header {
                background-color: black;
                color: white;
                opacity: .5;
                padding: 100px;
                height: auto;
                width: 600px;
                margin: auto;
                border-radius: 30px;
                border: 2px solid green;

            }
            p{
                color:#ffffff;
            }
            .hr {
                height: 2px;
                border-radius: 40px;
                background: linear-gradient(to right, #cc99ff 46%, #ff99cc 100%);
            }
            @media only screen and (max-width: 600px) {
                header {
                    height: 30%;
                    width: auto;
                    padding:25px;
                    font-size: 15px;

                }
            }
        </style>
        </head>

        <body>
            <header>
                <center>
                    <h1><b> Blood Donation Campaign</b></h1><br>
                    <div class='hr'></div>
                    <br>
                    <p>Hello <b>$name..</b> </p><br>
                    <p> We hope this mail finds you and your loved ones, safe and healthy. </p><br>
                    <p> We just wanted to give you some information about blood donation.</p><br>
                    <p> Let us together donate our blood to help the others. A little act goes a long way!</p><br>
                    <p> $noti</p></br>
                    <p><b><u> Date: $date</u></b></p><br>
                    <p><b><u>Time: $time onwards</u></b></p><br>
                    <p><b><u>Venue: $venue</u></b></p><br>

                    <div class='hr'></div>
                    <br>
                    <p>Contact: 8101008843,8637571875</p>
                    <p>Mail: snehamajumder12318@gmail.com,<br></p>
                    <p>souradeepsamadder1@gmail.com </p>
                    </div>
                </center>
            </header>
        </body>

        </html>";
                if (mail($to_email, $subject, $massage, $headers)) {
                    // echo "mail send success";
                } else {
                    echo "mail not send";
                }
            }
        } elseif ($blood_group == "AB-") {
            // echo "<script type='text/javascript'>alert('name of the department is :- $department and the blood group is:- $blood_group');</script>";
   $sql3 = "select * from donner where User='donner' and Blood='AB-'";
            $row3 = mysqli_query($conn, $sql3);
            $sum = mysqli_num_rows($row3);
            // $r3 = mysqli_fetch_assoc($row3);
            // $to_email = $r3['Email'];
            // echo "<script type='text/javascript'>alert('sum of the rows $to_email');</script>";
            while ($r3 = mysqli_fetch_assoc($row3)) {
                $to_email = $r3['Email'];
                $name = $r3['Name'];
                // echo "..$to_email..";
                // echo "<script type='text/javascript'>alert('sum of the rows $to_email');</script>";
                // $to_email = "souradeepsamadder1@gmail.com";
                $subject ="asking for the blood";
                set_time_limit(300);
                $headers = "From:send notification  <souradeepsamadder@gmail.com>\r\n";
                $headers .= "MIME-version: 1.0\r\n";
                $headers .= "content-Type:text/html;charset=IOS-8859-1\r\n";
                $massage = "<!DOCTYPE html>
        <html lang='en'>

        <head>

        <style>
            * {
                margin: 0;
                padding: 0;
            }

            body {
                background-color: gray;
            }

            header {
                background-color: black;
                color: white;
                opacity: .5;
                padding: 100px;
                height: auto;
                width: 600px;
                margin: auto;
                border-radius: 30px;
                border: 2px solid green;

            }
            p{
                color:#ffffff;
            }
            .hr {
                height: 2px;
                border-radius: 40px;
                background: linear-gradient(to right, #cc99ff 46%, #ff99cc 100%);
            }
            @media only screen and (max-width: 600px) {
                header {
                    height: 30%;
                    width: auto;
                    padding:25px;
                    font-size: 15px;

                }
            }
        </style>
        </head>

        <body>
            <header>
                <center>
                    <h1><b> Blood Donation Campaign</b></h1><br>
                    <div class='hr'></div>
                    <br>
                    <p>Hello <b>$name..</b> </p><br>
                    <p> We hope this mail finds you and your loved ones, safe and healthy. </p><br>
                    <p> We just wanted to give you some information about blood donation.</p><br>
                    <p> Let us together donate our blood to help the others. A little act goes a long way!</p><br>
                    <p> $noti</p></br>
                    <p><b><u> Date: $date</u></b></p><br>
                    <p><b><u>Time: $time onwards</u></b></p><br>
                    <p><b><u>Venue: $venue</u></b></p><br>

                    <div class='hr'></div>
                    <br>
                    <p>Contact: 8101008843,8637571875</p>
                    <p>Mail: snehamajumder12318@gmail.com,<br></p>
                    <p>souradeepsamadder1@gmail.com </p>
                    </div>
                </center>
            </header>
        </body>

        </html>";
                if (mail($to_email, $subject, $massage, $headers)) {
                    // echo "mail send success";
                } else {
                    echo "mail not send";
                }
            }
        }
    }
    //
    // echo $to_email;
    // 
}
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
                            <th>Notice</th>
                            <th>Held Time</th>
                            <th>Held Date</th>
                            <th>Venue</th>
                            <th>Department</th>
                            <th>Blood Group</th>

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
                                <td><?php echo $row["Notice"]; ?></td>
                                <td><?php echo $row["Held_date"]; ?></td>
                                <td><?php echo $row["Held_time"]; ?></td>
                                <td><?php echo $row["Venue"]; ?></td>
                                <td><?php echo $row["Department"]; ?></td>
                                <td><?php echo $row["Blood_group"]; ?></td>
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
<script>
    document.getElementById("blood_group").style.display = "none"

    function showdata(str) {
        // document.getElementById("option").innerHTML = " ";
        // console.log("hii")
        if (str == "Select Option") {
            document.getElementById("blood_group").style.display = "none"
        } else if (str == "All") {
            document.getElementById("blood_group").style.display = "block"
        } else if (str == "Camp") {
            document.getElementById("blood_group").style.display = "none"
        } else if (str == "Donor") {
            document.getElementById("blood_group").style.display = "block"
        }
    }

    function check_blood_group(str) {
        if (str == "Select Blood Group") {
            // document.getElementById("blood_group").styel.color="red";
            // console.log("hii souradeep");
            alert("this is not a perfect option, please select a proper option")
        } else if (str == "A+") {
            // document.getElementById("group")
            console.log("a+")
        }
    }
</script>