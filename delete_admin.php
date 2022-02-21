<?php
include("../project/admin_header.php");
include("../project/database/db_conn.php");
$del = $_GET['del'];
$sql = "delete from admin where Email='$del'";
mysqli_query($conn, $sql);
echo "<script>alert(' item deleted')</script>";
echo "<script>window.location.href='add_admin.php'</script>";
?>
