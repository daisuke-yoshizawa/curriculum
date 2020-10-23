<?php
    $testFile = "test.txt";
    $contents = "soccer";
    
    if (is_writable($testFile)) {
       
        $fp = fopen($testFile, "w");

        fwrite($fp, $contents);

        fclose($fp);

        echo "書き込みました";
    } else {

        echo "書き込めません";
        exit;
    }
?>




<?php
    $test_file = "test2.txt";
    
    if (is_readable($test_file)) {

        $fp = fopen($test_file, "r");

        while ($line = fgets($fp)) {
            echo $line.'<br>';
        }
        fclose($fp);
    } else {
        echo "読み込めません!";
        exit;
    }
?>