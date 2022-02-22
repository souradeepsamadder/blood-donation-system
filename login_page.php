<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        body {
            background-color: #898989;
        }

        header {
            padding: 15px;
            background-color: #898989;
            /* margin:10px 0px 0px 300px;   */
            /* width:100%; */
        }

        .from_background {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            height: 450px;
            width: 800px;
            background: linear-gradient(to left, #add8e6, #00008b);
            border-radius: 20px;
        }

        .text {
            height: 40px;
            width: 130px;
            /* border: 2px solid red; */
            position: relative;
            top: 30%;
            left: 4%;
        }

        .cote {
            height: 30%;
            width: 30%;
            /* border: 2px solid red; */
            position: relative;
            top: 30%;
            left: 2%;
            /* overflow: hidden; */
            /* align-content: center; */
        }

        h1 {
            color: aliceblue;
        }

        .word {
            color: white;
        }


        .from {
            background-color: #F2F2F2;
            height: 400px;
            width: 550px;
            position: relative;
            top: 0%;
            left: 30%;
            border-radius: 50px 5px 5px 50px;
            /* transform: translate(-50%,-50%); */
            margin-top: -170px;
        }

        .login_form_header {
            position: relative;
            top: 20%;
            left: 38%
        }

        .login_positon {
            top: 30%;
            left: 25%;
            /* transform: translate(-70%,-70%); */
            position: relative;

        }

        input {
            border: transparent;
            background: transparent;
            border-bottom: 2px solid #3dcfd3;
            width: 60%;
            /* margin: ; */
        }

        .register {
            position: relative;
            top: 60%;
            margin-left: 75%;
        }

        @media only screen and(max-width:500px) {
            header {
            height: 30%;
            width: 30%;


        }
        }
    </style>
</head>

<body>
    <header>
        <div class="from_background">
            <div class="text">
                <h1 class="">
                    welcome
                </h1>
            </div>
            <br>
            <div class="cote">
                <h3 class="word">
                    welcome welcome welcome welcome welcome welcome welcome welcome welcome welcome
                </h3>
            </div>
            <div class="from">
                <div class="login_form_header">
                    <h2>
                        Login Form
                    </h2>
                </div>
                <div class="login_positon">

                    <div>
                        <input type="text" placeholder="user id"><br>
                        <label>
                            user id
                        </label>
                    </div>
                    <div>
                        <input type="text" placeholder="otp"><br>
                        <lavel>OTP</lavel>
                    </div>
                    <div class="button">
                        <button type="button">Log in </button>
                    <!-- </div><div class="button"> -->
                        <button type="button">OTP</button>
                    </div>

                </div>
                <div class="register">
                    <p>register your self..</p>
                </div>
            </div>

        </div>

    </header>
</body>

</html>