<?php
include("../project/admin_header.php");
// include("../project/database/db_conn.php");
?>
<script>
    // function display_donner() {
    //     var xhttp = new XMLHttpRequest();
    //     xhttp.onreadystatechange = function() {
    //         if (this.readyState == 4 && this.status == 200) {
    //             document.getElementById("display").innerHTML = this.responseText;
    //         }
    //     }
    //     xhttp.open("GET", "approve_donner.php");
    //     xhttp.send();
    // }
    function display_donner()
    {
        window.location.href="approve_donner.php";
    }

    function display_camp() {

        // var xhttp = new XMLHttpRequest();
        // xhttp.onreadystatechange = function() {
        //     if (this.readyState == 4 && this.status == 200) {
        //         document.getElementById("display").innerHTML = this.responseText;
        //     }
        // }
        // xhttp.open("GET", "approval_camp.php?q=");
        // xhttp.send();
        window.location.href="approval_camp.php";
    }

    function display_hospital() {
        // var xhttp = new XMLHttpRequest();
        // xhttp.onreadystatechange = function() {
        //     if (this.readyState == 4 && this.status == 200) {
        //         document.getElementById("display").innerHTML = this.responseText;
        //     }
        // }
        // xhttp.open("GET", "approval_hospital.php?q=");
        // xhttp.send();
        window.location.href="approval_hospital.php";
    }
</script>
<form name="form1">

    <!-- Area Chart Example-->

    <!-- DataTables Example -->
    <center>
        <button type="button" class="btn btn-primary" onclick="display_donner()" name="add_admin">view new donner</button>
        <button type="button" class="btn btn-primary" onclick="display_camp()" name="add_admin">view new camp</button>
        <button type="button" class="btn btn-primary" onclick="display_hospital()" name="add_admin">view new hospital</button>

    </center>

</form>
<div id="display" class="display">

</div>