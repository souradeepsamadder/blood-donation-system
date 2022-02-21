<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    session_start();
    $_SESSION["admin"] = "";
    date_default_timezone_set('Asia/Kolkata');
    $dt = date("Y-m-d");
    $ti = date("H:i:s");
    include('../project/database/db_conn.php');
    ?>
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="hero">
        <div class="form-box">
            <h1 id="text">Login form</h1>
            <form id="student" class="input-group" method="post">
                <div class="input">
                    <input type="text" class="input2" name="username" autocapitalize="off" required="required" name="email" >
                     <!-- value="<?php
                    // if (isset($_COOKIE["username"])) {
                    //     echo $_COOKIE['username'];
                    // }
                    ?>">  -->
                    <label class="label">User Id</label>
                </div>
                <div class="input">
                    <input type="password" class="input2" name="password" autocapitalize="off" name="otp">
                    <label class="label">OTP</label>
                </div>
                <div class="button">
                    <input class="btn btn-primary" type="submit" name="otp" value="otp">

                </div>
                <div class="button button_login">
                    <input class="btn btn-primary" type="submit" name="login" value="login">

                </div>

            </form>
            <?php

            if (isset($_POST['otp'])) {
                // $to_email = $_POST['username'];
                $to_email= "suchismitaghoush0101@gmail.com";
                // setcookie("username",$to_email,time()+(86400*30),"/");
                // $sqli = "select * from camp,donner,hospital where camp.Email='$to_email' or donner.Email='$to_email' or hospital.Email='$to_email'";
                // $row = mysqli_query($conn, $sqli);
                // $r = mysqli_num_rows($row);
                // if ($r) {
                    $subject = "Sending the otp for log in";
                    $number = mt_rand(1111, 9999);
                    $query = "insert into otp values('','$to_email','$number','$dt','$ti')";
                    $row1 = mysqli_query($conn, $query);
                    echo $row1;
                    $headers = "From:send otp <souradeepsamadder@gmail.com>\r\n";
                    $headers .= "MIME-version: 1.0\r\n";
                    $headers .= "content-Type:text/html;charset=IOS-8859-1\r\n";
                    $massage = "
                    <!DOCTYPE html>
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
                                font-size:20px
                            }

                            @media only screen and (max-width: 600px) {
                                header{
                                    height: auto;
                                    width: auto;
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
                                <h1>Blood Donation Camp</h1>
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
                                    $number
                                </p>
                                <p>
                                    this code will expried in 2 min.
                                </p>
                                </div>
                                
                            </center>

                        </header>

                    </body>

                    </html>";
                    if (mail($to_email, $subject, $massage, $headers)) {
                        // echo "<script type='text/javascript'>alert('mail send success');</script>";
                    } else {
                        echo "<script type='text/javascript'>alert('mail not send');</script>";
                    }
                }
            // }
            ?>
        </div>
    </div>

</body>

</html>