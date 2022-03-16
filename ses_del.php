<?php
    session_start();
    unset($_SESSION["userid"]);
    unset($_SESSION["username"]);
?>
<h4>등록된 세션의 사용</h4>
등록된 세션(userid) : <?=$_SESSION["userid"]?><br>
등록된 세션(username) : <?=$_SESSION["username"]?>
세션 userid, username 삭제 완료