<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="registration.js"></script>
    <link rel="stylesheet" href="registration_page.css">
    <!-- <link rel="stylesheet" href="login.css"> -->

    <!-- <script src="login.js"></script> -->

</head>

<body>
    <header>
        <div class="from_background">
            <div class="text">

            </div>
            <br>
            <div class="cote">
                <h3 class="word" id="msg" style="color:aliceblue">

                </h3>
            </div>

            <div class="form_box">
                <form class="register">

                    <div class="form-box">
                        <h1 id="text"><u> Registration form </u></h1>
                        <div class="button-box">
                            <div id="btn"></div>
                            <button type="button" class="toggel-btn" onclick="donner()">Donor</button>
                            <button type="button" class="toggel-btn" onclick="camp()">Camp/Hospital</button>
                        </div>
                        <div id="donner" class="donner">
                            <form class="input-group" method="post" style="left: 600px;">
                                <div class="input">
                                    <input type="text" id="name" onkeyup="check_name(this.value)" class="input2"
                                        name="name" autocapitalize="off" required>
                                    <label id="lebel" class="label">Name</label>
                                </div>
                                <div class="input">
                                    <input type="text" id="age" class="input2" name="age" autocapitalize="off"
                                        maxlength="2" minlength="2" required onkeyup="check_age(this.value)">
                                    <label class="label" id="lebel_age"> age </label>
                                </div>
                                <br>
                                <div class="input">
                                    <select name="gender" id="gender">
                                        <option>
                                            Select Gender
                                        </option>
                                        <option>
                                            Male
                                        </option>
                                        <option>
                                            Female
                                        </option>
                                        <option>
                                            Other
                                        </option>
                                    </select>
                                </div>
                                <div class="input">
                                    <input type="text" id="blood_group" onkeyup="check_name(this.value)" class="input2"
                                        name="blood_group" autocapitalize="off" required>
                                    <label id="lebel" class="label">Blood Group</label>
                                </div>
                                <div class="input">
                                    <input type="text" id="name" onkeyup="check_name(this.value)" class="input2"
                                        name="name" autocapitalize="off" required>
                                    <label id="lebel" class="label"></label>
                                </div>
                                <div class="input">
                                    <input type="text" id="phone" onkeyup="check_name(this.value)" class="input2"
                                        name="phone" autocapitalize="off" required>
                                    <label id="lebel" class="label">Phone Number</label>
                                </div><br>
                                <div>
                                    <button type="submit" class="submit-btn">Register</button>
                                </div><br>

                            </form>
                        </div>

                        <form id="camp" class="input-group hidden" method="post" style="left: 200px;">
                            <!-- <div id="camp2"></div> -->
                            <div class="input">
                                <input type="text" id="name" onkeyup="check_name(this.value)" class="input2" name="name"
                                    autocapitalize="off" required>
                                <label id="lebel" class="label">Name</label>
                            </div>
                            <div class="input">
                                <input type="text" id="phone" onkeyup="check_name(this.value)" class="input2"
                                    name="phone" autocapitalize="off" required>
                                <label id="lebel" class="label">Phone Number</label>
                            </div>
                            <div class="input">
                                <input type="email" id="email" onkeyup="check_name(this.value)" class="input2"
                                    name="email" autocapitalize="off" required>
                                <label id="lebel" class="label">Email</label>
                            </div>
                            <div class="input">
                                <input type="text" id="venue" onkeyup="check_name(this.value)" class="input2"
                                    name="venue" autocapitalize="off" required>
                                <label id="lebel" class="label">Venue of Camp</label>
                            </div><br>
                            <div>
                                <button type="submit" class="submit-btn">Register</button>
                            </div>
                        </form>
                    </div>
                </form>
            </div>
        </div>
    </header>
    <script>
        var x = document.getElementById("donner");
        var y = document.getElementById("camp");
        var z = document.getElementById("btn");
        var a = document.getElementById("camp2");

        function camp() {
            // x.style.left = "-500px";
            // y.style.left = "20px";
            z.style.left = "120px";
            y.style.display = "block";
            x.style.display = "none";

        }

        function donner() {
            // x.style.left = "10px";
            // y.style.left = "600px";
            z.style.left = "0px";
            y.style.display = "none";
            x.style.display = "block";
        }
    </script>
</body>

</html>