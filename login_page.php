<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <script src="registration.js"></script> -->
    <link rel="stylesheet" href="login.css">


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
            <div class="form_box">
                <form id="Login">
                    <h1 style="color: #000;">
                        <u>
                            Login Form
                        </u>
                    </h1>
                    <br>
                    <!-- <hr> -->
                    <div>
                        <input type="text" class="input-field" placeholder="User Id" required>
                        <div class="container"><br>
                            <h3 style="font-size: 12px; text-align: left;">Enter OTP</h3>
                            <div class="userInput">
                                <input type="text" id='ist' maxlength="1" minlength="1"
                                    onkeyup="clickEvent(this,'sec')">
                                <input type="text" id="sec" maxlength="1" minlength="1"
                                    onkeyup="clickEvent(this,'third')">
                                <input type="text" id="third" maxlength="1" minlength="1"
                                    onkeyup="clickEvent(this,'fourth')">
                                <input type="text" id="fourth" maxlength="1" minlength="1"
                                    onkeyup="clickEvent(this,'fifth')">
                            </div>
                        </div>
                    </div>

                    <div>
                        <button type="submit">Confirm</button>
                        <button type="submit">Log in</button>
                    </div>
                    <br>
                    <hr>
                    <div class="border">

                    </div>
                    <div>
                        <p style="font-size: 12px;" class="or">OR</p>
                        <p style="font-size: 12px;">Do not have an account?</p>
                        <button type="submit" class="register_btn">Register</button>
                    </div>

                </form>
            </div>

        </div>

    </header>
</body>
<script>
    function clickEvent(first, last) {
        if (first.value.length) {
            document.getElementById(last).focus();
        }
    }
</script>

</html>