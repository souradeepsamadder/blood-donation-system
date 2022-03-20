<?php
include("../project/donner_header.php");
date_default_timezone_set('Asia/Kolkata');
$dt = date("Y-m-d");
$ti = date("H:i:s");
$donor = $_SESSION["d"];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="chat.css">
</head>

<body>
    <form method="POST">

        <div class="hero">
            <header class="chat_header">
                <div class="text">
                    <span>
                        Chat With Everyone 😊
                    </span>
                </div>
            </header>
            <section class="chat">
                <?php
                $sql2 = "select * from msg";
                $r = mysqli_query($conn, $sql2);
                while ($ro = mysqli_fetch_assoc($r)) {
                    $dno=$ro['Dno'];
                ?>
                    <div class="msg">
                        <div class="name">
                            <h5>
                                <?php
                                $sql3 = "select * from donner where Sno='$dno'";
                                $r3 = mysqli_query($conn, $sql3);
                                $ro3 = mysqli_fetch_assoc($r3);
                                echo $ro3['Name'];
                                ?>
                            </h5>
                        </div>
                        <div>
                            <p>
                                <?php
                                echo $ro['Msg'];
                                ?>
                            </p>
                            <div class="date">
                                <?php
                                echo "Date:-", $ro['Date'], "/ Time:-", $ro['Time'];
                                ?>
                            </div>
                        </div>

                    </div>
                <?php
                }
                ?>
            </section>

            <footer class="type_ariya">
                <div>
                    <div class="emoji">
                        <p>
                            🙂
                        </p>
                    </div>
                    <input type="text" placeholder=" type your message hear.." require name="add_msg">
                </div>
            </footer>
        </div>
    </form>

</body>
<?php
if (isset($_POST['add_msg'])) {
    $msg = $_POST['add_msg'];
    $sql1 = "insert into msg values('','$donor','$msg','$dt','$ti')";
    $result1 = (mysqli_query($conn, $sql1));
    // echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
}
?>

</html>