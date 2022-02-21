<?php
include("../project/database/db_conn.php");
$del = $_GET['c'];
$sql = "delete from donner where Sno='$del'";
mysqli_query($conn, $sql);
echo "<script>alert(' item deleted')</script>";
echo "<script>window.location.href='approe_donner.php'</script>";
?>
