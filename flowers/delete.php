<?php
include "../includes/header.php";

allowOnlyAdminUsers();

deleteElementFromTable("flowers", $_GET['id']);

?>

<h1 class="text-2xl font-bold text-purple-400 my-8 text-center">Flower deleted!</h1>


<?php
include "../includes/footer.php";
?>
