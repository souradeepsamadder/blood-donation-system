<!-- 1>wap to print a triangel using a user difine char and usider difine number of rows by defolt the char will be star and number of rows will six
2>wap to print the fibonaki series using recorson. 
i will have to do this befor sleeping 😊-->


<?php
// $body = "./body.php";
// $to_email = "snehamajumder12318@gmail.com";
// $to_email = "Suchismitaghosh0101@gmail.com";
$to_email = "souradeepsamadder1@gmail.com";
// $to_email = "souradeepsamadder1@gmail.com";
// anandagopaldutta1@gmail.com
// $to_email="soumilighosh120@gmail.com";
$subject = "otp send  ";
$number = mt_rand(1111, 9999);
// $massage = "";
$headers = "From:send otp <souradeepsamadder@gmail.com>\r\n";
$headers .= "MIME-version: 1.0\r\n";
$headers .= "content-Type:text/html;charset=IOS-8859-1\r\n";
// $query = "insert into otp values('','$to_email','$number','$dt','$ti')";
// if (file_exists($body)) {
//     $massage = file_get_contents($body);
// } else {
//     die("unable to fine the content");
// }




//otp templete code... 
// $massage="<!DOCTYPE html>
// <html lang='en'>

// <head>
//     <style>
//         /* * {
//             margin: 0;
//             padding: 0;
//         } */

//         body {
//             background-color: gray;
//             /* opacity: ; */
//         }

//         header {
//             background-color: black;
//             opacity: .5;
//             padding: 30px;
//             color: white;
//             height: auto;
//             width: 600px;
//             /* margin-left: auto;
//             margin-top: auto; */
//             margin:auto;
//             border-radius: 40px;
//             border: 1px solid greenyellow;
//             box-shadow: 3px 4px 15px 2px rgb(11, 118, 118);
//             /* font-: ; */

//         }

//         h1{
//             color:#ffffff;
//         }
//         .hr {
//             /* border:10px solid ; */

//             height: 2px;
//             border-radius: 40px;
//             background: linear-gradient(to right, #cc99ff 46%, #ff99cc 100%);
//         }

//         .otp {
//             margin: 0px 40%;
//             border: 2px solid green;
//             border-radius: 30px;
//             padding: 10px;
//             font-size: 2rem;
//         }
//         p{
//             color:#ffffff;
//         }
//         @media only screen and (max-width: 600px) {
//             header{
//                height: 30%;
// width: auto;
// padding:25px;
// font-size: 15px;
//             }
//             .otp{
//                 margin:0 30%;
//                 padding:-10px;
//             }
//         }
//     </style>
// </head>

// <body>
//     <header>
//         <center>
//             <h3>Blood Donation Camp</h3>
//             <div class='hr'>
//             </div>
//             <div>
//             <p>
//                 This is your otp dont shear with no one
//             </p>
//             <p>
//                 use the code to log in your account:
//             </p>
//             <p class='otp'>
//                 '$number'
//             </p>
//             <p>
//                 this code will expried in 2 min.
//             </p>
//             </div>

//         </center>

//     </header>

// </body>

// </html>";


// for the donner notification.
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
            <p>Hello Sneha! </p><br>
            <p> We hope this mail finds you and your loved ones, safe and healthy. </p><br>
            <p> We just wanted to give you some information about blood donation.</p><br>
            <p> Let us together donate our blood to help the others. A little act goes a long way!</p><br>
            <p><b><u> Date: 22nd February, 2022(Tuesday)</u></b></p><br>
            <p><b><u>Time: 10.00 am onwards</u></b></p><br>
            <p><b><u>Venue: DSP Hospital Blood Bank</u></b></p><br>

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
    echo "mail send success";
} else {
    echo "mail not send";
}
