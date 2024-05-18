<?php

    $file = "extras/users.txt";

    if (file_exists($file)) {
        $handle = fopen($file, 'r');
        $content = fread($handle, filesize($file));

        fclose($handle);

        // echo $content;
    } else {
        $handle = fopen($file, 'w');
        $contents = "John Doe" . PHP_EOL . "Jane Doe" . PHP_EOL . "James Doe" . PHP_EOL;

        fwrite($handle, $contents);
        fclose($handle);
    }
?>

<!-- File uploading -->
<?php
    if (isset($_POST['submit'])) {
        $allowed_ext = array('jpg', 'jpeg', 'png', 'gif');
        try {
            if (!empty($_FILES['file']['name'])) {
                $file_name = $_FILES['file']['name'];
                $file_size = $_FILES['file']['size'];
                $file_tmp_name = $_FILES['file']['tmp_name'];
    
                $target_dir = "uploads/$file_name";
    
                // File extension of uploaded file
                $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
                // $file_ext = explode(".", $file_name);
                $file_ext = strtolower($file_ext);
    
                // Check if file extension is allowed
                if (in_array($file_ext, $allowed_ext)) {
                    if ($file_size <= 1_000_000) {
                        move_uploaded_file($file_tmp_name, $target_dir);
    
                        $message = "<p style='color: green'>File uploaded successfully</p>";
                    } else {
                        $message = "<p style='color: red'>File size too large</p>";
                    }
                } else {
                    $message = "<p style='color: red'>File extension not allowed</p>";
                }
            } else {
                $message = "<p style='color: red'>Please select a file</p>";
                echo $message;
            }
        } catch (TypeError $e) {
            echo $e->getMessage();
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo $message ?? null; ?>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
        <label for="file">Upload File:</label>
        <input type="file" name="file">
        <input type="submit" name="submit" />
</body>
</html>