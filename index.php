<?php

include "includes/init.php";

?>

<!DOCTYPE html>
<html>

<head>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Flowers and fruits Page</title>
</head>

<body>

    <div class="container mx-auto flex justify-between text-xl py-4">
        <a class="border border-blue-400 rounded-full py-2 px-4 bg-blue-200" href="">Flowers&fruits</a>
        <a class="py-2 uppercase text-blue-500 hover:text-blue-700 underline" href="welcome.php">Welcome</a>
        <div class="flex justify-end">
            <a class="py-2 text-blue-500 hover:text-blue-700 underline mr-6" href="register.php">Sign up now</a>
            <a class="py-2 text-blue-500 hover:text-blue-700 underline" href="login.php">Login</a>
            <a class="py-2 text-blue-500 hover:text-blue-700 underline ml-6" href="logout.php">Sign Out</a>
        </div>
    </div>

    <h1 class="text-6xl text-blue-500 text-center uppercase pt-20">Flowers and fruits from all over the world!</h1>
    <p class="text-2xl italic text-center">Sing up to see more!</p>

    <div class="container mx-auto py-20">
        <img src="https://previews.123rf.com/images/balagur78/balagur781706/balagur78170600031/79935916-collage-of-summer-photos-with-flowers-fruits-and-vegetables-nature-summer-.jpg">
    </div>

</body>

</html>
