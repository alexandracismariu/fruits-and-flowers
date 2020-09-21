<?php
include "../includes/header.php";

allowOnlyAuthenticatedUsers();

$row = getElementFromTable("users", $_GET['id']);

?>

<ul class="text-lg border-2 border-blue-500 bg-blue-100 w-64 mx-auto">
    <li class="border border-blue-500 bg-blue-100 py-3">
        <b class="ml-2">Id: <?php echo $row['id']; ?></b>
    </li>
    <li class="border border-blue-500 bg-blue-100 py-3">
        <b class="ml-2">Name: <?php echo $row['name']; ?></b>
    </li>
    <li class="border border-blue-500 bg-blue-100 py-3">
        <b class="ml-2">Username: <?php echo $row['username']; ?></b>
    </li>
    <li class="border border-blue-500 bg-blue-100 py-3" <?php echo hideColumnFromTable(); ?>>
        <b class="ml-2">Password: <?php if (($_SESSION['is_admin_logged'] == 1)) { echo $row['password']; } ?></b>
    </li>
    <li class="border border-blue-500 bg-blue-100 py-3" <?php echo hideColumnFromTable(); ?>>
        <b class="ml-2">User role:
            <?php
            if (($_SESSION['is_admin_logged'] == 1)) {
                echo $privilege = $row['user_privilege'] ? "administrator" : "guest";
            }
            ?>
        </b>
    </li>
</ul>

<div class="w-64 mx-auto mt-4" <?php echo hideColumnFromTable(); ?>>
    <a class="text-xl font-bold text-red-600 uppercase" href="delete.php?id=<?php echo $row['id']; ?>">Delete me!</a>
    <br>
    <a class="text-xl font-bold text-green-600 uppercase" href="update.php?id=<?php echo $row['id']; ?>">Edit me!</a>
</div>

<?php
include "../includes/footer.php";
