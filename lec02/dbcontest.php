<?php
    $db_host="localhost";
    $db_user="memberadmin";
    $db_password="java301";
    $db_name="sqldb";
    $con = mysqli_connect($db_host,$db_user,$db_password,$db_name);
    if(mysqli_connect_error($con)) {
        echo "sql 접속 실패","<br>";
        echo "오류 원인: ", mysqli_connect_error();
        exit();
    }
    echo "mysqlDB 접속 성공";
    mysqli_close($con);
?>
