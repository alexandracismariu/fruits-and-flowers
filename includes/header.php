<?php 
    session_start();
    include "config.php";
    include "functions.php";
    include "menu.php";
?>

<!DOCTYPE html>
<html>

<head>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title><?php echo $nume_site ?></title>
</head>

<body>

    <h1 class="text-4xl text-blue-500 text-center pb-20">Welcome to my page!</h1>
