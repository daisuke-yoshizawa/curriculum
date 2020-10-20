<?php
$cities = ["london","paris","berlin","roma"];
echo count($cities);
?>
<br>
<?php
$numbers = [26,35,17,67,45];
sort($numbers);
var_dump($numbers);
?>
<br>
<?php
$cities = ["london","paris","berlin","roma","madrid"];
if(in_array("london",$cities)){
    echo "ロンドン";
}else{
    echo "ロンドンはない";
}
?>
<br>
<?php
$cities = ["london","paris","berlin","roma","madrid"];
$atstr = implode("@", $cities);
var_dump($atstr);

$re_cities = explode("@", $atstr);
var_dump($re_cities);
?>
