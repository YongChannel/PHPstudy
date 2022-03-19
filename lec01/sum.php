<?php
    $score = array(90, 80, 70);

    $sum = 0;

    for($i = 0; $i < 3; $i++) {
        $sum += $score[$i];
    }
    $avg = $sum / 3;
    echo "평균: $avg";
?>