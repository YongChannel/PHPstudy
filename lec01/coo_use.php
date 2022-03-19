<?php
    if(isset($_COOKIE["userid"])&&isset($_COOKIE["username"])) {
        $userid=$_COOKIE["userid"];
        $username=$_COOKIE["username"];
        
        echo "쿠키 userid : ".$userid."<br>";
        echo "쿠키 username : ".$username."<br>";
    } else {
        echo "쿠키 미생성";
    }
?>