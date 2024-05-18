<?php
    // Loops in php

    // For loops
    // for( $x = 0; $x <= 10; $x++ ) {
    //     echo "The number is: $x <br>";
    // }

    // // While loops
    // $x = 1;
    // while ($x <= 15 ) {
    //     echo "Number is: $x <br>";
    //     $x++;
    // }

    // // Do while loops
    // $y = 15;
    // do {
    //     echo "Number is: $y <br>";
    //     $y++;
    // } while ($y <= 20);
    
    // // Foreach loops
    // $colors = ["red", "blue", "green", "yellow"];
    // foreach ($colors as $color) {
    //     echo "Color is: $color <br>";
    // }

    // for ( $x = 0; $x < count($colors); $x++) {
    //     echo "Color is: $colors[$x] <br>";
    // }

    $colors = ["red", "blue", "green", "yellow"];
    foreach ($colors as $index => $color) {
        echo $index . '-' . $color . '<br>';
    }
?>