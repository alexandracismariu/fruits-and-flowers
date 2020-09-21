<?php

include "../includes/header.php";

allowOnlyAdminUsers();


if (isset($_POST['submit'])) {

    $privilege = isset($_POST['user_privilege']) ? 1 : 0;

    $sql = "update users set name = '" . $_POST['name'] . "', username = '" . $_POST['username'] . "', password = '" . $_POST['password'] . "', user_privilege = '" . $privilege . "' where id = " . $_GET['id'];

    $result = $mysql->query($sql);
}

$row = getElementFromTable("users", $_GET['id']);

?>


<form class="w-full max-w-xs mx-auto" action="/users/update.php?id=<?php echo $_GET['id']; ?>" method="POST">
    <p class="text-2xl text-green-500 font-bold text-center">User Update</p>

    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="id">
            Id
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="id" type="text" placeholder="id" name="id" value="<?php echo $row['id']; ?>" disable>
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
            Name
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="name" name="name" value="<?php echo $row['name']; ?>">
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
            Username
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="username" name="username" value="<?php echo $row['username']; ?>">
    </div>
<!-- 
    <div class="mb-6">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
            Password
        </label>
        <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="******************" name="password" value="<?php echo $row['password']; ?>">
        <p class="text-red-500 text-xs italic">Please choose a password.</p>
    </div> -->

    <p class="block text-gray-700 text-sm font-bold mb-2">User privilege:</p>
    <div class="mb-6">
        <input type="checkbox" id="user_privilege" name="user_privilege" <?php echo $row['user_privilege'] == 1 ? "checked" : ""; ?>>
        <label for="user_privilege">Administrator</label>
    </div>

    <div class="flex items-center justify-between">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 
            rounded focus:outline-none focus:shadow-outline" type="submit" name="submit" value="update">
            Edit me!
        </button>


        <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
            Forgot Password?
        </a>
    </div>

</form>


<?php
include "../includes/footer.php";
