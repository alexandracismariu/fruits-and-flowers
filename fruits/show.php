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
