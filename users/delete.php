<?php
include "../includes/header.php";

allowOnlyAdminUsers();

deleteElementFromTable("users", $_GET['id']);

?>

<h1 class="text-2xl font-bold text-blue-500 my-8 text-center">The user has been deleted!</h1>

<?php
include "../includes/footer.php";

