<?php
    $a=setcookie("userid", "lyc");
    $b=setcookie("username", "이용찬", time()+60);

    if($a and $b) {
        echo "쿠키 'userid'와 'username'생성 완료<br>";
        echo "쿠키 'username' 60초 지속";
    }
?>