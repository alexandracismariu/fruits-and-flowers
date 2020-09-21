<?php

include "includes/init.php";

allowOnlyUnauthenticatedUsers();

if (isset($_POST['submit'])) {

    $sql_u = "select * from users where username = '" . $_POST['username'] . "'";
    $res_u = $mysql->query($sql_u);

    $row = $res_u->fetch_assoc();


    if ($_POST['username'] == $row['username']) {
        $message = "Sorry username already taken! Please, choose another!";
        echo "<script type='text/javascript'>alert('" . $message . "');</script>";
    } else {
        $sql = "insert into users (name, username, password) values ( '" . $_POST['name'] . "', '" . $_POST['username'] . "', '" . $_POST['password'] . "')";
        $result = $mysql->query($sql);

        // dump($mysql->insert_id);
        
        if (!$result) {
            dd($mysql->error);
        }

        tryToLogin($_POST['username'], $_POST['password']);

        redirectTo('welcome.php');
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Register Page</title>
</head>

<body>

    <div class="container mx-auto flex justify-between text-xl text-blue-500 py-4">
        <a href="index.php">Home page</a>
    </div>

    <p class="text-center text-xl pt-10">To log in to flowers&fruits.ro please fill in the registration form below or use the login form above:</p>

    <form class="w-full max-w-xs mx-auto mt-10" action="/register.php" method="POST">
        <p class="text-2xl text-blue-500 font-bold text-center">Create new account</p>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                Name
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="name" name="name" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                Username
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="username" name="username" required>
        </div>

        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                Password
            </label>
            <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="******************" name="password" required>
            <p class="text-red-500 text-xs italic">Please choose a password.</p>
        </div>

        <!-- <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                Confirm Password
            </label>
            <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="******************" name="password">
            <p class="text-red-500 text-xs italic">Please confirm password.</p>
        </div> -->

        <button class="
                bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 
                rounded focus:outline-none focus:shadow-outline" 
                type="submit"
                name="submit" 
                value="register">
            Submit
        </button>
        <button class="
                bg-blue-400 hover:bg-blue-700 text-white font-bold py-2 px-4 
                rounded focus:outline-none focus:shadow-outline" 
                type="submit" 
                name="submit" 
                value="register">
            Reset
        </button>

        <div class="flex items-center justify-between mt-6">
            Already have an account?
            <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="login.php">
                Login hear.
            </a>
        </div>

    </form>

</body>

</html>
