<?php
    session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    <?php
        $default_header = "Limegrove Cinemas";
        if (isset($title)) {
            echo "Limegrove Cinemas - ".$title;
        } 
        else {
            echo $default_header;
        }
    ?>
    </title>
</head>
<body>