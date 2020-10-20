<?php
    $x = 6.4;
    echo ceil($x);
?>
<br>
<?php
    $x = 8.8;
    echo floor($x);
?>
<br>
<?php
    $x = 0.5;
    echo round($x);
?>
<br>
<?php
    echo pi();
    
    function circleArea($r) {
        $circle_area = $r * $r * pi();
        echo $circle_area; 
    }
    circleArea(5);
?>
<br>
<?php
    $str = "football";
    echo strlen($str);
?>
<br>
<?php
    $str = "soccer";
    echo strpos($str, "o");
?>
<br>
<?php
    $str = "yoshizawa";
    echo substr($str, -3, 3);
?>
<br>
<?php
    $str = "yoshizawa";
    echo str_replace("zawa", "ZAWA", $str);
?>
<br>
<?php
    $name = "吉澤さん";
    $limit_number = 59;
    printf("%sの残り時間はあと%dです", $name, $limit_number);
?>
<br>
