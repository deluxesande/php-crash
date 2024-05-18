<?php
    session_start();

    if (!isset($_SESSION['username'])) {
        echo "Unauthorized access <br> ";
        echo "<a href='../cookies.php'>Home</a>";
    }else {
        echo "<h1>Welcome {$_SESSION['username']}</h1>";
        echo "<a href='logout.php'>Logout</a>";

    }
?>