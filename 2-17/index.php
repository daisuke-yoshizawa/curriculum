<?php
    
    for($i=1;$i <= 40;$i++){
        $rand= mt_rand(1,6);
        $i= $i+$rand;
        $kaime = $kaime+1;
        echo $kaime;
        echo "回目=";
        echo "$rand";
        echo '<br>';
    if ($i>=40) {
     echo "合計";
     echo "$kaime";
     echo "回でゴールしました";
    }  
}
?>