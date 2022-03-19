<?php
    $num = array(15, 13, 9, 7, 6, 12, 19, 30, 28, 26);
    $cnt = 10;
    echo "정렬 전: ";
    for($i = 0; $i < 10; $i++) {
        echo "$num[$i]"." ";
    }
    echo "<br>";
    for($i = $cnt - 2; $i >= 0; $i--) {
        for($j = 0; $j <= $i; $j++) {
            if($num[$j] > $num[$j + 1]) {
                $tmp = $num[$j];
                $num[$j] = $num[$j + 1];
                $num[$j + 1] = $tmp;
            }
        }
    }
    echo "정렬 후: ";
    for($i = 0; $i < 10; $i++) {
        echo "$num[$i]"." ";
    }
?>