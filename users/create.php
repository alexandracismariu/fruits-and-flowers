<?php

include "../includes/header.php";

allowOnlyAdminUsers(); 

if (isset($_POST['submit'])) {

    $user_role = isset($_POST['user_privilege']) ? 1 : 0;

    $sql = "insert into users (name, username, password, user_privilege) values ( '" . $_POST['name'] . "', '" . $_POST['username'] . "', md5('" . $_POST['password'] . "'), '" . $user_role . "')";
    $result = $mysql->query($sql);
}

?>


<form class="w-full max-w-xs mx-auto" action="/users/create.php" method="POST">
    <p class="text-2xl text-blue-500 font-bold text-center">User create</p>

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

    <p class="block text-gray-700 text-sm font-bold mb-2">User privilege:</p>
    <div class="mb-6">
        <input type="checkbox" id="user_privilege" name="user_privilege">
        <label for="user_privilege">Administrator</label>
    </div>

    <div class="flex items-center justify-between">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 
            rounded focus:outline-none focus:shadow-outline" type="submit" name="submit" value="create">
            Create me!
        </button>

        <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
            Forgot Password?
        </a>
    </div>

</form>


<?php
include "../includes/footer.php";
