<?php

include "includes/init.php";

allowOnlyAuthenticatedUsers();

$result = $mysql->query("select * from fruits order by id desc limit 3");
$result2 = $mysql->query("select * from flowers order by id limit 3");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>Welcome</title>

    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Welcome Page</title>

</head>

<body>
    <div class="container mx-auto flex justify-between text-xl text-blue-500 py-4">
        <a href="index.php">Home page</a>
        <a href="logout.php" class="text-blue-500 underline  text-lg italic">Sign Out of Your Account</a>
    </div>

    <div class="text-4xl text-center text-blue-500 py-20">
        <h1>Hi, <b></b> Welcome to our site!</h1>
        <a href="reset-password.php" class="text-sm text-blue-500 underline">Reset Your Password</a>
    </div>

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
                    <a class="text-blue-500 underline" href="fruits/show.php?id=<?php echo $row['id']; ?>">
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

    <h2 class="text-xl text-purple-500 italic ml-10 pt-4 text-center mt-10">Flowers table with information from the database</h2>

    <table class="mx-auto mb-10">

        <tr class="border-2 border-purple-500 bg-purple-300 text-xl">
            <th class="border border-purple-400 py-2 px-4">Id</th>
            <th class="border border-purple-400 py-2 px-4">Name</th>
            <th class="border border-purple-400 py-2 px-4">Color</th>
            <th class="border border-purple-400 py-2 px-4">Type</th>
            <th class="border border-purple-400 py-2 px-4">Dangerous</th>
            <th class="border border-purple-400 py-2 px-4">Flower tea</th>
            <th class="border border-purple-400 py-2 px-4">Soil needs</th>
        </tr>

        <?php while ($row2 = $result2->fetch_assoc()) {
        ?>

            <tr>
                <td class="border border-purple-400 py-2 text-xl px-4"><?php echo $row2['id']; ?></td>
                <td class="border border-purple-400 py-2 text-xl px-4">
                    <a class="text-blue-500 underline" href="flowers/show.php?id=<?php echo $row2['id']; ?>">
                        <?php echo $row2['name']; ?>
                    </a>
                </td>
                <td class="border border-purple-400 py-2 text-xl px-4"><?php echo $row2['color']; ?></td>
                <td class="border border-purple-400 py-2 text-xl px-4"><?php echo $row2['type']; ?></td>
                <td class="border border-purple-400 py-2 text-xl px-4"><?php echo $toxic = $row2['dangerous'] ? "poisonous" : "not poisonous" ?></td>
                <td class="border border-purple-400 py-2 text-xl px-4"><?php echo $tea = $row2['flower_tea'] ? "yes" : "no"; ?></td>
                <td class="border border-purple-400 py-2 text-xl px-4"><?php echo $row2['soil_needs']; ?></td>
            </tr>


        <?php
        }
        ?>

    </table>

</body>

</html>
