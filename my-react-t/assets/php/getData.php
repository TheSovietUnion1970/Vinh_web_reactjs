<?php
    // send a JSON message to website 
    header('Content-Type: application/json');

    // ket noi database
    include("config.php");
    // doc du lieu tu database
    $sql = "select * from data where Num>(select max(Num) from data)-10";
    $result = mysqli_query($conn,$sql);
    // gui du lieu len website
    $data = array();
    foreach ($result as $row){
        $data[]=$row;
    }
    mysqli_close($conn);

    echo json_encode($data);
?>