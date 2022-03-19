<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php
        $id = $_POST['id'];
        $pw = $_POST['pass'];
        $con = $_POST['content'];
    ?>
    <ul><li>아이디: <?=$id?></li>
        <li>비밀번호: <?=$pw?></li>
        <li>텍스트: <?=$con?></li></ul>
</body>
</html>