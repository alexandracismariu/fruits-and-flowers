<?php
include "../includes/header.php";

allowOnlyAuthenticatedUsers();

$result = $mysql->query("select * from flowers;");

?>

<h2 class="text-xl italic ml-10 pt-4 text-center">Flowers table with information from the database</h2>

<table class="mx-auto">

    <tr class="border-2 border-purple-500 bg-purple-300 text-xl">
        <th class="border border-purple-400 py-2 px-4">Id</th>
        <th class="border border-purple-400 py-2 px-4">Name</th>
        <th class="border border-purple-400 py-2 px-4">Color</th>
        <th class="border border-purple-400 py-2 px-4">Type</th>
        <th class="border border-purple-400 py-2 px-4">Dangerous</th>
        <th class="border border-purple-400 py-2 px-4">Flower tea</th>
        <th class="border border-purple-400 py-2 px-4">Soil needs</th>
    </tr>

    <?php while ($row = $result->fetch_assoc()) {
    ?>

        <tr>
            <td class="border border-purple-400 py-2 text-xl px-4"><?php echo $row['id']; ?></td>
            <td class="border border-purple-400 py-2 text-xl px-4">
                <a class="underline hover:text-purple-700" href="show.php?id=<?php echo $row['id']; ?>">
                    <?php echo $row['name']; ?>
                </a>
            </td>
            <td class="border border-purple-400 py-2 text-xl px-4"><?php echo $row['color']; ?></td>
            <td class="border border-purple-400 py-2 text-xl px-4"><?php echo $row['type']; ?></td>
            <td class="border border-purple-400 py-2 text-xl px-4"><?php echo $toxic = $row['dangerous'] ? "poisonous" : "not poisonous" ?></td>
            <td class="border border-purple-400 py-2 text-xl px-4"><?php echo $tea = $row['flower_tea'] ? "yes" : "no"; ?></td>
            <td class="border border-purple-400 py-2 text-xl px-4"><?php echo $row['soil_needs']; ?></td>
        </tr>

    <?php
    }
    ?>

</table>

<?php
include "../includes/footer.php";

