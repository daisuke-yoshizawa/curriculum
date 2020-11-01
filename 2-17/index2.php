<?php
date_default_timezone_set('Asia/Tokyo');
$time = intval (date("H",time()));
echo "今";
echo $time;
echo "時台です。";
echo '<br>'
?>

<?php
if(0 <=$time && $time<10) {
    echo "おはようございます";
}elseif(10 <= $time && $time <17){
    echo "こんにちは";
}elseif(17 <= $time && $time <24){
    echo "こんばんは";
}

?>