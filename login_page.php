<!DOCTYPE html>
<html lang="en">


<head>
    <?php
    include('../project/database/db_conn.php');
    date_default_timezone_set('Asia/Kolkata');
    $dt = date("Y-m-d");
    $ti = date("H:i:s");
    ?>

    <title>Document</title>
    <!-- <script src="registration.js"></script> -->
    <link rel="stylesheet" href="login.css">
    <script src="login.js"></script>

</head>

<body>
    <header>
        <div class="from_background">
            <div class="text">
                <h1 class="">
                    <p>
                        Welcome Back!

                    </p>
                    <img src="./photos/success.gif" alt="">

                </h1>
            </div>
            <br>
            <div class="cote">
                <h3 class="word" id="msg" style="color:aliceblue">

                </h3>
            </div>
            <div class="form_box">
                <form id="Login" method="POST">
                    <h1 style="color: #000;">
                        <u>
                            Login Form
                        </u>
                    </h1>
                    <br>
                    <!-- <hr> -->
                    <div class="form-box">
                        <div class="input">
                            <input type="email" class="input-field" name="userid" placeholder="User Id" id="email" onkeyup="check_email(this.value)" value="<?php
                                                                                                                                                            if (isset($_COOKIE['userid'])) {
                                                                                                                                                                echo $_COOKIE['userid'];
                                                                                                                                                            } ?>">
                        </div>
                        <div class="container"><br>
                            <h3 style="font-size: 12px; text-align: left;">Enter OTP</h3>
                            <div class="userInput">
                                <input type="text" name="fst" id='fist' maxlength="1" minlength="1" onkeyup="clickEvent(this,'sec')">
                                <input type="text" name="snd" id="sec" maxlength="1" minlength="1" onkeyup="clickEvent(this,'third')">
                                <input type="text" name="trd" id="third" maxlength="1" minlength="1" onkeyup="clickEvent(this,'fourth')">
                                <input type="text" name="forth" id="fourth" maxlength="1" minlength="1" onkeyup="clickEvent(this,'log_in')"><br>
                            </div>
                        </div>
                        <div>
                            <b>
                                <p style=" text-align: left;" id="corner"></p>
                            </b>
                            <b>
                                <p style=" text-align: left;" id="count"> </p>
                            </b>
                        </div>
                    </div>

                    <div>
                        <button class="raise" name="send_otp" onclick="countdown()" id="otp">Send otp</button>
                        <button class="raise" type="submit" name="login" id="log_in">Log in</button>
                    </div>
                    <br>
                    <hr>
                    <div class="border">

                    </div>
                    <div>
                        <p style="font-size: 12px;" class="or">OR</p>
                        <p style="font-size: 12px;">Do not have an account?</p>
                        <button class="raise" type="submit" class="register_btn"><a style="color:#fff;" href="registration.php">Register</a></button>
                    </div>

                </form>
            </div>

        </div>

    </header>
    <?php
    if (isset($_POST['login'])) {
        $userid = $_POST['userid'];
        $otpf = $_POST['fst'];
        $otps = $_POST['snd'];
        $otpt = $_POST['trd'];
        $otpfo = $_POST['forth'];
        $the_otp = $otpf . '' . $otps . '' . $otpt . '' . $otpfo;

        // echo $the_otp;
        // echo $userid,$otpf,$otps,$otpt,$otpfo;
        // if ($userid) {
        //     $sql4 = "SELECT * FROM otp WHERE Userid = '$userid'";
        //     $result4 = mysqli_query($conn, $sql4);
        //     $show4 = mysqli_fetch_assoc($result4);
        // } else {
        //     echo "<script>alert('no')</script>";
        // }
        $sql3 = "SELECT * from login where Email='$userid'";
        $result3 = (mysqli_query($conn, $sql3));
        $data3 = mysqli_fetch_assoc($result3);
        $count_user = mysqli_num_rows($result3);
        // echo "<script>alert(`$data3['Email']`)</script>";
        // echo "<script>alert('$count_user')</script>";
        // $user_email = $data3['Email'];
        // $user_account = $data3['User'];
        if ($count_user) {
            $user_email = $data3['Email'];
            $user_account = $data3['User'];
            // echo "<script>alert('$user_email')</script>";
            // echo "<script>alert('$user_account')</script>";
            if ($user_account == 'admin') {
                $userid = $data3['Slno'];
                $_SESSION['admin'] == $userid;
                header("location:admin.php");
            } elseif ($user_account == 'donner') {
                $sql6 = "SELECT Status from donner where Email='$user_email'";
                $result6 = mysqli_query($conn, $sql6);
                $data6 = mysqli_fetch_array($result6);
                $status = $data6['Status'];
                if ($status == 'approve') {
                    $userid = $data6['Slno'];
                    $_SESSION['donner'] = $userid;
                    header("location:donner.php");
                } else {
                    echo "<script>alert('the Donner is not approve')</script>";
                }
            } elseif ($user_account == 'camp') {
                // echo "<script>alert('souuradeep')</script>";

                $sql7 = "SELECT Status from camp where Email='$user_email'";
                $result7 = mysqli_query($conn, $sql7);
                $data7 = mysqli_fetch_array($result7);
            // echo "Error: " . $sql7 . "<br>" . mysqli_error($conn);

                $status2 = $data7['Status'];
                // echo "<script>alert('$status2')</script>";

                if ($status2 == 'approve') {
                    $userid = $data7['Slno'];
                    $_SESSION['camp'] = $userid;
                    header("location:camp.php");
                } else {
                    echo "<script>alert('the Camp is not approve')</script>";
                }
            } elseif($user_account == 'hospital') {
                echo "<script>alert('the Hospital is not approve')</script>";

                $sql8 = "SELECT Status from hospital where Email='$user_email'";
                $result8 = mysqli_query($conn, $sql8);
                $data8 = mysqli_fetch_array($result8);
                $status = $data8['Status'];
                if ($status == 'approve') {
                    $userid = $data8['Slno'];
                    $_SESSION['donner'] = $userid;
                    header("location:hospital.php");
                } else {
                    echo "<script>alert('the Hospital is not approve')</script>";
                }
            }
        } else {
            echo "<script>alert('the userid is not exist')</script>";
        }
        // $sql2 = "SELECT * FROM admin WHERE Email='$userid'";
        // $result2 = (mysqli_query($conn, $sql2));
        // $admin_count = mysqli_num_rows($result2);
        // // echo "<script>alert('$sum')</script>";
        // if ($admin_count) {
        //     // echo "<script>alert('got it')</script>";
        //     $userid = $row['Slno'];
        //     $_SESSION['admin'] = $userid;
        //     header("location:admin.php");

        // }
        // else{
        //     echo "<script>alert(':(')</script>";

        // }
    }
    ?>
    <?php
    if (isset($_POST['send_otp'])) {
        $to_email = $_POST['userid'];
        if ($to_email) {
            // echo $toe;
            // $to_email = "souradeepsamadder1@gmail.com";
            $subject = "otp send  ";
            $number = mt_rand(1111, 9999);
            $headers = "From:send otp <souradeepsamadder@gmail.com>\r\n";
            $headers .= "MIME-version: 1.0\r\n";
            $headers .= "content-Type:text/html;charset=IOS-8859-1\r\n";

            $massage = "<!DOCTYPE html>
<html lang='en'>

<head>
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
            margin:auto;
            border-radius: 40px;
            border: 1px solid greenyellow;
            box-shadow: 3px 4px 15px 2px rgb(11, 118, 118);
             /* font-: ; */

        }
        h1{
            color:#ffffff;
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
        p{
            color:#ffffff;
        }
        @media only screen and (max-width: 600px) {
            header{
                height: 30%;
width: auto;
padding:25px;
font-size: 15px;
            }
            .otp{
                margin:0 30%;
                padding:-10px;
            }
        }
    </style>
</head>

<body>
    <header>
        <center>
            <h3>Blood Donation Camp</h3>
            <div class='hr'>
            </div>
            <div>
            <p>
                This is your otp dont shear with no one
            </p>
            <p>
                use the code to log in your account:
            </p>
            <p class='otp'>
                '$number'
            </p>
            <p>
                this code will expried in 2 min.
            </p>
            </div>

        </center>

    </header>

</body>

</html>";

            // echo"<script>alert($result)</script>";

            if (mail($to_email, $subject, $massage, $headers)) {
                $sqli = "insert into otp values('','$to_email','$number','$dt','$ti')";
                if (mysqli_query($conn, $sqli)) {
                    // echo "<script type='text/javascript'>alert('Adding successful');</script>";
                } else {
                    echo "Error: " . $sqli . "<br>" . mysqli_error($conn);
                }
                setcookie("userid", $to_email, time() + (86400 * 30), "/");
                // echo "mail send success";
            } else {
                echo "mail not send";
            }
        } else {
            echo "<script>alert('NO USER-ID GIVEN')</script>";
        }
    }

    ?>

</body>
<script>
    document.load
    var r_text = new Array();
    r_text[0] = "BE A HERO GIVE BLOOD";
    r_text[1] = "EVERYONE MAY BECOME A SAVIOR";
    r_text[2] = "GIVE BLOOD GIVE LIFE ";
    r_text[3] = "THERE IS NO SUBSTUTUTE FOR BLOOD IT ONLY COMES FROM GENEROUS DONNER ";
    r_text[4] = "NEVER REFUSE TO DONATE BLOOD IF YOU CAN AS YOU MY BE THE NEXT NEEDY";
    r_text[5] = "DONATE YOUR BOLLD AND MAKE A DINCEFFERE";
    r_text[6] = "YOU DONT.N HAVE TO BE A DOCTOR TO SAVE LIVES";
    r_text[7] = "GIVE THE GIFT OF LIFE DONATE BLOOD";
    r_text[8] = "WE NEED EACH OTHER DONATE BLOOD";
    r_text[9] = "PROUD TO BE A BLOOD DONOR";
    r_text[10] = "1 PAIN CAN SAVE 3 LIVES GIVE BLOOD GIVVE LIFE";
    var i = Math.floor(11 * Math.random());
    document.getElementById("msg").innerHTML = r_text[i];
    //  console.log(r_text[i]);
</script>

</html>