<?php
    // Conditionals in php

    $age = 40;

    if( $age > 20 ) {
        echo "you are not a teenager";
    }else if ( $age === 18 ) {
        echo "you are 18";
    } else {
        echo "you are a teenager";
    }

    $t = date("H");

    echo $t;

    if ($t < "20") {
        echo "Have a good day!";
    } else {
        echo "Have a good night!";
    }
?>