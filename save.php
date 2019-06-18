<?php
    $imageData = $_REQUEST["image"];
    $filename = $_REQUEST["filename"];
    
    file_put_contents("images/" . $filename . ".png", base64_decode($imageData));

    $line = "\n" . $filename;
    $file = fopen('images/fileNames.csv', 'a');
    fwrite($file, $line);
    fclose($fp);
?>