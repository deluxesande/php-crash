<!-- <?php
    // Cookies and sesions

    // Cookies
    setcookie("name", "John Doe", time() + 86400 * 30);

    setcookie("name", "", time() - 86400);

    if(isset($_COOKIE['name'])) {
        echo 'User ' . $_COOKIE['name'] . ' is set';
    } else {
        echo 'User is not set';
    }


    // Sessions

?> -->

<?php
    session_start();

    if (isset($_POST['submit'])) {
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
        $password = $_POST['password'];

        if ($username == 'john' && $password == 'password') {
            $_SESSION["username"] = $username;
            header('Location: /extras/dashboard.php');
        } else {
            echo 'Incorrect login';
        }
    }
?>

<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=john&age=30">Click Here</a>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <input type="text" placeholder="Username" name="username">
    <input type="password" placeholder="Password" name="password">
    <input type="submit" name="submit">
    <a href="/extras/dashboard.php">Dashboard</a>
</form>