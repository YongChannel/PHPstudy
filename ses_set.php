<?php
    session_start();
    echo "세션 시작<br>";
    
    $_SESSION["userid"]="lyc";
    $_SESSION["username"]="이용찬";
    echo "세션 등록 완료<br>";

    echo "userid : ".$_SESSION["userid"]."<br>";
    echo "username : ".$_SESSION["username"]."<br>";
?>