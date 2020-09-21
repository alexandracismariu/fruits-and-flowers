<?php

include "includes/init.php";

allowOnlyUnauthenticatedUsers();

if (isset($_POST['submit'])) {
    tryToLogin($_POST['username'], $_POST['password']);
}

?>

<!DOCTYPE html>
<html>

<head>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Login Page</title>
</head>

<body>

    <div class="container mx-auto flex justify-between text-xl text-blue-500 py-4">
        <a href="index.php">Home page</a>
    </div>

    <p class="text-center text-blue-500 text-2xl italic mt-20 mb-10">Please fill in your credentials to login or use the registration form above:</p>

    <form class="w-full max-w-sm mx-auto mb-32 p-4 border-2 border-gray-400" action="login.php" method="POST">
        <p class="text-2xl text-blue-500 font-bold text-center">User Login</p>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                Username
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                id="username" type="text" placeholder="username" name="username" required>
        </div>
        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                Password
            </label>
            <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" 
                id="password" type="password" placeholder="******************" name="password" required>
            <p class="text-red-500 text-xs italic">Please choose a password.</p>
        </div>
        <div class="flex items-center justify-between">
            <button
                class="
                    bg-blue-500 hover:bg-blue-700 text-white
                    font-bold py-2 px-4 rounded focus:outline-none 
                    focus:shadow-outline
                "
                type="submit"
                name="submit"
                value="login"
            >
                Login
            </button>

            <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="reset-password.php">
                Forgot Password?
            </a>
        </div>
        <div class="flex items-center justify-between mt-6">
            If you don't have an account
            <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="register.php">
                Sign up hear.
            </a>
        </div>
    </form>

</body>

</html>
