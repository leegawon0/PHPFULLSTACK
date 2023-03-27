<?php

$n = 5;

for($s1=1; $s1 <= $n ; $s1++) { 
    for($s2=1; $s2 <= $s1; $s2++) { 
        echo "*";
    }
    echo "\n";
}

echo "\n";

for($s1=$n; $s1 >= 1; $s1--) {
    for($s2=1; $s2 <= $s1; $s2++){
        echo "*";
    }
    echo "\n";
}

echo "\n";

for ($s1=1; $s1 <= $n ; $s1++) {
    for($s3=1; $s3 <= $n-$s1; $s3++){
        echo " ";
    }
    for($s2=1; $s2 <= 2*$s1-1; $s2++){
        echo "*";
    }
    echo "\n";
}

echo "\n";

for ($s1=1; $s1 <= $n ; $s1++) {
    for($s3=1; $s3 <= $n-$s1; $s3++){
        echo " ";
    }
    for($s2=1; $s2 <= 2*$s1-1; $s2++){
        echo "*";
    }
    echo "\n";
}
for($s1=$n-1; $s1 >=1 ; $s1--) {
    for($s3=1; $s3 <= $n-$s1; $s3++){
        echo " ";
    }
    for($s2=1; $s2<=2*$s1-1; $s2++){
        echo "*";
    }
    echo"\n";
}

?> 