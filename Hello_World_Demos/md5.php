<?php
    $str = "hello world";
    echo "Before MD5: ".str."\n";
    echo "After MD5: ".md5($str)."\n";
    
    $str = 'apple';
    
    if (md5($str) === '1f3870be274f6c49b3e31a0c6728957f') {
        #echo "\n";
        #echo md5($str);
        echo "Would you like a green or red apple?";
        
    }
    ?>