<?php
    class User {
        public $name;
        public $email;
        public $password;

        // Constructor
        public function __construct($name, $email, $password) {
            $this->name = $name;
            $this->email = $email;
            $this->password = $password;
        }

        // Method
        // Setters
        function set_name($name) {
            $this->name = $name;
        }

        function get_name() {
            return $this->name;
        }

        function get_email() {
            return $this->email;
        }
    }

    $user1 = new User("John Doe", "johndoe@gmail.com", "123456");

    // var_dump($user1);
    echo $user1->get_email();


    // Inheritance
?>