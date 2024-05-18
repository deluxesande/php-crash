<?php
    $fruits = ["apple", "banana", "orange"];

    // Length of an array
    // echo count($fruits);

    // Search Arrays
    // echo in_array("apple", $fruits) . "<br>";
    // var_dump(in_array("apple", $fruits));

    // Add to an array
    $fruits[] = "grapes";
    array_push($fruits, "mango");
    array_unshift($fruits, "strawberry");

    
    // Remove from an array
    array_pop($fruits); // removes the last element
    array_shift($fruits); // removes the first element
    unset($fruits[1]); // removes the element at index 1

    // Split into 2 chunks
    $chunks = array_chunk($fruits, 2);

    // print_r($chunks);
    // print_r($fruits);

    $arr1 = [1, 2, 3];
    $arr2 = [4, 5, 6];

    $arr3 = array_merge($arr1, $arr2);

    $arr4 = [...$arr1, ...$arr2];

    // print_r($arr3);

    $a = ['green', 'red'];
    $b = ['apple', 'banana'];

    $c = array_combine($a, $b);

    // print_r($c);

    // print_r(array_keys($c));
    $flipped = array_flip($c); // flips the keys and values

    // print_r($flipped);

    $numbers = range(1, 20);

    $newNumbers = array_map(function($number) {
        return $number * 2;
    }, $numbers);

    // print_r($newNumbers);

    $less_10 = array_filter($numbers, function($number) {
        return $number < 10;
    });

    // print_r($less_10);

    $sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);

    var_dump($sum);
?>