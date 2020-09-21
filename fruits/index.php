<?php

include "../includes/header.php";

allowOnlyAuthenticatedUsers();

$result = $mysql->query("select * from fruits;");

?>

<h2 class="text-center text-orange-500 text-xl italic">Fruits table with all information from the database</h2>

<table class="mx-auto">

    <tr class="text-xl bg-orange-200 border">
        <th class="border px-4 py-4 font-bold">Id</th>
        <th class="border px-4 py-4 font-bold">Name</th>
        <th class="border px-4 py-4 font-bold">Color</th>
        <th class="border px-4 py-4 font-bold">Health characteristics</th>
        <th class="border px-4 py-4 font-bold">Dangerous fruit</th>
        <th class="border px-4 py-4 font-bold">Eat peel</th>
        <th class="border px-4 py-4 font-bold">Taste</th>
    </tr>

    <?php
        while ($row = $result->fetch_assoc()) {
    ?>

        <tr class="text-xl">
            <td class="border px-4 py-4">
                <?php echo $row['id']; ?>
            </td>
            <td class="border px-4 py-4">
                <a class="text-blue-500 underline" href="show.php?id=<?php echo $row['id']; ?>">
                    <?php echo $row['name']; ?>
                </a>
            </td>
            <td class="border px-4 py-4">
                <?php echo $row['color']; ?>
            </td>
            <td class="border px-4 py-4">
                <?php echo $row['health_characteristics']; ?>
            </td>
            <td class="border px-4 py-4">
                <?php echo $toxic = $row['dangerous'] ? "yes" : "no"; ?>
            </td>
            <td class="border px-4 py-4">
                <?php echo $shell = $row['peel'] ? "eat" : "don't eat"; ?>
            </td>
            <td class="border px-4 py-4">
                <?php echo $row['taste']; ?>
            </td>
        </tr>

    <?php
    }
    ?>
</table>

























<?php include "../includes/footer.php"; ?>
