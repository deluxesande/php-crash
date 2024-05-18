<?php
    class User {
        public $name;
        public $email;
        public $password;

        // Method
        function set_name($name) {
            $this->name = $name;
        }
    }

    $user1 = new User();

    $user1->set_name('John Doe');

    // var_dump($user1);
    echo $user1->name;
?>