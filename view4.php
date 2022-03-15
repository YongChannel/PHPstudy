<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php
        $file_dir = "C:/xampp/htdocs/php/data/";
        $file_path = $file_dir.$_FILES['upload']['name'];
        if(move_uploaded_file($_FILES['upload']['tmp_name'], $file_path)) {
            $img_path = "data/".$_FILES['upload']['name'];
    ?>
    <img src="<?=$img_path?>">
    <?=$_POST['comment']?>
    <?php
        }
        else {
            echo "업로드 오류";
        }
    ?>
</body>
</html>