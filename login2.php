<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    session_start();
    $_SESSION["admin"] = "";
    include('../project/database/db_conn.php');
    ?>
    <title>Document</title>
</head>

<body>
    <div class="hero">
        <div class="from-box">
            <h1 id="text">Login form</h1>
            <form id="student" class="input-group" method="POST" onSubmit="return check(this)">
                <div class="input">
                    <input type="text" class="input2" name="username" autocapitalize="off" required name="email">
                    <label class="label">User Id</label>
                </div>
                <div class="input">
                    <input type="password" class="input2" name="password" autocapitalize="off" required name="otp">
                    <label class="label">OTP</label>
                </div>
                <input class="btn btn-primary" type="submit" name="send_otp" value="send otp">

                <input class="btn btn-primary" type="submit" name="login" value="login">

            </form>
            <?php
            if (isset($_POST[''])) {
                echo "<script type='text/javascript'>alert('sou')</script>";
            }
            ?>
        </div>
    </div>
    <!-- <?php
            // $email = "souradeepsamadder1@gmail.com";
            // $to_email="anandagopaldutta1@gmail.com,souradeepsamadder1@gmail.com";
            // $to_email="rm2001.c@gmail.com";

            // if (isset($_POST['send'])) {

            //     $to_email = $_POST['eid'];
            //     // echo $to_email;
            //     $sqli = "select * from aadmin where Email='$to_email'";
            //     $row = mysqli_query($conn, $sqli);
            //     $r = mysqli_num_rows($row);
            //     if ($r) {
            //         $subject = "otp send  ";
            //         $number = mt_rand(1111, 9999);
            //         $body = "This mail is for your forget password OTP:-$number This is your OTP don't shear with no one";
            //         $headers = "From: souradeepsamadder@gmail.com";
            //         $query = "insert into forgetpass values('','$to_email','$number','$dt','$ti')";
            //         if (mail($to_email, $subject, $body, $headers)) {
            //             echo "<script type='text/javascript'>alert('mail send success');</script>";
            //         } else {
            //             echo "<script type='text/javascript'>alert('mail not send');</script>";
            //         }
            //     }
            // }
            ?> -->
</body>

</html>