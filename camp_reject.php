<?php
include("../project/database/db_conn.php");
$del = $_GET['c'];
$sql = "delete from camp where Slno='$del'";
mysqli_query($conn, $sql);
echo "<script>alert(' item deleted')</script>";
echo "<script>window.location.href='approval_camp.php'</script>";
