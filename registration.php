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
    <link rel="stylesheet" href="registration.css">
    <script src="registration.js"></script>
    <!-- <script src="registration.js"></script> -->
</head>

<body>
    <div class="hero">
        <div class="form-box">
            <h1 id="text">Registration form </h1>
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggel-btn" onclick="donner()">Donner</button>
                <button type="button" class="toggel-btn" onclick="camp()">Camp/hospital</button>
            </div>
            <form id="donner" class=input-group method="POST" onSubmit="return check(this)">
                <div class="input">
                    <input type="text" id="name" onkeyup="check_name(this.value)" class="input2" name="name" autocapitalize="off" required >
                    <label id="lebel"class="label">Name</label>
                </div>
                <div class="input">
                    <input type="text" id="age" class="input2" name="age" autocapitalize="off" maxlength="2" minlength="2" required onkeyup="check_age(this.value)">
                    <label class="label" id="lebel_age"> age </label>
                </div>
                <div class="input">
                    <select name="gender" id="gender" onchange="check_gender(this.value)">
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
                    <select name="blood_group" id="blood" onchange="check_blood_group(this.value)">
                        <option>
                            Select blood group
                        </option>
                        <option>
                            A-
                        </option>
                        <option>
                            A+
                        </option>
                        <option>
                            B+
                        </option>
                        <option>
                            B-
                        </option>
                        <option>
                            AB+
                        </option>
                        <option>
                            AB-
                        </option>
                        <option>
                            O+
                        </option>
                        <option>
                            O-
                        </option>
                    </select>
                </div>
                <div class="input">
                    <input type="text" class="input2" autocapitalize="off" required name="email" id="email" onkeyup="check_email(this.value)">
                    <label class="label_email" id="lebel_email"> Email </label>
                </div>
                <div class="input">
                    <input type="text" class="input2" maxlength="10" minlength="10" autocapitalize="off" required name="phno" id="phno" onkeyup="check_phone_number(this.value)">
                    <label class="label" id="lebel_ph"> Phone Number </label>
                </div>
                <center><input class="btn btn-primary" type="submit" name="donner" value="regester"></center>

            </form>
            <?php
            if (isset($_POST['donner'])) {
                $name = $_POST['name'];
                $age = $_POST['age'];
                $gender = $_POST['gender'];
                $blood = $_POST['blood_group'];
                $email = $_POST['email'];
                $phone = $_POST['phno'];
                // echo "<script type='text/javascript'>alert('$name');</script>";
                $sql = "select * from donner where Email='$email'";
                $result = (mysqli_query($conn, $sql));
                $row = (mysqli_num_rows($result));
                if ($row) {
                    echo "<script type='text/javascript'>alert('Email Id already Registered');</script>";
                } else {
                    $query = "insert into donner values('','$name','$age','$gender','$blood','$email','$phone','$dt','$ti','pending','donner')";
                    if (mysqli_query($conn, $query)) {
                        echo "<script type='text/javascript'>alert('Adding successful');</script>";
                    } else {
                        echo "Error: " . $query . "<br>" . mysqli_error($conn);
                    }
                }
            }
            ?>
            <form id="camp" class=input-group method="post" onSubmit="return check(this)">
                <input type="checkbox" name="hospital_add" value="for_hospital" id="for_hospital" onchange="hospital(this.value)">
                <label>For Hospital Only</label><br><br>
                <div class="input">
                    <input type="text" class="input" id="name2" onkeyup="name_check(this.value)" name="camp_name" autocapitalize="off" required >
                    <label class="label" id="lebel2">Name </label>
                </div>
                <div class="input">
                    <input type="text" maxlength="10" minlength="10"class="input2" id="phno2" onkeyup="phone_number_check(this.value)" name="camp_phone" autocapitalize="off" required>
                    <label class="label"id="lebel_phno2"> Phone Number </label>
                </div>
                <div class="input">
                    <input type="text" class="input2" name="camp_email" id="email2" onkeyup="email_check(this.value)" autocapitalize="off" required>
                    <label class="label" id="lebel_email2"> Email </label>
                </div>
                <div class="input" id="for_camp">
                    <input type="text" class="input2" name="camp_add" id="add" onkeyup="check_addr(this.value)"autocapitalize="off" required>
                    <label class="label" id="lebel_add2"> Vanu of the camp </label>
                </div>
                <center><input class="btn btn-primary" type="submit" name="camp" value="regester"></center>
            </form>
            <?php
            if (empty($_POST["hospital_add"])) {
                if (isset($_POST['camp'])) {
                    $name = $_POST['camp_name'];
                    $phone = $_POST['camp_phone'];
                    $email = $_POST['camp_email'];
                    $add = $_POST['camp_add'];
                    // echo $name;
                    $sql2 = "select * from donner where Email='$email'";
                    $result2 = (mysqli_query($conn, $sql2));
                    $row2 = (mysqli_num_rows($result2));
                    if ($row2) {
                        echo "<script type='text/javascript'>alert('Email Id already Registered');</script>";
                    } else {
                        $query2 = "insert into camp values('','$name','$phone','$email','$add','$dt','$ti','pending')";
                        if (mysqli_query($conn, $query2)) {
                            echo "<script type='text/javascript'>alert('Adding successful');</script>";
                        } else {
                            echo "Error: " . $query2 . "<br>" . mysqli_error($conn);
                        }
                    }
                }
            } else {
                if (isset($_POST['camp'])) {
                    $name = $_POST['camp_name'];
                    $phone = $_POST['camp_phone'];
                    $email = $_POST['camp_email'];
                    $add = $_POST['camp_add'];
                    // echo $name;
                    $sql3 = "select * from donner where Email='$email'";
                    $result2 = (mysqli_query($conn, $sql3));
                    $row3 = (mysqli_num_rows($result2));
                    if ($row3) {
                        echo "<script type='text/javascript'>alert('Email Id already Registered');</script>";
                    } else {
                        $query3 = "insert into hospital values('','$name','$phone','$email','$add','$dt','$ti')";
                        if (mysqli_query($conn, $query3)) {
                            echo "<script type='text/javascript'>alert('Adding successful');</script>";
                        } else {
                            echo "Error: " . $query3 . "<br>" . mysqli_error($conn);
                        }
                    }
                }
            }
            ?>
        </div>
    </div>
    <script>
        var x = document.getElementById("donner");
        var y = document.getElementById("camp");
        var z = document.getElementById("btn");

        function camp() {
            x.style.left = "-500px";
            y.style.left = "20px";
            z.style.left = "120px";

        }

        function donner() {
            x.style.left = "10px";
            y.style.left = "600px";
            z.style.left = "0px";

        }
    </script>
</body>

</html>
<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="registration.js"></script>
    <link rel="stylesheet" href="registration_page.css">


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
                                    <input type="text" id="name" onkeyup="check_name(this.value)" class="input2" name="name" autocapitalize="off" required>
                                    <label id="lebel" class="label">Name</label>
                               
                                <div class="input">
                                    <input type="text" id="age" onkeyup="check_age(this.value)" class="input2" name="phone" autocapitalize="off" required>
                                    <label id="lebel_age" class="label">Age</label>
                                </div>
                                <div class="input">
                                    <input type="text" id="email" onkeyup="check_email(this.value)" class="input2" name="name" autocapitalize="off" required>
                                    <label id="lebel_email" class="label">Email</label>
                                </div>
                                <div class="input">
                                    <input type="text" id="phone" onkeyup="check_phone_number(this.value)" class="input2" name="phone" autocapitalize="off" required>
                                    <label id="lebel_ph" class="label">Phone Number</label>
                                </div><br>
                                <div class="input">
                                    <select name="gender" id="gender" onchange="check_gender(this.value)">
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
                                    <select name="gender" id="blood" onchange="check_blood_group(this.value)">
                                        <option>
                                            Select Blood Group
                                        </option>
                                        <option>
                                            A+
                                        </option>
                                        <option>
                                            A-
                                        </option>
                                        <option>
                                            B+
                                        </option>
                                        <option>
                                            B-
                                        </option>
                                        <option>
                                            AB+
                                        </option>
                                        <option>
                                            AB-
                                        </option>
                                        <option>
                                            O+
                                        </option>
                                        <option>
                                            O-
                                        </option>
                                        <option>

                                        </option>
                                    </select>
                                </div>
                                <div>
                                    <button type="submit" class="submit-btn">Register</button>
                                </div><br>

                            </form>
                        </div>

                        <form id="camp" class="input-group hidden" method="post" style="left: 200px;">
       
                            <div class="input">
                                <input type="text" id="name" onkeyup="check_name(this.value)" class="input2" name="name" autocapitalize="off" required>
                                <label id="lebel" class="label">Name</label>
                            </div>
                            <div class="input">
                                <input type="text" id="phone" onkeyup="check_name(this.value)" class="input2" name="phone" autocapitalize="off" required>
                                <label id="lebel" class="label">Phone Number</label>
                            </div>
                            <div class="input">
                                <input type="email" id="email" onkeyup="check_name(this.value)" class="input2" name="email" autocapitalize="off" required>
                                <label id="lebel" class="label">Email</label>
                            </div>
                            <div class="input">
                                <input type="text" id="venue" onkeyup="check_name(this.value)" class="input2" name="venue" autocapitalize="off" required>
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

            z.style.left = "120px";
            y.style.display = "block";
            x.style.display = "none";

        }

        function donner() {

            z.style.left = "0px";
            y.style.display = "none";
            x.style.display = "block";
        }
    </script>
</body>

</html> -->