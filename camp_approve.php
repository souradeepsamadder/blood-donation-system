<?php
include("../project/database/db_conn.php");
$status = $_GET['c'];
$sql = "update camp set camp.Status='approve' where Slno='$status'";
mysqli_query($conn, $sql);
echo "<script>alert('approve the camp')</script>";
$result = mysqli_query($conn, "select * from camp where Slno='$status'");
$row = mysqli_fetch_assoc($result);
$name = $row['Name'];
$to_email = $row['Email'];
$subject = "approve your application";
$headers = "From:send otp <souradeepsamadder@gmail.com>\r\n";
$headers .= "MIME-version: 1.0\r\n";
$headers .= "content-Type:text/html;charset=IOS-8859-1\r\n";
$massage = "<head>
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
    padding: 2rem;
    /* font-size: 120%; */
    height: auto;
    /* width: 600px; */
    margin: auto;
    border-radius: 30px;
    border: 2px solid green;
    max-width: 600px;

}

.hr {
    height: 2px;
    border-radius: 40px;
    background: linear-gradient(to right, #cc99ff 46%, #ff99cc 100%);
}
p{
    color:#ffffff;
}
.slogan {
    position: relative;
    line-height: 1;
    top: -20px;
    font-size: 100%;
    font-style: italic;
    color: white;
    letter-spacing: 0px;
}
/* // @media only screen and (max-width: 600px) {
//     header {
//         height: 30%;
//             width: auto;
//             padding:25px;
//             font-size: 15px;

//     } 
// }*/
</style>
</head>

<body>
<header>
        <center>
            <h1><b> Blood Bucket</b></h1><br>
            <div class='slogan'>-Every Drop counts</div>
            <div class='hr'></div>
            <br>
            <p>Hello $name </p><br>
            <p> We hope this mail finds you and your loved ones, safe and healthy. </p><br>
            <p> We Blood Bucket team wants to thank you for taking out valuable time from your busy schedule and
                becoming priceless part in the list of Organizers.</p><br>
            <p> Let us together donate our blood to help the others. A little act goes a long way!</p><br>  
            <div class='hr'></div>
            <br>
            <p>Warm Regards</p>
            <p>Team</p>
            <p>Blood Bucket- Every drop counts!</p>
        </center>
        </header>
        </body>";
if (mail($to_email, $subject, $massage, $headers)) {
} else {
    echo "<script>alert('email not send successfully')</script>";
}

echo "<script>window.location.href='approval_camp.php'</script>";
