<?php
    //doc du lieu tu website gui ve 
    if($_POST["L"] == "den") {
        $data_a = 1;
    }else if($_POST["L"] != "den") {
        $data_a = 0;
    }

    if($_POST["F"] == "quat") {
        $data_b = 1;
    }else if($_POST["F"] != "quat") {
        $data_b = 0;
    }

    if($_POST["P"] == "bom") {
        $data_c = 1;
    }else if($_POST["P"] != "bom") {
        $data_c = 0;
    }

    if($_POST["A"] == "tudong") {
        $data_d = 1;
    }else if($_POST["A"] != "tudong") {
        $data_d = 0;
    }

    // ket noi database
    include("config.php");

    // gui du lieu xuong database 
    $sql = "update data set Light = '$data_a', Fan = '$data_b', Pump = '$data_c', Auto = '$data_d' where Num=(select max(Num) from data)";
    mysqli_query($conn,$sql);
    
    // ngat ket noi database
    mysqli_close($conn);
?>