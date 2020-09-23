<?php
include "../includes/header.php";

allowOnlyAuthenticatedUsers();

$row = getElementFromTable("users", $_GET['id']);

?>

<ul class="text-lg border-2 border-blue-500 bg-blue-100 w-1/5 mx-auto">
    <li class="border border-blue-500 bg-blue-100 py-3">
        <b class="ml-2">Id: <?php echo $row['id']; ?></b>
    </li>
    <li class="border border-blue-500 bg-blue-100 py-3">
        <b class="ml-2">Name: <?php echo $row['name']; ?></b>
    </li>
    <li class="border border-blue-500 bg-blue-100 py-3">
        <b class="ml-2">Username: <?php echo $row['username']; ?></b>
    </li>
    <?php
    if (userIsAdmin()) {
        echo '<li class="border border-blue-500 bg-blue-100 py-3"><b class="ml-2">Password:</b> ' . $row['password'] . "</li>";
    }
    ?>
    <?php
    $privilege = $row['user_privilege'] ? "administrator" : "guest";
    if (userIsAdmin()) {
        echo '<li class="border border-blue-500 bg-blue-100 py-3"><b class="ml-2">User role:</b> ' . $privilege . "</li>";
    }
    ?>
</ul>

    <?php
        if (userIsAdmin()) {
    ?>
            <div class="w-64 mx-auto mt-4">
                <a class="text-xl font-bold text-red-600 uppercase" href="delete.php?id=<?php echo $row['id']; ?>">Delete me!</a>
                <br>
                <a class="text-xl font-bold text-green-600 uppercase" href="update.php?id=<?php echo $row['id']; ?>">Edit me!</a>
            </div>
    <?php
        }
    ?>


<?php
include "../includes/footer.php";
