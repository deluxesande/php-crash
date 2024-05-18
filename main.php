
<?php
    $name = "sean";

    // echo $name;

    // Arrays
    $numbers = [1, 2, 3, 4, 5];
    $fruits = array("apple", "banana", "orange");

    // var_dump($numbers);
    // print_r($fruits[0]);

    // Associated arrays
    $colors = [
        1 => "red",
        2 => "blue"
    ];

    $hex = [
        "red" => "#ff0000",
        "blue" => "#0000ff"
    ];
    
    // echo $hex[$colors[1]];

    $person = [
        'first_name' => 'Sean',
        'last_name' => 'Doe',
        'age' => 30
    ];

    // echo $person['first_name'];

    // Multidimensional arrays
    $people = [
        $person,
        [
            'first_name' => 'John',
            'last_name' => 'Doe',
            'age' => 40
        ]
    ];

    // echo $people[1]['first_name'];
    var_dump(json_encode($people));
?>