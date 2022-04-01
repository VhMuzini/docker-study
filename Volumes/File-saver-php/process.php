<?php

    $message = $_POST["message"];

    $files = scandir("./messages/");
    $num_files = count($files) - 2; // Remover o . e o ..

    $fileName = "msg-{$num_files}.txt";

    $file = fopen("./messages/{$fileName}", "x");

    fwrite($file, $message);

    fclose($file);

    header("Location: index.php");
?>
