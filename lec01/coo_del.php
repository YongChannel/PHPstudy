<?php
    setcookie("userid", "", time()-3600);
    setcookie("username", "", time()-3600);

    echo "userid 와 username 쿠키 삭제";
?>
