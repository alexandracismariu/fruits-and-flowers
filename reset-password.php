<?php

include "includes/init.php";

?>

<!DOCTYPE html>
<html>

<head>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Reset password</title>
</head>

<body>

    <div class="container mx-auto flex justify-between text-xl text-blue-500 py-4">
        <a href="index.php">Home page</a>
    </div>

    <p class="text-center text-blue-500 text-2xl italic mt-20 mb-10">
        To reset the password, please enter the e-mail address from which you registered on flowers$fruits.ro</p>

    <form class="w-full max-w-sm mx-auto mb-32 p-4 border-2 border-gray-400" action="login.php" method="POST">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                E-mail
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="alex@ygmail.com" name="email" required>
        </div>
        <div class="flex items-center justify-between">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                Send
            </button>
        </div>
    </form>

</body>

</html>
