<?php
    header('Content-Type: application/json');

    // dang nhap vao database
    include("config.php");

    // doc gia tri RGB tu database
    $sql = "select * from data where Num>(select max(Num) from data)-10";
    $result = mysqli_query($conn,$sql);

    $data = array();
    foreach ($result as $row){
        $data[] = $row;
    }

    mysqli_close($conn);
    echo json_encode($data);

?>