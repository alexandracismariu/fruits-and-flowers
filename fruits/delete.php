<?php
include "../includes/header.php";

allowOnlyAdminUsers();

deleteElementFromTable("fruits", $_GET['id']);

?>

<h1 class="text-2xl font-bold text-red-400 my-8 text-center">The fruit has been deleted!</h1>


<?php include "../includes/footer.php" ?>
