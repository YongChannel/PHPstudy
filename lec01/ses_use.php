<?php
    session_start();
    $userid=$_SESSION["userid"];
    $username=$_SESSION["username"];
?>
<h4>등록된 세션의 사용</h4>
등록된 세션(userid) : <?=$userid?><br>
등록된 세션(username) : <?=$username?>