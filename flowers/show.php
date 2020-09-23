<?php
include "../includes/header.php";

allowOnlyAuthenticatedUsers();

$row = getElementFromTable("flowers", $_GET['id']);

?>

<h1 class="text-2xl font-bold text-purple-400 my-8 text-center">See a flower!</h1>

<ul class="border-2 border-purple-500 bg-purple-200 text-xl mx-auto w-64">
    <li class="border border-purple-400 py-2 px-4"><b>Id: </b> <?php echo $row['id']; ?></li>
    <li class="border border-purple-400 py-2 px-4"><b>Name: </b> <?php echo $row['name']; ?></li>
    <li class="border border-purple-400 py-2 px-4"><b>Color: </b> <?php echo $row['color']; ?></li>
    <li class="border border-purple-400 py-2 px-4"><b>Type: </b> <?php echo $row['type']; ?></li>
    <li class="border border-purple-400 py-2 px-4"><b>Dangerous:</b> <?php echo $toxic = $row['dangerous'] ? "poisonous" : "not poisonous" ?></li>
    <li class="border border-purple-400 py-2 px-4"><b>Flower tea: </b> <?php echo $tea = $row['flower_tea'] ? "yes" : "no"; ?></li>
    <li class="border border-purple-400 py-2 px-4"><b>Soil needs: </b><?php echo $row['soil_needs']; ?></li>
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
