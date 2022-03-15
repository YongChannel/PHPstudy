<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php
        $gender = $_POST['gender'];
        $email = $_POST['email'];

    ?>
    <ul><li>성별: <?=$gender?></li>
        <li>이메일 여부: <?=$email?></li></ul>

    <?php
    $num = count($_POST['hobby']);
    for($i = 0; $i < $num; $i++) {
        echo $_POST['hobby'][$i];
        if($i != $num - 1) {
            echo ", ";
        }
    }
    echo "<br>";

    $mail1 = $_POST['mail1'];
    $mail2 = $_POST['mail2'];
    ?>
    이메일: <?=$mail1?>@<?=$mail2?>
</body>
</html>