<?php
    $now_year = 2022;
    $now_month = 2;
    $now_day = 25;

    $birth_year = 1996;
    $birth_month = 3;
    $birth_day = 12;

    if ($birth_month < $now_month){
        $age = $now_year - $birth_year;
    } elseif ($birth_month==$now_month) {
        if ($birth_day <= $now_day) {
            $age = $now_year - $birth_year;
        } else {
            $age = $now_year - $birth_year - 1;
        }
    } else {
        $age = $now_year - $birth_year - 1;
    }

    echo "오늘 날짜 : $now_year 년 $now_month 월 $now_day 일<br>";
    echo "생년 월일 : $birth_year 년 $birth_month 월 $birth_day 일<br>";
    echo "만 나이 : $age 세";
?>