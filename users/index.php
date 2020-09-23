<?php
include "../includes/header.php";

allowOnlyAuthenticatedUsers();

$result = $mysql->query("select * from users;");

?>


<h2 class="text-center text-blue-600 text-xl italic">User table with all information from the database</h2>

<table class="mx-auto">
    <tr class="text-xl bg-orange-200 border">
        <th class="border px-4 py-4 font-bold">Id</th>
        <th class="border px-4 py-4 font-bold">Name</th>
        <th class="border px-4 py-4 font-bold">Username</th>
        <?php
            if (userIsAdmin()) {
                echo '<th class="border px-4 py-4 font-bold">Password</th>';
            }
        ?>
        <?php
        if (userIsAdmin()) {
            echo '<th class="border px-4 py-4 font-bold">User role</th>';
        }
        ?>
    </tr>

    <?php while ($row = $result->fetch_assoc()) {
    ?>

        <tr class="text-xl">
            <td class="border px-4 py-4"><?php echo $row['id']; ?></td>
            <td class="border px-4 py-4">
                <a class="hover:text-blue-600 underline" href="show.php?id=<?php echo $row['id']; ?>">
                    <?php echo $row['name']; ?>
                </a>
            </td>
            <td class="border px-4 py-4"><?php echo $row['username']; ?></td>
            <?php
                if (userIsAdmin()) {
                    echo '<td class="border px-4 py-4">' . $row['password'] . "</td>";
                }
            ?>
            <?php
                $privilege = $row['user_privilege'] ? "administrator" : "guest";
                if (userIsAdmin()) {
                    echo '<td class="border px-4 py-4">' .  $privilege . "</td>";
                }
            ?>
        </tr>

    <?php
    }
    ?>
</table>

<?php
include "../includes/footer.php";
