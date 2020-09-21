<?php
include "../includes/header.php";

allowOnlyAuthenticatedUsers();

$row = getElementFromTable("fruits", $_GET['id']);

?>

<ul class="border-4 border-orange-200 w-64 mx-auto pl-2 text-xl">
    <li><b>Id:</b> <?php echo $row['id']; ?></li>
    <li><b>Name:</b> <?php echo $row['name']; ?></li>
    <li><b>Color:</b> <?php echo $row['color']; ?></li>
    <li><b>Health characteristics:</b> <?php echo $row['health_characteristics']; ?></li>
    <li><b>Dangerous:</b> <?php echo $toxic = $row['dangerous'] ? "yes" : "no"; ?></li>
    <li><b>Peel:</b> <?php echo $shell = $row['peel'] ? "eat" : "don't eat"; ?></li>
    <li><b>Taste:</b> <?php echo $row['taste']; ?></li>
</ul>
<div class="text-xl font-bold uppercase mx-auto w-64 pl-2 border border-red-500 mt-2 py-2" <?php echo hideColumnFromTable(); ?>>
    <a class="text-red-600 underline" href="delete.php?id=<?php echo $row['id']; ?>">Delete the fruit</a>
    <br>
    <a class="text-green-600 underline" href="update.php?id=<?php echo $row['id']; ?>">Edit the fruit</a>
</div>

<?php
include "../includes/footer.php";

