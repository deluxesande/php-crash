<?php
    if (isset($_POST['submit'])) {
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
        $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_SPECIAL_CHARS);

        echo $name;
    }
?>

<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=john&age=30">Click Here</a>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <input type="text" placeholder="name" name="name">
    <input type="text" placeholder="age" name="age">
    <input type="submit" name="submit">
</form>