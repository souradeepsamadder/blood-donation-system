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
                <h3 class="word" id="msg" style="color:#ff0000">
                    
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
                                <input type="text" id='ist' maxlength="1" minlength="1" onkeyup="clickEvent(this,'sec')">
                                <input type="text" id="sec" maxlength="1" minlength="1" onkeyup="clickEvent(this,'third')">
                                <input type="text" id="third" maxlength="1" minlength="1" onkeyup="clickEvent(this,'fourth')">
                                <input type="text" id="fourth" maxlength="1" minlength="1" onkeyup="clickEvent(this,'fifth')">
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
                        <button type="submit" class="register_btn"><a style="color:#fff;" href="registration.php">Register</a></button>
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
    var i = Math.floor(11 * Math.random())
    document.getElementById("msg").innerHTML = r_text[i]
    console.log(r_text[i])
    // alert("aoura")
</script>

</html>